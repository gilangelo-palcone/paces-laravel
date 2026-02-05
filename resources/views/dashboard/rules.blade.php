@extends('shared.base', ['title' => 'Rules'])
@section('styles') @endsection
@section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Dashboards', 'title' => 'Rules'])
    @include('shared.partials.sidenav')

    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Dashboards', 'title' => 'Rules'])
            <div class="container-fluid">
                <!-- Filters -->
                <div class="card mb-base">
                                    <div class="card-body bg-light/20">
                                        <div class="flex flex-col md:flex-row items-center gap-base">
                            <div class="flex-1 min-w-0">
                                <div class="input-icon-group">
                                    <i class="iconify tabler--search input-icon"></i>
                                    <input class="form-input h-10 text-sm w-full" placeholder="Search rule name..." type="text" />
                                </div>
                            </div>

                            <div class="flex-1 min-w-0">
                                <div class="input-icon-group">
                                    <i class="iconify tabler--filter input-icon"></i>
                                    <select class="form-select h-10 text-sm w-full">
                                        <option selected>Rule Type</option>
                                        <option value="period-comparison">Period comparison</option>
                                        <option value="sum-threshold">Sum threshold</option>
                                        <option value="monthly-threshold">Monthly threshold</option>
                                        <option value="negative-balance">Negative balance</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex-1 min-w-0">
                                <div class="input-icon-group">
                                    <i class="iconify tabler--activity input-icon"></i>
                                    <select class="form-select h-10 text-sm w-full">
                                        <option selected>Status</option>
                                        <option>Active</option>
                                        <option>Draft</option>
                                        <option>Disabled</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex-1 min-w-0">
                                <div class="input-icon-group">
                                    <i class="iconify tabler--calendar-clock input-icon"></i>
                                    <select class="form-select h-10 text-sm w-full">
                                        <option selected>Period</option>
                                        <option>Year to Date</option>
                                        <option>Previous Month</option>
                                        <option>Previous Quarter</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex-none flex items-center gap-2">
                                <button class="btn h-10 px-3 bg-secondary text-white hover:bg-secondary-hover" type="button">Apply</button>
                                <a class="btn h-10 px-4 bg-primary text-white hover:bg-primary-hover" href="{{ route('dashboard.rules.create') }}">
                                    <i class="iconify tabler--plus text-lg"></i>
                                    <span class="ms-2">Create Rule</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body space-y-5">
                        <div class="flex flex-wrap items-center justify-between gap-3">
                            <h4 class="text-lg font-semibold">Rule Engine</h4>
                        </div>

                        <!-- Accounts when compared with periods -->
                        <div class="card border-default-200 shadow-none">
                            <div class="card-body space-y-3">
                                <h5 class="card-title text-base mb-0">Accounts when compared with periods</h5>
                                <div class="space-y-3" data-rules-sortable="rules-periods" data-rule-category="period-comparison">
                                    
                                    <x-rule-item 
                                        ruleType="period-comparison"
                                        :fields="[
                                            ['type' => 'label', 'text' => 'Flag'],
                                            ['type' => 'select', 'name' => 'account', 'width' => 'w-48', 'options' => ['Merchant Fees', 'Income', 'Expenses', 'Other Accounts'], 'selected' => 'Merchant Fees'],
                                            ['type' => 'label', 'text' => 'if'],
                                            ['type' => 'select', 'name' => 'operator', 'width' => 'w-44', 'options' => ['more than', 'less than', 'equal to'], 'selected' => 'more than'],
                                            ['type' => 'number', 'name' => 'value', 'width' => 'w-24', 'value' => '10'],
                                            ['type' => 'select', 'name' => 'unit', 'width' => 'w-16', 'options' => ['%'], 'selected' => '%'],
                                            ['type' => 'label', 'text' => 'when compared with'],
                                            ['type' => 'select', 'name' => 'period', 'width' => 'w-48', 'options' => ['Year to Date', 'Previous Month', 'Previous Quarter'], 'selected' => 'Year to Date'],
                                        ]"
                                    />

                                    <x-rule-item 
                                        ruleType="period-comparison"
                                        :fields="[
                                            ['type' => 'label', 'text' => 'Flag'],
                                            ['type' => 'select', 'name' => 'account', 'width' => 'w-48', 'options' => ['Software Subscriptions', 'Payroll', 'Utilities', 'Other Expenses'], 'selected' => 'Software Subscriptions'],
                                            ['type' => 'label', 'text' => 'if'],
                                            ['type' => 'select', 'name' => 'operator', 'width' => 'w-44', 'options' => ['more or less than', 'more than', 'less than'], 'selected' => 'more or less than'],
                                            ['type' => 'number', 'name' => 'value', 'width' => 'w-24', 'value' => '200'],
                                            ['type' => 'select', 'name' => 'unit', 'width' => 'w-16', 'options' => ['$', '€', '£'], 'selected' => '$'],
                                            ['type' => 'label', 'text' => 'when compared with'],
                                            ['type' => 'select', 'name' => 'period', 'width' => 'w-48', 'options' => ['Previous Month', 'Year to Date', 'Previous Quarter'], 'selected' => 'Previous Month'],
                                        ]"
                                    />

                                </div>
                                <button class="rules-add inline-flex items-center gap-2 text-primary font-semibold" type="button" data-rule-type="period-comparison">
                                    <i class="iconify tabler--plus"></i>
                                    <span>Add Condition</span>
                                </button>
                            </div>
                        </div>

                        <!-- Accounts violating Threshold Limit - by Sum of -->
                        <div class="card border-default-200 shadow-none">
                            <div class="card-body space-y-3">
                                <h5 class="card-title text-base mb-0">Accounts violating Threshold Limit - by Sum of</h5>
                                <div class="space-y-3" data-rules-sortable="rules-sum" data-rule-category="sum-threshold">
                                    
                                    <x-rule-item 
                                        ruleType="sum-threshold"
                                        :fields="[
                                            ['type' => 'label', 'text' => 'Flag'],
                                            ['type' => 'select', 'name' => 'account', 'width' => 'w-48', 'options' => ['Merchant Fees', 'Supplies', 'Marketing'], 'selected' => 'Merchant Fees'],
                                            ['type' => 'label', 'text' => 'if'],
                                            ['type' => 'select', 'name' => 'operator', 'width' => 'w-44', 'options' => ['more than', 'less than', 'equal to'], 'selected' => 'more than'],
                                            ['type' => 'number', 'name' => 'value', 'width' => 'w-24', 'value' => '3'],
                                            ['type' => 'select', 'name' => 'unit', 'width' => 'w-16', 'options' => ['%'], 'selected' => '%'],
                                            ['type' => 'label', 'text' => 'of sum of'],
                                            ['type' => 'select', 'name' => 'sum_account', 'width' => 'w-48', 'options' => ['Total Sales', 'Gross Profit', 'Revenue'], 'selected' => 'Total Sales'],
                                        ]"
                                    />

                                </div>
                                <button class="rules-add inline-flex items-center gap-2 text-primary font-semibold" type="button" data-rule-type="sum-threshold">
                                    <i class="iconify tabler--plus"></i>
                                    <span>Add Condition</span>
                                </button>
                            </div>
                        </div>

                        <!-- Accounts violating Threshold Limit - by per month -->
                        <div class="card border-default-200 shadow-none">
                            <div class="card-body space-y-3">
                                <h5 class="card-title text-base mb-0">Accounts violating Threshold Limit - by per month</h5>
                                <div class="space-y-3" data-rules-sortable="rules-monthly" data-rule-category="monthly-threshold">
                                    
                                    <x-rule-item 
                                        ruleType="monthly-threshold"
                                        :fields="[
                                            ['type' => 'label', 'text' => 'Flag'],
                                            ['type' => 'select', 'name' => 'account', 'width' => 'w-48', 'options' => ['Electricity Expense', 'Rent', 'Insurance'], 'selected' => 'Electricity Expense'],
                                            ['type' => 'label', 'text' => 'if'],
                                            ['type' => 'select', 'name' => 'operator', 'width' => 'w-44', 'options' => ['is between', 'is greater than', 'is less than'], 'selected' => 'is between'],
                                            ['type' => 'number', 'name' => 'value_from', 'width' => 'w-24', 'value' => '4000'],
                                            ['type' => 'select', 'name' => 'unit_from', 'width' => 'w-16', 'options' => ['$', '€', '£'], 'selected' => '$'],
                                            ['type' => 'label', 'text' => 'to'],
                                            ['type' => 'number', 'name' => 'value_to', 'width' => 'w-24', 'value' => '500'],
                                            ['type' => 'select', 'name' => 'unit_to', 'width' => 'w-16', 'options' => ['$', '€', '£'], 'selected' => '$'],
                                            ['type' => 'label', 'text' => 'Per Month'],
                                        ]"
                                    />

                                </div>
                                <button class="rules-add inline-flex items-center gap-2 text-primary font-semibold" type="button" data-rule-type="monthly-threshold">
                                    <i class="iconify tabler--plus"></i>
                                    <span>Add Condition</span>
                                </button>
                            </div>
                        </div>

                        <!-- Accounts with Negative Balance -->
                        <div class="card border-default-200 shadow-none">
                            <div class="card-body space-y-3">
                                <h5 class="card-title text-base mb-0">Accounts with Negative Balance</h5>
                                <div class="space-y-3" data-rules-sortable="rules-negative" data-rule-category="negative-balance">
                                    
                                    <x-rule-item 
                                        ruleType="negative-balance"
                                        :fields="[
                                            ['type' => 'label', 'text' => 'Highlight any'],
                                            ['type' => 'select', 'name' => 'account', 'width' => 'w-48', 'options' => ['Income', 'Expense', 'Asset'], 'selected' => 'Income'],
                                            ['type' => 'label', 'text' => 'with negative balance'],
                                        ]"
                                    />

                                </div>
                                <button class="rules-add inline-flex items-center gap-2 text-primary font-semibold" type="button" data-rule-type="negative-balance">
                                    <i class="iconify tabler--plus"></i>
                                    <span>Add Condition</span>
                                </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@include('shared.partials.customizer')
@endsection
@section('scripts') @vite(['resources/js/pages/rules.js']) @endsection
