@extends('shared.base', ['title' => 'RadialBar Apexchart']) @section('styles') @endsection @section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Charts', 'title' => 'RadialBar Apexchart']) @include('shared.partials.sidenav')
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Charts', 'title' => 'RadialBar Apexchart'])
            <div class="container-fluid">
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-base">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic RadialBar Chart</h4>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="apex-charts" id="basic-radialbar"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Multiple RadialBars</h4>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="apex-charts" id="multiple-radialbar"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Circle Chart - Custom Angle</h4>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="apex-charts" id="circle-angle-radial"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Circle Chart with Image</h4>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="apex-charts" id="image-radial"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Stroked Circular Guage</h4>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="apex-charts" id="stroked-guage-radial"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Gradient Circular Chart</h4>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="apex-charts" id="gradient-chart"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Semi Circle Gauge</h4>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="apex-charts" id="semi-circle-gauge"></div>
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
<!-- Apex Chart Radialbar Demo js -->
@endsection @section('scripts') @vite(['resources/js/pages/chart-apex-radialbar.js']) @endsection
