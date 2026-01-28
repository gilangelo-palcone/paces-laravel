@extends('shared.base', ['title' => 'Sign In']) @section('styles') @endsection @section('content')
<!-- Start Page Content here -->
<div class="flex min-h-screen items-center p-12.5">
    <div class="container">
        <div class="flex justify-center">
            <div class="xl:w-5/6">
                <div class="absolute end-0 top-0">
                    <img alt="auth-card-bg" src="/images/auth-card-bg.svg" />
                </div>
                <div class="absolute start-0 bottom-0 rotate-180">
                    <img alt="auth-card-bg" src="/images/auth-card-bg.svg" />
                </div>
                <div class="card rounded-2xl">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <div class="card-body relative p-12.5">
                            <!-- Auth Brand Logo -->
                            <div class="mb-7.5 flex flex-col items-center justify-center text-center">
                                <a class="auth-logo" href="{{ url('/') }}">
                                    <img alt="logo" class="flex dark:hidden" src="/images/logo-black.png" />
                                    <img alt="dark logo" class="hidden dark:flex" src="/images/logo.png" />
                                </a>
                                <h4 class="mt-5 mb-2 text-base font-bold">Great to see you here 👋</h4>
                                <p class="text-default-400 mx-auto w-full lg:w-3/4">Let’s get you signed in. Enter your email and password to continue.</p>
                            </div>
                            <div class="grid lg:grid-cols-2 text-default-400 gap-3">
                                <div>
                                    <a class="btn border border-default-300 text-default-900 hover:border-default-400 hover:bg-default-50 w-full oauth-btn h-11 flex items-center justify-center py-2.5" href="{{ route('socialite.redirect', 'google') }}" onclick="showOAuthLoading(this)">
                                        <svg class="me-1 flex-shrink-0" height="14px" viewbox="0 0 256 262" width="13.68px" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622l38.755 30.023l2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285f4"></path>
                                            <path
                                                d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055c-34.523 0-63.824-22.773-74.269-54.25l-1.531.13l-40.298 31.187l-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"
                                                fill="#34a853"
                                            ></path>
                                            <path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82c0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602z" fill="#fbbc05"></path>
                                            <path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0C79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#eb4335"></path>
                                        </svg>
                                        Sign in with Google
                                    </a>
                                </div>
                                <div>
                                    <a class="btn border border-default-300 text-default-900 hover:border-default-400 hover:bg-default-50 w-full oauth-btn h-11 flex items-center justify-center py-2.5" href="{{ route('socialite.redirect', 'facebook') }}" onclick="showOAuthLoading(this)">
                                        <svg class="me-1 flex-shrink-0" height="14px" viewbox="0 0 24 24" width="14px" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" fill="#1877F2"/>
                                        </svg>
                                        Sign in with Facebook
                                    </a>
                                </div>
                            </div>
                            <p class="relative my-5 text-center text-default-400 after:absolute after:start-0 after:end-0 after:top-2.75 after:h-0.75 after:border-t after:border-b after:border-dashed after:border-default-300">
                                <span class="relative z-10 bg-white px-4">Continue with Email</span>
                            </p>
                            <div class="rounded-md">
                                @include('shared.partials.flash-messages')
                                @if ($errors->any())
                                    <div class="mb-5 rounded-lg bg-danger/10 border border-danger/20 p-4">
                                        <p class="text-sm text-danger font-medium">{{ $errors->first() }}</p>
                                    </div>
                                @endif
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-5">
                                        <label class="form-label" for="userEmail">
                                            Email address
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="input-icon-group">
                                            <i class="iconify tabler--mail input-icon"></i>
                                            <input class="form-input @error('email') border-danger @enderror" id="userEmail" name="email" placeholder="you@example.com" required="" type="email" value="{{ old('email') }}" />
                                        </div>
                                        @error('email')
                                            <p class="mt-1 text-sm text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label" for="userPassword">
                                            Password
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="input-icon-group">
                                            <i class="iconify tabler--lock-password input-icon"></i>
                                            <input class="form-input @error('password') border-danger @enderror" id="userPassword" name="password" placeholder="••••••••" required="" type="password" />
                                        </div>
                                        @error('password')
                                            <p class="mt-1 text-sm text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-5 flex items-center justify-between">
                                        <div class="flex items-start gap-2 lg:items-center">
                                            <input class="form-checkbox form-checkbox-light mt-1 size-4.25 lg:mt-0" id="rememberMe" name="remember" type="checkbox" />
                                            <label class="form-check-label" for="rememberMe">Keep me signed in</label>
                                        </div>
                                        <a class="text-default-400 underline underline-offset-4" href="{{ route('password.request') }}">Forgot Password?</a>
                                    </div>
                                    <div>
                                        <button class="btn bg-primary w-full py-3 font-semibold text-white hover:bg-primary-hover" type="submit">Sign In</button>
                                    </div>
                                </form>
                                <p class="text-default-400 mt-7.5 text-center">
                                    New here?
                                    <a class="text-primary font-semibold underline underline-offset-4" href="{{ route('register') }}">Create an account</a>
                                </p>
                                <!-- Auth Footer -->
                                <p class="text-default-400 mt-7.5 text-center">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
                                    Paces - by
                                    <span>Coderthemes</span>
                                </p>
                            </div>
                        </div>
                        <div class="relative hidden h-full overflow-hidden rounded-e-2xl bg-cover bg-center object-cover lg:block" style="background-image: url(&quot;/images/auth.jpg&quot;)">
                            <div class="absolute inset-0 flex items-end justify-center rounded-e-sm p-9 [background:linear-gradient(to_top,#313a46,rgba(49,58,70,.8),rgba(49,58,70,.5))]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page content -->
@include('shared.partials.customizer') @endsection @section('scripts')
@include('shared.partials.oauth-loading-script')
@endsection
