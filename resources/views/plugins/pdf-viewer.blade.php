@extends('shared.base', ['title' => 'PDF Viewer']) @section('styles') @endsection @section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Plugins', 'title' => 'PDF Viewer']) @include('shared.partials.sidenav')
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Plugins', 'title' => 'PDF Viewer'])
            <div class="container-fluid">
                <div class="grid lg:grid-cols-1 gap-base">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="inline-flex text-nowrap">
                                    <button class="btn bg-dark rounded-e-none text-white" id="prev">
                                        <i class="iconify tabler--arrow-left"></i>
                                        <span class="ms-2 hidden sm:inline">Previous</span>
                                    </button>
                                    <button class="btn bg-dark rounded-none text-white" id="next">
                                        <i class="iconify tabler--arrow-right"></i>
                                        <span class="ms-2 hidden sm:inline">Next</span>
                                    </button>
                                    <button class="btn bg-dark rounded-none text-white" id="zoomin">
                                        <i class="iconify tabler--zoom-in"></i>
                                        <span class="ms-2 hidden sm:inline">Zoom In</span>
                                    </button>
                                    <button class="btn bg-dark rounded-none text-white" id="zoomout">
                                        <i class="iconify tabler--zoom-in"></i>
                                        <span class="ms-2 hidden sm:inline">Zoom Out</span>
                                    </button>
                                    <button class="btn bg-dark rounded-s-none text-white" id="zoomfit">100%</button>
                                    <div class="flex">
                                        <input class="form-input ms-3 rounded-e-none!" id="page_num" style="width: 50px" type="number" />
                                        <span class="border-default-300 flex rounded-e border border-s-0 px-3 py-1.5" id="page_count">/ 00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 flex justify-center overflow-auto text-center">
                                <canvas class="pdfcanvas border-default-300 rounded-lg border" id="the-canvas"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </main>
        @include('shared.partials.footer')
    </div>
    <!-- End Page content -->
</div>
@include('shared.partials.customizer')
<!-- PDF Viewer init js -->
@endsection @section('scripts') @vite(['resources/js/pages/plugins-pdf-viewer.js']) @endsection
