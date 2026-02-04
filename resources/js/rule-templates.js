// Rule field templates for dynamic creation
export const ruleTemplates = {
    'period-comparison': {
        name: 'Period Comparison',
        fields: [
            { type: 'label', text: 'Flag' },
            { 
                type: 'select', 
                name: 'account', 
                width: 'w-48', 
                options: ['Merchant Fees', 'Income', 'Expenses', 'Other Accounts'] 
            },
            { type: 'label', text: 'if' },
            { 
                type: 'select', 
                name: 'operator', 
                width: 'w-44', 
                options: ['more than', 'less than', 'equal to'] 
            },
            { type: 'number', name: 'value', width: 'w-24', value: '' },
            { 
                type: 'select', 
                name: 'unit', 
                width: 'w-16', 
                options: ['%'] 
            },
            { type: 'label', text: 'when compared with' },
            { 
                type: 'select', 
                name: 'period', 
                width: 'w-48', 
                options: ['Year to Date', 'Previous Month', 'Previous Quarter'] 
            }
        ]
    },
    
    'sum-threshold': {
        name: 'Sum Threshold',
        fields: [
            { type: 'label', text: 'Flag' },
            { 
                type: 'select', 
                name: 'account', 
                width: 'w-48', 
                options: ['Merchant Fees', 'Supplies', 'Marketing'] 
            },
            { type: 'label', text: 'if' },
            { 
                type: 'select', 
                name: 'operator', 
                width: 'w-44', 
                options: ['more than', 'less than', 'equal to'] 
            },
            { type: 'number', name: 'value', width: 'w-24', value: '' },
            { 
                type: 'select', 
                name: 'unit', 
                width: 'w-16', 
                options: ['%'] 
            },
            { type: 'label', text: 'of sum of' },
            { 
                type: 'select', 
                name: 'sum_account', 
                width: 'w-48', 
                options: ['Total Sales', 'Gross Profit', 'Revenue'] 
            }
        ]
    },
    
    'monthly-threshold': {
        name: 'Monthly Threshold',
        fields: [
            { type: 'label', text: 'Flag' },
            { 
                type: 'select', 
                name: 'account', 
                width: 'w-48', 
                options: ['Electricity Expense', 'Rent', 'Insurance'] 
            },
            { type: 'label', text: 'if' },
            { 
                type: 'select', 
                name: 'operator', 
                width: 'w-44', 
                options: ['is between', 'is greater than', 'is less than'] 
            },
            { type: 'number', name: 'value_from', width: 'w-24', value: '' },
            { 
                type: 'select', 
                name: 'unit_from', 
                width: 'w-16', 
                options: ['$', '€', '£'] 
            },
            { type: 'label', text: 'to' },
            { type: 'number', name: 'value_to', width: 'w-24', value: '' },
            { 
                type: 'select', 
                name: 'unit_to', 
                width: 'w-16', 
                options: ['$', '€', '£'] 
            },
            { type: 'label', text: 'Per Month' }
        ]
    },
    
    'negative-balance': {
        name: 'Negative Balance',
        fields: [
            { type: 'label', text: 'Highlight any' },
            { 
                type: 'select', 
                name: 'account', 
                width: 'w-48', 
                options: ['Income', 'Expense', 'Asset'] 
            },
            { type: 'label', text: 'with negative balance' }
        ]
    }
};

// Create HTML for a rule item based on template
export function createRuleHtml(ruleType, data = {}) {
    const template = ruleTemplates[ruleType];
    if (!template) return '';

    let fieldsHtml = '';
    
    template.fields.forEach(field => {
        if (field.type === 'label') {
            fieldsHtml += `<span class="text-sm text-default-700 flex-shrink-0" data-field-type="label">${field.text}</span>`;
        } else if (field.type === 'select') {
            const selectedValue = data[field.name] || field.options[0];
            let optionsHtml = '';
            field.options.forEach(opt => {
                const selected = opt === selectedValue ? 'selected' : '';
                optionsHtml += `<option value="${opt}" ${selected}>${opt}</option>`;
            });
            fieldsHtml += `<select class="form-select ${field.width}" data-field-type="select" data-field-name="${field.name}" name="${field.name}">${optionsHtml}</select>`;
        } else if (field.type === 'number') {
            const value = data[field.name] || field.value || '';
            fieldsHtml += `<input class="form-input ${field.width} text-center" type="number" data-field-type="number" data-field-name="${field.name}" name="${field.name}" value="${value}" />`;
        }
    });

    return `
        <div class="rules-item w-full flex flex-wrap xl:flex-nowrap items-center gap-4 px-1.5 py-3" data-rules-item data-rule-type="${ruleType}">
            <button aria-label="Reorder condition" class="sort-handle text-default-500 transition-colors hover:text-primary flex-shrink-0" type="button">
                <i class="iconify tabler--grip-vertical text-lg"></i>
            </button>
            <div class="flex flex-wrap xl:flex-nowrap items-center gap-4 flex-1">
                ${fieldsHtml}
            </div>
            <div class="ms-auto flex items-center gap-2 flex-shrink-0">
                <button aria-label="Edit condition" class="btn btn-icon text-default-500 hover:text-primary rule-edit-btn" type="button" data-action="edit">
                    <i class="iconify tabler--pencil text-lg"></i>
                </button>
                <button aria-label="Delete condition" class="btn btn-icon text-default-500 hover:text-danger rule-delete-btn" type="button" data-action="delete">
                    <i class="iconify tabler--trash text-lg"></i>
                </button>
            </div>
        </div>
    `;
}

// Extract data from a rule item element
export function extractRuleData(ruleElement) {
    const data = {
        type: ruleElement.dataset.ruleType,
        id: ruleElement.dataset.ruleId
    };
    
    ruleElement.querySelectorAll('[data-field-name]').forEach(field => {
        const fieldName = field.dataset.fieldName;
        data[fieldName] = field.value;
    });
    
    return data;
}

// Validate rule data
export function validateRule(data) {
    const errors = [];
    
    // Check for required fields based on rule type
    const template = ruleTemplates[data.type];
    if (!template) {
        errors.push('Invalid rule type');
        return errors;
    }
    
    template.fields.forEach(field => {
        if (field.type !== 'label' && field.name) {
            if (!data[field.name] || data[field.name].trim() === '') {
                errors.push(`${field.name} is required`);
            }
        }
    });
    
    return errors;
}
