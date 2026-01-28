<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class SocialiteController extends Controller
{
    /**
     * Redirect to the OAuth provider.
     */
    public function redirectToProvider(string $provider): RedirectResponse
    {
        $this->validateProvider($provider);

        return Socialite::driver($provider)->redirect();
    }

    /**
     * Handle the OAuth provider callback.
     */
    public function handleProviderCallback(string $provider): RedirectResponse
    {
        $this->validateProvider($provider);

        try {
            $socialiteUser = Socialite::driver($provider)->user();
        } catch (Exception $e) {
            Log::error('OAuth authentication failed', [
                'provider' => $provider,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            return redirect()->route('login')->with('error', 'Unable to authenticate with ' . ucfirst($provider) . '. Please try again.');
        }

        // Find or create user
        $user = User::where('provider', $provider)
            ->where('provider_id', $socialiteUser->getId())
            ->first();

        if (!$user) {
            // Check if email already exists
            $existingUser = User::where('email', $socialiteUser->getEmail())->first();

            if ($existingUser) {
                // Link OAuth to existing account
                $existingUser->update([
                    'provider' => $provider,
                    'provider_id' => $socialiteUser->getId(),
                    'avatar' => $socialiteUser->getAvatar(),
                ]);
                $user = $existingUser;
            } else {
                // Create new user
                $user = User::create([
                    'name' => $socialiteUser->getName() ?? $socialiteUser->getNickname() ?? 'User',
                    'email' => $socialiteUser->getEmail(),
                    'provider' => $provider,
                    'provider_id' => $socialiteUser->getId(),
                    'avatar' => $socialiteUser->getAvatar(),
                    'email_verified_at' => now(),
                ]);
            }
        } else {
            // Update avatar if changed
            if ($user->avatar !== $socialiteUser->getAvatar()) {
                $user->update(['avatar' => $socialiteUser->getAvatar()]);
            }
        }

        Auth::login($user, true);

        $message = $user->wasRecentlyCreated 
            ? 'Account created successfully! Welcome aboard!' 
            : 'Welcome back!';

        return redirect()->intended(route('dashboard'))->with('success', $message);
    }

    /**
     * Validate the OAuth provider.
     */
    protected function validateProvider(string $provider): void
    {
        if (!in_array($provider, ['google', 'facebook'])) {
            abort(404);
        }
    }
}
