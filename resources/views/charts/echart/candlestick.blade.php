@extends('shared.base', ['title' => 'Candlestick Echart']) @section('styles') @endsection @section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Charts', 'title' => 'Candlestick Echart']) @include('shared.partials.sidenav')
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Charts', 'title' => 'Candlestick Echart'])
            <div class="container-fluid">
                <div class="space-y-5">
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Candlestick Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-basic-candlestick" style="min-height: 400px"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Mixed Candlestick Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-mixed-candlestick" style="min-height: 400px"></div>
                            </div>
                        </div>
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
<!-- E Charts Demo js -->
@endsection @section('scripts') @vite(['resources/js/pages/chart-echart-candlestick.js']) @endsection
