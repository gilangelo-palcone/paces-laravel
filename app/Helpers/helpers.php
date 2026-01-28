<?php

if (!function_exists('userAvatar')) {
    /**
     * Get the user's avatar URL or default image.
     *
     * @param \App\Models\User|null $user
     * @param string $default
     * @return string
     */
    function userAvatar($user = null, string $default = '/images/users/user-1.jpg'): string
    {
        $user = $user ?? auth()->user();
        
        if (!$user) {
            return $default;
        }
        
        return $user->avatar ?? $default;
    }
}
