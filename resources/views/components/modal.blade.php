@props([
    'id',
    'title' => null,
    'size' => 'md',
    'backdrop' => true,
    'scrollable' => false,
    'showClose' => true,
])

@php
    $sizeClasses = [
        'sm' => 'sm:w-full sm:max-w-xs',
        'md' => 'sm:w-full sm:max-w-lg',
        'lg' => 'lg:w-full lg:max-w-3xl sm:w-full sm:max-w-xl',
        'full' => 'h-full max-h-full sm:w-full sm:max-w-full',
    ];
    $wrapperSize = $sizeClasses[$size ?? 'md'] ?? $sizeClasses['md'];
@endphp

<div
    id="{{ $id }}"
    class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 pointer-events-none fixed inset-0 z-80 hidden overflow-x-hidden overflow-y-auto opacity-0 transition-all {{ $backdrop ? '' : '[--overlay-backdrop:false]' }} {{ $scrollable ? '[--body-scroll:true]' : '' }}"
    role="dialog"
    tabindex="-1"
    @if($title) aria-labelledby="{{ $id }}-label" @endif
>
    <style>
        /* Slightly darken cards that appear inside modals */
        .hs-overlay .modal-cards-darken .card {
            background-color: rgba(15,23,42,0.03);
        }
    </style>
    <div class="hs-overlay-animation-target m-3 flex min-h-[calc(100%-56px)] items-center justify-center {{ $wrapperSize }}">
        <div class="border-default-300 pointer-events-auto flex w-full flex-col rounded-md border card {{ $scrollable ? 'h-[80vh]' : '' }}">
            <div class="border-default-300 flex items-center justify-between border-b p-6">
                @if($title)
                    <h3 class="text-base font-semibold" id="{{ $id }}-label">{{ $title }}</h3>
                @endif
                @if($showClose)
                    <button aria-label="Close" data-hs-overlay="#{{ $id }}" type="button">
                        <span class="sr-only">Close</span>
                        <i class="iconify tabler--x text-xl"></i>
                    </button>
                @endif
            </div>

            <div class="card-body {{ $scrollable ? 'overflow-y-auto' : '' }}">
                <div class="modal-cards-darken">
                    {{ $slot }}
                </div>
            </div>

            @if(isset($footer))
                <div class="border-default-300 flex items-center justify-end gap-2 border-t p-4">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>
