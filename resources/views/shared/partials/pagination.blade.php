@extends('shared.base', ['title' => 'Pagination'])
@section('styles') @endsection
@section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Base UI', 'title' => 'Pagination'])
    @include('shared.partials.sidenav')
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Base UI', 'title' => 'Pagination'])
            <div class="container-fluid">
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-base">
                    <div class="flex gap-base flex-col">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Default Pagination</h4>
                                <button class="btn size-6 rounded-full bg-light text-dark hover:text-primary" data-action="card-toggle">
                                    <i class="iconify tabler--chevron-up text-base"></i>
                                </button>
                            </div>
                            <div class="card-body">
                                <!-- Pagination -->
                                <nav aria-label="Pagination" class="flex items-center -space-x-px">
                                    <button aria-label="Previous" class="border-default-300 hover:bg-default-100 hover:text-primary inline-flex items-center justify-center gap-x-1.5 border px-3 py-1.5 transition-all duration-300 first:rounded-s-md last:rounded-e-md" type="button">
                                        <span>Previous</span>
                                    </button>
                                    <button aria-current="page" class="border-default-300 hover:bg-default-100 hover:text-primary flex items-center justify-center border px-3 py-1.5 transition-all duration-300 first:rounded-s-md last:rounded-e-md" type="button">1</button>
                                    <button class="border-default-300 hover:bg-default-100 hover:text-primary flex items-center justify-center border px-3 py-1.5 transition-all duration-300 first:rounded-s-md last:rounded-e-md" type="button">2</button>
                                    <button class="border-default-300 hover:bg-default-100 hover:text-primary flex items-center justify-center border px-3 py-1.5 transition-all duration-300 first:rounded-s-md last:rounded-e-md" type="button">3</button>
                                    <button aria-label="Next" class="border-default-300 hover:bg-default-100 hover:text-primary inline-flex items-center justify-center gap-x-1.5 border px-3 py-1.5 transition-all duration-300 first:rounded-s-md last:rounded-e-md" type="button">
                                        <span>Next</span>
                                    </button>
                                </nav>
                            </div>
                            <!-- end card-body-->
                        </div>
                        <!-- end card-->
                        <!-- Additional examples trimmed for brevity; use original template for full examples -->
                    </div>
                </div>
            </div>
        </main>
        @include('shared.partials.footer')
    </div>
    <!-- End Page content -->
</div>
@include('shared.partials.customizer')
@endsection
@section('scripts') @endsection
