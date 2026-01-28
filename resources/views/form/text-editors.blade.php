@extends('shared.base', ['title' => 'Text Editors']) @section('styles') @endsection @section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Forms', 'title' => 'Text Editors']) @include('shared.partials.sidenav')
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Forms', 'title' => 'Text Editors'])
            <div class="container-fluid">
                <div class="grid grid-cols-1 gap-base">
                    <div class="card">
                        <div class="card-header block">
                            <h4 class="card-title mb-1.25">Quilljs</h4>
                            <p class="text-default-400">Quill is a modern WYSIWYG editor built for compatibility and extensibility</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-1.25">Snow Editor</h5>
                            <p class="text-default-400 mb-4">Snow is a clean, flat toolbar theme.</p>
                            <div id="snow-editor" style="height: 300px">
                                <h3>A powerful and responsive admin dashboard template built on Tailwind.</h3>
                                <p>
                                    <br />
                                </p>
                                <ul>
                                    <li>Fully responsive layout with a sleek and modern design.</li>
                                    <li>Multiple pre-built pages such as login, registration, dashboard, charts, tables, and more.</li>
                                    <li>Includes various components like modals, alerts, navigation menus, etc.</li>
                                    <li>Easy to customize and extend to suit your project’s needs.</li>
                                    <li>Built with TailwindCSS 4x, ensuring compatibility with a wide range of devices.</li>
                                </ul>
                                <p>
                                    <br />
                                </p>
                                <p>MyAdmin Admin is the perfect choice for your next admin project. Get started today and create a stunning interface for your application.</p>
                            </div>
                        </div>
                        <div class="border-t border-default-300 border-dashed"></div>
                        <div class="card-body">
                            <h4 class="card-title mb-1.25">Bubble Editor</h4>
                            <p class="text-default-400 mb-4">Bubble is a simple tooltip based theme.</p>
                            <div id="bubble-editor" style="height: 300px">
                                <h3>A powerful and responsive admin dashboard template built on Tailwind.</h3>
                                <p>
                                    <br />
                                </p>
                                <ul>
                                    <li>Fully responsive layout with a sleek and modern design.</li>
                                    <li>Multiple pre-built pages such as login, registration, dashboard, charts, tables, and more.</li>
                                    <li>Includes various components like modals, alerts, navigation menus, etc.</li>
                                    <li>Easy to customize and extend to suit your project’s needs.</li>
                                    <li>Built with TailwindCSS 4x, ensuring compatibility with a wide range of devices.</li>
                                </ul>
                                <p>
                                    <br />
                                </p>
                                <p>MyAdmin Admin is the perfect choice for your next admin project. Get started today and create a stunning interface for your application.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header block">
                            <h4 class="card-title mb-1.25">Summernote</h4>
                            <p class="text-default-400 mb-4">Summernote is a JavaScript library that helps you create WYSIWYG editors with a simple and easy-to-use interface. Summernote is licensed under MIT and maintained by the community.</p>
                            <div class="alert bg-warning/15 text-warning alert-dismissible p-4 rounded" role="alert">
                                <strong>Note:</strong>
                                This is a jQuery-based plugin, so you need to include jQuery for it to work.
                                <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="summernote">
                                <h4>MyAdmin Admin - Modern Admin Dashboard</h4>
                                MyAdmin Admin is a powerful and feature-rich Tailwind-based admin template designed to help you build stunning and functional dashboards. It provides a clean, responsive, and easy-to-use interface for managing data and providing insights. With
                                numerous components and options, it is perfect for building any type of web application.
                                <strong>MyAdmin Admin</strong>
                                includes everything you need to start building your next project, from user management to charts, tables, and much more. It’s optimized for performance and mobile responsiveness, ensuring a smooth experience on any device.
                                <br />
                                <br />
                                <ul>
                                    <li>Fully responsive layout</li>
                                    <li>Customizable UI components</li>
                                    <li>Built on Tailwind CSS 4</li>
                                    <li>Multiple ready-to-use pages</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('shared.partials.footer')
    </div>
    <!-- End Page content -->
</div>
@include('shared.partials.customizer')
<!-- Quill Demo Js -->
<!-- Summernote Demo Js -->
@endsection @section('scripts') @vite(['resources/js/pages/form-quilljs.js']) @vite(['resources/js/pages/form-summernote.js']) @endsection
