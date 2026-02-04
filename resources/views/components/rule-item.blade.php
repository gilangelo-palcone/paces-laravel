@props([
    'ruleType' => 'comparison',
    'fields' => [],
    'ruleId' => null
])

<div class="rules-item w-full flex flex-wrap xl:flex-nowrap items-center gap-4 px-1.5 py-3" 
     data-rules-item 
     data-rule-type="{{ $ruleType }}"
     @if($ruleId) data-rule-id="{{ $ruleId }}" @endif>
    
    <!-- Drag Handle -->
    <button aria-label="Reorder condition" class="sort-handle text-default-500 transition-colors hover:text-primary flex-shrink-0" type="button">
        <i class="iconify tabler--grip-vertical text-lg"></i>
    </button>

    <!-- Dynamic Fields Container -->
    <div class="flex flex-wrap xl:flex-nowrap items-center gap-4 flex-1">
        @foreach($fields as $field)
            @if($field['type'] === 'label')
                <span class="text-sm text-default-700 flex-shrink-0" data-field-type="label">{{ $field['text'] }}</span>
            
            @elseif($field['type'] === 'select')
                <select class="form-select {{ $field['width'] ?? 'w-48' }}" 
                        data-field-type="select" 
                        data-field-name="{{ $field['name'] ?? '' }}"
                        name="{{ $field['name'] ?? '' }}">
                    @foreach($field['options'] as $option)
                        <option value="{{ $option['value'] ?? $option }}" 
                                {{ ($field['selected'] ?? '') === ($option['value'] ?? $option) ? 'selected' : '' }}>
                            {{ $option['label'] ?? $option }}
                        </option>
                    @endforeach
                </select>
            
            @elseif($field['type'] === 'number')
                <input class="form-input {{ $field['width'] ?? 'w-24' }} text-center" 
                       type="number" 
                       data-field-type="number"
                       data-field-name="{{ $field['name'] ?? '' }}"
                       name="{{ $field['name'] ?? '' }}"
                       value="{{ $field['value'] ?? '' }}" />
            
            @endif
        @endforeach
    </div>

    <!-- Action Buttons -->
    <div class="ms-auto flex items-center gap-2 flex-shrink-0">
        <button aria-label="Edit condition" 
                class="btn btn-icon text-default-500 hover:text-primary rule-edit-btn" 
                type="button"
                data-action="edit">
            <i class="iconify tabler--pencil text-lg"></i>
        </button>
        <button aria-label="Delete condition" 
                class="btn btn-icon text-default-500 hover:text-danger rule-delete-btn" 
                type="button"
                data-action="delete">
            <i class="iconify tabler--trash text-lg"></i>
        </button>
    </div>
</div>
