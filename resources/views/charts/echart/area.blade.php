@extends('shared.base', ['title' => 'Area Echart']) @section('styles') @endsection @section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Charts', 'title' => 'Area Echart']) @include('shared.partials.sidenav')
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Charts', 'title' => 'Area Echart'])
            <div class="container-fluid">
                <div class="grid xl:grid-cols-2 gap-base">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Area Chart</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-line" style="min-height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Stacked Area Chart</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-line-stacked" style="min-height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Area with Marker</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-line-marker" style="min-height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dynamic Area</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-dynamic-line" style="min-height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Step Area</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-step-line" style="min-height: 300px"></div>
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
<!-- E Charts Demo js -->
@endsection @section('scripts') @vite(['resources/js/pages/chart-echart-area.js']) @endsection
