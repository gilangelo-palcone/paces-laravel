@extends('shared.base', ['title' => 'Slope Apexcharts']) @section('styles') @endsection @section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Charts', 'title' => 'Slope Apexcharts']) @include('shared.partials.sidenav')
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Charts', 'title' => 'Slope Apexcharts'])
            <div class="container-fluid">
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-base">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Slope</h4>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="apex-charts" id="basic-slope"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Multi Slope</h4>
                        </div>
                        <div class="card-body">
                            <div dir="ltr">
                                <div class="apex-charts" id="multi-slope"></div>
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
<!-- Apex Chart Slope Demo js -->
@endsection @section('scripts') @vite(['resources/js/pages/chart-apex-slope.js']) @endsection
