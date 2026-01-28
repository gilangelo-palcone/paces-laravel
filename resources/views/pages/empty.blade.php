@extends('shared.base', ['title' => 'Empty']) @section('styles') @endsection @section('content')
<div class="wrapper">
    @include('shared.partials.sidenav') @include('shared.partials.topbar', ['subtitle' => 'Pages', 'title' => 'Empty'])
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>@include('shared.partials.page-title', ['subtitle' => 'Pages', 'title' => 'Empty'])</main>
        @include('shared.partials.footer')
    </div>
    <!-- End Page content -->
</div>
@include('shared.partials.customizer') @endsection @section('scripts') @endsection
