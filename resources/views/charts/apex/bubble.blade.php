@extends('shared.base', ['title' => 'Bubble Apexchart']) @section('styles') @endsection @section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Charts', 'title' => 'Bubble Apexchart']) @include('shared.partials.sidenav')
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Charts', 'title' => 'Bubble Apexchart'])
            <div class="container-fluid">
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-base">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Simple Bubble Charts</h4>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="apex-charts" id="simple-bubble"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">3D Bubble Charts</h4>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="apex-charts" id="threed-bubble"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Bubble Charts</h4>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="apex-charts" id="three-bubble"></div>
                            </div>
                        </div>
                        <!-- end card body-->
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
<!-- Apex Chart Bubble Demo js -->
@endsection @section('scripts') @vite(['resources/js/pages/chart-apex-bubble.js']) @endsection
