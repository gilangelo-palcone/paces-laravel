@extends('shared.base', ['title' => 'Scatter Apexchart']) @section('styles') @endsection @section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Charts', 'title' => 'Scatter Apexchart']) @include('shared.partials.sidenav')
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Charts', 'title' => 'Scatter Apexchart'])
            <div class="container-fluid">
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-base">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Scatter (XY) Chart</h4>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="apex-charts" id="basic-scatter"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Scatter Chart - Datetime</h4>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="apex-charts" id="datetime-scatter"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Scatter - Images</h4>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="apex-charts" id="scatter-images"></div>
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
<!-- Apex Chart Scatter Demo js -->
@endsection @section('scripts') @vite(['resources/js/pages/chart-apex-scatter.js']) @endsection
