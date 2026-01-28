@extends('shared.base', ['title' => 'Maintenance']) @section('styles') @endsection @section('content')
<!-- Start Page Content here -->
<div class="flex min-h-screen items-center">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-xs md:w-160">
                <div class="absolute end-0 top-0">
                    <img alt="auth-card-bg" src="/images/auth-card-bg.svg" />
                </div>
                <div class="absolute start-0 bottom-0 rotate-180">
                    <img alt="auth-card-bg" src="/images/auth-card-bg.svg" />
                </div>
                <div class="card">
                    <div class="card-body p-12.5">
                        <div class="mb-3 flex flex-col items-center justify-center text-center">
                            <a href="{{ url('/') }}">
                                <img alt="logo" class="flex h-8 dark:hidden" src="/images/logo-black.png" />
                                <img alt="dark logo" class="hidden h-8 dark:flex" src="/images/logo.png" />
                            </a>
                        </div>
                        <div class="p-3 text-center">
                            <div>
                                <img alt="Maintenance" class="mx-auto size-64" src="/images/svg/maintenance.svg" />
                                <h3 class="mb-2 text-2xl font-bold uppercase">Site Under Maintenance</h3>
                                <p class="text-default-400 mx-auto md:w-82">We’re currently performing scheduled maintenance. Please check back soon.</p>
                                <div class="mt-8 flex items-center justify-center gap-2">
                                    <button class="btn bg-primary text-white hover:bg-primary-hover">Call Now</button>
                                    <button class="btn bg-info text-white hover:bg-info-hover">Email Us</button>
                                </div>
                            </div>
                        </div>
                        <!-- Auth Footer -->
                        <p class="text-default-400 mt-18 text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            Paces - by
                            <span>Coderthemes</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page content -->
@include('shared.partials.customizer') @endsection @section('scripts') @endsection
