@extends('shared.base', ['title' => 'Calendar']) @section('styles') @endsection @section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Apps', 'title' => 'Calendar']) @include('shared.partials.sidenav')
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Apps', 'title' => 'Calendar'])
            <div class="container-fluid">
                <div class="flex gap-1.25">
                    <div class="card rounded-r-0 hidden lg:flex h-[calc(100%-190px)]">
                        <div class="card-body">
                            <button aria-controls="event-modal" aria-expanded="false" aria-haspopup="dialog" class="btn bg-primary w-full text-white" data-hs-overlay="#event-modal">
                                <i class="iconify tabler--plus align-middle"></i>
                                Create New Event
                            </button>
                            <div id="external-events">
                                <p class="text-default-400 mt-2.5 mb-base text-xs italic">Drag and drop your event or click in the calendar</p>
                                <div class="text-primary bg-primary/10 my-1.5 rounded px-4 py-2 font-semibold">
                                    <i class="iconify tabler--circle-filled me-2"></i>
                                    Design Review
                                </div>
                                <div class="text-secondary bg-secondary/10 my-1.5 rounded px-4 py-2 font-semibold">
                                    <i class="iconify tabler--circle-filled me-2"></i>
                                    Marketing Strategy
                                </div>
                                <div class="text-success bg-success/10 my-1.5 rounded px-4 py-2 font-semibold">
                                    <i class="iconify tabler--circle-filled me-2"></i>
                                    Sales Demo
                                </div>
                                <div class="text-danger bg-danger/10 my-1.5 rounded px-4 py-2 font-semibold">
                                    <i class="iconify tabler--circle-filled me-2"></i>
                                    Deadline Submission
                                </div>
                                <div class="text-info bg-info/10 my-1.5 rounded px-4 py-2 font-semibold">
                                    <i class="iconify tabler--circle-filled me-2"></i>
                                    Training Session
                                </div>
                                <div class="text-warning bg-warning/10 my-1.5 rounded px-4 py-2 font-semibold">
                                    <i class="iconify tabler--circle-filled me-2"></i>
                                    Budget Review
                                </div>
                                <div class="text-dark bg-dark/10 my-1.5 rounded px-4 py-2 font-semibold">
                                    <i class="iconify tabler--circle-filled me-2"></i>
                                    Board Meeting
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card flex-1 rounded-s-none border-s-0">
                        <div class="card-header inline-flex lg:hidden">
                            <button aria-controls="event-modal" aria-expanded="false" aria-haspopup="dialog" class="btn bg-primary w-full text-white" data-hs-overlay="#event-modal">
                                <i class="iconify tabler--plus align-middle"></i>
                                Create New Event
                            </button>
                        </div>
                        <div class="card-body">
                            <div id="calendar"></div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card-->
                </div>
            </div>
        </main>
        @include('shared.partials.footer')
        <!-- Event Add Modal -->
        <div aria-labelledby="event-modal-label" class="hs-overlay hidden size-full fixed top-0 start-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none" id="event-modal" role="dialog" tabindex="-1">
            <div class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-56px)] flex items-center">
                <div class="card w-full flex flex-col border border-default-200 shadow-2xs pointer-events-auto">
                    <div class="card-header p-5">
                        <h3 class="font-semibold text-base text-default-800 dark:text-white" id="modal-title">Create Event</h3>
                        <button aria-label="Close" class="size-5 text-default-800" data-hs-overlay="#event-modal" type="button">
                            <span class="sr-only">Close</span>
                            <span class="text-xl" data-icon="x"></span>
                        </button>
                    </div>
                    <form autocomplete="off" class="needs-validation" id="form-event" name="event-form">
                        <div class="card-body">
                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <label class="form-label" for="event-title">Event Name</label>
                                    <input class="form-input" id="event-title" placeholder="Insert Event Name" required="" type="text" />
                                </div>
                                <div>
                                    <label class="form-label" for="event-category">Category</label>
                                    <select class="form-input flex items-center" id="event-category" name="event-category" required="">
                                        <option>Select Category</option>
                                        <option selected="" value="!text-primary">Primary</option>
                                        <option value="!text-success">Success</option>
                                        <option value="!text-info">Info</option>
                                        <option value="!text-warning">Warning</option>
                                        <option value="!text-danger">Danger</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer flex gap-2 md:justify-end">
                            <button class="btn bg-light hover:text-primary" data-hs-overlay="#event-modal" id="btn-delete-event" type="button">Cancel</button>
                            <button class="btn bg-primary text-white hover:bg-primary-hover" id="btn-save-event" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Event Add Modal -->
    </div>
    <!-- End Page content -->
</div>
@include('shared.partials.customizer')
<!-- Calendar App Demo js -->
@endsection @section('scripts') @vite(['resources/js/pages/apps-calendar.js']) @endsection
