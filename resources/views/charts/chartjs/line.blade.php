@extends('shared.base', ['title' => 'Line Charts']) @section('styles') @endsection @section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Charts', 'title' => 'Line Charts']) @include('shared.partials.sidenav')
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Charts', 'title' => 'Line Charts'])
            <div class="container-fluid">
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-base">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Basic Line</h5>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="mt-3" style="height: 300px">
                                    <canvas id="basic-line-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Interpolation</h5>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="mt-3" style="height: 300px">
                                    <canvas id="interpolation-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Multi-Axes</h5>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="mt-3" style="height: 300px">
                                    <canvas id="multi-axes-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Point Styling</h5>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="mt-3" style="height: 300px">
                                    <canvas id="point-styling-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Line Segment</h5>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="mt-3" style="height: 300px">
                                    <canvas id="line-segment-chart"></canvas>
                                </div>
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
<!-- Apex Chart Area Demo js -->
@endsection @section('scripts') @vite(['resources/js/pages/chartjs-line.js']) @endsection
