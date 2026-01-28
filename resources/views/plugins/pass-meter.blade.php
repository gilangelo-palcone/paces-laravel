@extends('shared.base', ['title' => 'Password Meter']) @section('styles') @endsection @section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Plugins', 'title' => 'Password Meter']) @include('shared.partials.sidenav')
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Plugins', 'title' => 'Password Meter'])
            <div class="container-fluid">
                <div class="grid lg:grid-cols-2 gap-base">
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Progress Bar</h4>
                                <div>
                                    <a class="size-6 flex justify-center items-center rounded-full bg-light" data-action="card-toggle" href="#!">
                                        <i class="iconify tabler--chevron-up align-middle"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <!-- HTML -->
                                <input class="form-input mb-3" placeholder="Password" type="password" />
                                <div class="password-bar mb-3"></div>
                                <p class="text-default-400 text-2xs">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</p>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Password Condition</h4>
                                <div>
                                    <a class="size-6 flex justify-center items-center rounded-full bg-light" data-action="card-toggle" href="#!">
                                        <i class="iconify tabler--chevron-up align-middle"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <!-- HTML -->
                                <div>
                                    <label class="form-label hs-collapse-toggle" data-hs-collapse="#passwordBox" for="password-input" id="password-collapse-toggle">Magic Password ✨ (Click Here)</label>
                                    <input class="form-input hs-collapse-toggle" data-hs-collapse="#passwordBox" id="password-input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter password" type="password" />
                                    <div class="text-default-400 mt-1 text-2xs">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                                    <div class="password-box hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" id="passwordBox">
                                        <div class="p-3">
                                            <h5 class="mb-2 text-sm">Password Recipe:</h5>
                                            <p class="invalid text-xs mb-2" id="pass-length">
                                                Minimum
                                                <b>8 characters</b>
                                            </p>
                                            <p class="invalid text-xs mb-2" id="pass-lower">
                                                At
                                                <b>lowercase</b>
                                                letter (a-z)
                                            </p>
                                            <p class="invalid text-xs mb-2" id="pass-upper">
                                                At least
                                                <b>uppercase</b>
                                                letter (A-Z)
                                            </p>
                                            <p class="invalid text-xs" id="pass-number">
                                                A least
                                                <b>number</b>
                                                (0-9)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
            </div>
        </main>
        @include('shared.partials.footer')
    </div>
    <!-- End Page content -->
</div>
@include('shared.partials.customizer')
<!-- Passwod Meter Plugin Js -->
@endsection @section('scripts') @vite(['resources/js/pages/plugins-pass-meter.js']) @endsection
