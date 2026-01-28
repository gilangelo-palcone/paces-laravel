@extends('shared.base', ['title' => 'Leaflet Maps']) @section('styles') @endsection @section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Maps', 'title' => 'Leaflet']) @include('shared.partials.sidenav')
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Maps', 'title' => 'Leaflet'])
            <div class="grid xl:grid-cols-2 gap-base">
                <div class="card">
                    <div class="card-header block">
                        <h4 class="card-title mb-1.5">Basic Map</h4>
                        <p class="text-default-400">A simple Leaflet map centered with default tile layer and controls.</p>
                    </div>
                    <div class="card-body">
                        <div class="leaflet-map z-30 h-75" id="basicMap"></div>
                    </div>
                </div>
                <!-- end card-->
                <div class="card">
                    <div class="card-header block">
                        <h4 class="card-title mb-1.5">Marker Circle &amp; Polygon</h4>
                        <p class="text-default-400">Shows how to add interactive markers, circles, and polygons on the map.</p>
                    </div>
                    <div class="card-body">
                        <div class="leaflet-map z-30 h-75" id="shapeMap"></div>
                    </div>
                </div>
                <!-- end card-->
                <div class="card">
                    <div class="card-header block">
                        <h4 class="card-title mb-1.5">Draggable Marker With Popup</h4>
                        <p class="text-default-400">Allows dragging a marker with a popup that displays dynamic content.</p>
                    </div>
                    <div class="card-body">
                        <div class="leaflet-map z-30 h-75" id="dragMap"></div>
                    </div>
                </div>
                <!-- end card-->
                <div class="card">
                    <div class="card-header block">
                        <h4 class="card-title mb-1.5">User Location</h4>
                        <p class="text-default-400">Uses the browser's geolocation API to show the user's current location.</p>
                    </div>
                    <div class="card-body">
                        <div class="leaflet-map z-30 h-75" id="userLocation"></div>
                    </div>
                </div>
                <!-- end card-->
                <div class="card">
                    <div class="card-header block">
                        <h4 class="card-title mb-1.5">Custom Icons</h4>
                        <p class="text-default-400">Demonstrates using custom image icons for Leaflet map markers.</p>
                    </div>
                    <div class="card-body">
                        <div class="leaflet-map z-30 h-75" id="customIcons"></div>
                    </div>
                </div>
                <!-- end card-->
                <div class="card">
                    <div class="card-header block">
                        <h4 class="card-title mb-1.5">Layer Control</h4>
                        <p class="text-default-400">Toggles between multiple map layers or overlays using Leaflet’s layer control.</p>
                    </div>
                    <div class="card-body">
                        <div class="leaflet-map z-30 h-75" id="layerControl"></div>
                    </div>
                </div>
                <!-- end card-->
                <div class="card">
                    <div class="card-header block">
                        <h4 class="card-title mb-1.5">Interactive Choropleth Map</h4>
                        <p class="text-default-400">Displays region-based data using GeoJSON and interactive color scales.</p>
                    </div>
                    <div class="card-body">
                        <div class="leaflet-map z-30 h-75" id="geoJson"></div>
                    </div>
                </div>
                <!-- end card-->
            </div>
            <!-- end grid-->
        </main>
        @include('shared.partials.footer')
    </div>
    <!-- End Page content -->
</div>
@include('shared.partials.customizer')
<!-- Vector Map Demo js-->
@endsection @section('scripts') @vite(['resources/js/pages/maps-leaflet.js']) @endsection
