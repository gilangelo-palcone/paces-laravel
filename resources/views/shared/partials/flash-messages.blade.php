@if (session('success'))
    <div class="mb-5 rounded-lg bg-success/10 border border-success/20 p-4" role="alert">
        <div class="flex items-center gap-3">
            <i class="iconify tabler--circle-check text-success text-xl"></i>
            <p class="text-sm text-success font-medium">{{ session('success') }}</p>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="mb-5 rounded-lg bg-danger/10 border border-danger/20 p-4" role="alert">
        <div class="flex items-center gap-3">
            <i class="iconify tabler--alert-circle text-danger text-xl"></i>
            <p class="text-sm text-danger font-medium">{{ session('error') }}</p>
        </div>
    </div>
@endif

@if (session('info'))
    <div class="mb-5 rounded-lg bg-info/10 border border-info/20 p-4" role="alert">
        <div class="flex items-center gap-3">
            <i class="iconify tabler--info-circle text-info text-xl"></i>
            <p class="text-sm text-info font-medium">{{ session('info') }}</p>
        </div>
    </div>
@endif

@if (session('warning'))
    <div class="mb-5 rounded-lg bg-warning/10 border border-warning/20 p-4" role="alert">
        <div class="flex items-center gap-3">
            <i class="iconify tabler--alert-triangle text-warning text-xl"></i>
            <p class="text-sm text-warning font-medium">{{ session('warning') }}</p>
        </div>
    </div>
@endif
