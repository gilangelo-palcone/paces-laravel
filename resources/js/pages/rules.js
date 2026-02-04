import Sortable from "sortablejs"
import { createRuleHtml, extractRuleData, validateRule } from '../rule-templates.js'

document.addEventListener("DOMContentLoaded", () => {
    if (window.HSOverlay?.autoInit) {
        window.HSOverlay.autoInit()
    }

    const lists = document.querySelectorAll("[data-rules-sortable]")

    if (!lists.length) return

    // Initialize SortableJS for each rule container
    lists.forEach((list) => {
        const groupName = list.getAttribute("data-rules-sortable") || "rules"

        new Sortable(list, {
            animation: 150,
            handle: ".sort-handle",
            draggable: "[data-rules-item]",
            filter: ".rules-add",
            forceFallback: true,
            ghostClass: "sortable-item-ghost",
            chosenClass: "sortable-item-active",
            group: { name: groupName, pull: false, put: false },
            onEnd: function(evt) {
                // Callback after drag ends - you can save order here
                console.log('Rule reordered:', {
                    from: evt.oldIndex,
                    to: evt.newIndex,
                    item: evt.item.dataset.ruleType
                })
            }
        })
    })

    // Handle "Add Condition" button clicks
    document.querySelectorAll('.rules-add').forEach(button => {
        button.addEventListener('click', function() {
            const ruleType = this.dataset.ruleType
            const container = this.closest('.card-body').querySelector('[data-rules-sortable]')
            
            // Create new rule HTML
            const newRuleHtml = createRuleHtml(ruleType)
            
            // Insert before the button
            const tempDiv = document.createElement('div')
            tempDiv.innerHTML = newRuleHtml
            container.appendChild(tempDiv.firstElementChild)
            
            // Attach event listeners to the new rule
            const newRule = container.lastElementChild
            attachRuleEventListeners(newRule)
            
            console.log('New rule added:', ruleType)
        })
    })

    // Attach event listeners to existing rules
    document.querySelectorAll('[data-rules-item]').forEach(rule => {
        attachRuleEventListeners(rule)
    })

    // Function to attach event listeners to a rule item
    function attachRuleEventListeners(ruleElement) {
        // Edit button
        const editBtn = ruleElement.querySelector('[data-action="edit"]')
        if (editBtn) {
            editBtn.addEventListener('click', function() {
                const data = extractRuleData(ruleElement)
                console.log('Edit rule:', data)
                
                // You can open a modal or inline edit here
                // For now, just log the data
            })
        }

        // Delete button
        const deleteBtn = ruleElement.querySelector('[data-action="delete"]')
        if (deleteBtn) {
            deleteBtn.addEventListener('click', function() {
                if (confirm('Are you sure you want to delete this condition?')) {
                    const data = extractRuleData(ruleElement)
                    console.log('Delete rule:', data)
                    
                    // Remove the element
                    ruleElement.remove()
                    
                    // You can send AJAX request to delete from database here
                }
            })
        }

        // Track changes to form fields
        ruleElement.querySelectorAll('[data-field-name]').forEach(field => {
            field.addEventListener('change', function() {
                const data = extractRuleData(ruleElement)
                console.log('Rule data changed:', data)
                
                // You can auto-save or validate here
                const errors = validateRule(data)
                if (errors.length > 0) {
                    console.warn('Validation errors:', errors)
                }
            })
        })
    }

    // Example: Save all rules
    window.saveAllRules = function() {
        const allRules = []
        
        document.querySelectorAll('[data-rules-sortable]').forEach(container => {
            const category = container.dataset.ruleCategory
            const rules = []
            
            container.querySelectorAll('[data-rules-item]').forEach((rule, index) => {
                const data = extractRuleData(rule)
                data.order = index
                data.category = category
                rules.push(data)
            })
            
            allRules.push(...rules)
        })
        
        console.log('All rules:', allRules)
        
        // Send to server via AJAX
        // fetch('/api/rules', {
        //     method: 'POST',
        //     headers: { 'Content-Type': 'application/json' },
        //     body: JSON.stringify({ rules: allRules })
        // })
        
        return allRules
    }
})
