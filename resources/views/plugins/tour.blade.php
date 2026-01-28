@extends('shared.base', ['title' => 'Tour']) @section('styles') @endsection @section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Plugins', 'title' => 'Tour']) @include('shared.partials.sidenav')
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Plugins', 'title' => 'Tour'])
            <div class="container">
                <div class="flex justify-center">
                    <div class="lg:w-1/2">
                        <div class="mt-7.5 mb-15 text-center">
                            <a class="mb-7.5 flex justify-center" href="{{ url('/') }}">
                                <img alt="dark logo" class="flex h-6.5 dark:hidden" src="/images/logo-black.png" />
                                <img alt="logo" class="hidden h-8 dark:flex" src="/images/logo.png" />
                            </a>
                            <h5 class="mb-2.5 text-base">Versatile &amp; Scalable Admin Panel Template</h5>
                            <p class="text-default-400 text-sm">
                                Build modern web applications faster with our feature-rich admin panel. Compatible with multiple frameworks and packed with diverse demos, it offers seamless customization and a consistent UI across all your projects.
                            </p>
                            <!-- Buttons -->
                            <div class="mt-7.5 flex flex-wrap justify-center gap-2.5">
                                <button class="btn bg-primary hover:bg-primary-hover text-white" id="tourTrigger" onclick="startTour()">
                                    <i class="iconify tabler--player-play me-1"></i>
                                    Start Guided Tour
                                </button>
                                <a class="btn bg-dark hover:bg-dark-hover text-white" data-tg-order="1" data-tg-title="Getting Started" data-tg-tour="Click here to get started and explore our framework-rich admin panel. 🚀" href="#!">
                                    <i class="iconify tabler--compass me-1"></i>
                                    Discover Features
                                </a>
                                <a class="btn bg-danger hover:bg-danger-hover text-white" data-tg-order="2" data-tg-title="Buy Now" data-tg-tour="Ready to supercharge your project? Click here to purchase the template!" href="#!" target="_blank">
                                    <i class="iconify tabler--shopping-cart me-1"></i>
                                    Get the Template
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div data-tg-order="3" data-tg-title="Core Features" data-tg-tour="Learn more about the versatile services and modules we provide to enhance development.">
                    <div class="grid xl:grid-cols-4 gap-base">
                        <div class="card h-full p-2.5">
                            <div class="card-body pb-0">
                                <div class="mb-base">
                                    <span class="avatar-title bg-secondary flex size-12 items-center justify-center rounded-full text-2xl text-white">
                                        <i class="iconify tabler--device-desktop"></i>
                                    </span>
                                </div>
                                <h4 class="mb-2.5 text-lg font-semibold">Multiple Frameworks</h4>
                                <p class="text-default-400 mb-base">Support for Bootstrap, Tailwind, React, Vue, Angular, Laravel, and more — use what suits your stack.</p>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <a class="text-primary font-semibold hover:text-primary-hover" href="#">
                                    Know more
                                    <i class="iconify tabler--arrow-right ms-1 align-middle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card h-full p-2.5">
                            <div class="card-body pb-0">
                                <div class="mb-base">
                                    <span class="avatar-title bg-secondary flex size-12 items-center justify-center rounded-full text-2xl text-white">
                                        <i class="iconify tabler--layout"></i>
                                    </span>
                                </div>
                                <h4 class="mb-2.5 text-lg font-semibold">Multiple Demos</h4>
                                <p class="text-default-400 mb-base">Choose from a variety of pre-built demos to match your use case — from CRM to SaaS dashboards.</p>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <a class="text-primary font-semibold hover:text-primary-hover" href="#">
                                    Know more
                                    <i class="iconify tabler--arrow-right ms-1 align-middle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card h-full p-2.5">
                            <div class="card-body pb-0">
                                <div class="mb-base">
                                    <span class="avatar-title bg-secondary flex size-12 items-center justify-center rounded-full text-2xl text-white">
                                        <i class="iconify tabler--brush"></i>
                                    </span>
                                </div>
                                <h4 class="mb-2.5 text-lg font-semibold">Customizable UI</h4>
                                <p class="text-default-400 mb-base">Easily tailor colors, layouts, and components to match your branding and requirements.</p>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <a class="text-primary font-semibold hover:text-primary-hover" href="#">
                                    Know more
                                    <i class="iconify tabler--arrow-right ms-1 align-middle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card h-full p-2.5">
                            <div class="card-body pb-0">
                                <div class="mb-base">
                                    <span class="avatar-title bg-secondary flex size-12 items-center justify-center rounded-full text-2xl text-white">
                                        <i class="iconify tabler--rocket"></i>
                                    </span>
                                </div>
                                <h4 class="mb-2.5 text-lg font-semibold">High Performance</h4>
                                <p class="text-default-400 mb-base">Optimized for speed and efficiency, our admin panel ensures a seamless experience for developers and users alike.</p>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <a class="text-primary font-semibold hover:text-primary-hover" href="#">
                                    Know more
                                    <i class="iconify tabler--arrow-right ms-1 align-middle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </main>
        @include('shared.partials.footer')
    </div>
    <!-- End Page content -->
</div>
@include('shared.partials.customizer')
<!-- Tour Guide Plugin Js -->
@endsection @section('scripts') @vite(['resources/js/pages/plugins-tour.js']) @endsection
