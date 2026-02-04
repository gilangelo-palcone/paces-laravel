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
                                <button class="btn h-10 px-4 bg-primary text-white hover:bg-primary-hover" data-hs-overlay="#createRuleModal" type="button">
                                    <i class="iconify tabler--plus text-lg"></i>
                                    <span class="ms-2">Create Rule</span>
                                </button>
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

                        <!-- Create Rule Modal -->
                        <x-modal id="createRuleModal" title="Create Rule" size="lg" :scrollable="true">
                            <div class="space-y-8">
                                <!-- Rule name -->
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-default-700" for="rule-name">Rule name</label>
                                    <input class="form-input" id="rule-name" name="rule_name" placeholder="Other - travel expense" type="text" />
                                </div>

                                <!-- Create condition -->
                                <div class="space-y-3 pt-2">
                                    <h4 class="text-base font-semibold text-default-800">Create condition</h4>
                                    <p class="text-sm text-default-700">Filter transactions that match <strong class="mx-1">all</strong> of the following :</p>

                                    <div class="card border-default-300 shadow-sm bg-white rounded-xl">
                                        <div class="card-body">
                                            <div class="flex items-center justify-between mb-4">
                                                <div class="flex items-center gap-2 text-sm font-medium text-default-800">
                                                    <i class="iconify tabler--sparkles text-default-500"></i>
                                                    <span>Conditions <span class="text-default-500">(2/10)</span></span>
                                                </div>
                                                <a class="text-sm text-default-500 hover:text-primary" href="#">Clear all</a>
                                            </div>

                                            <div class="space-y-3">
                                                <div class="grid grid-cols-12 items-center gap-3">
                                                    <select class="form-select h-11 rounded-lg col-span-3">
                                                        <option>Direction</option>
                                                        <option>Contract address</option>
                                                    </select>
                                                    <select class="form-select h-11 rounded-lg col-span-3">
                                                        <option>equal</option>
                                                        <option>not equal</option>
                                                    </select>
                                                    <select class="form-select h-11 rounded-lg col-span-5">
                                                        <option>Incoming</option>
                                                        <option>Outgoing</option>
                                                    </select>
                                                    <button class="btn btn-icon text-default-400 col-span-1" type="button"><i class="iconify tabler--x"></i></button>
                                                </div>

                                                <div class="grid grid-cols-12 items-center gap-3">
                                                    <select class="form-select h-11 rounded-lg col-span-3">
                                                        <option>Contract address</option>
                                                        <option>Direction</option>
                                                    </select>
                                                    <select class="form-select h-11 rounded-lg col-span-3">
                                                        <option>equal</option>
                                                        <option>contains</option>
                                                    </select>
                                                    <input class="form-input h-11 rounded-lg col-span-5" value="aave" />
                                                    <button class="btn btn-icon text-default-400 col-span-1" type="button"><i class="iconify tabler--x"></i></button>
                                                </div>
                                            </div>

                                            <button class="mt-4 text-primary font-semibold inline-flex items-center gap-2" type="button"> 
                                                <i class="iconify tabler--plus"></i>
                                                <span>Add condition</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Setup action -->
                                <div class="space-y-3 pt-2">
                                    <h4 class="text-base font-semibold text-default-800">Setup action</h4>
                                    <p class="text-sm text-default-700">Assign fields to perform the following :</p>

                                    <div class="card border-default-300 shadow-sm bg-white rounded-xl">
                                        <div class="card-body">
                                            <div class="flex items-center justify-between mb-4">
                                                <div class="flex items-center gap-2 text-sm font-medium text-default-800">
                                                    <i class="iconify tabler--sparkles text-default-500"></i>
                                                    <span>Actions <span class="text-default-500">(3/10)</span></span>
                                                </div>
                                                <a class="text-sm text-default-500 hover:text-primary" href="#">Clear all</a>
                                            </div>

                                            <div class="grid grid-cols-12 items-center gap-3 text-sm font-medium text-default-700 mb-2">
                                                <div class="col-span-5">Change</div>
                                                <div class="col-span-1 text-center text-default-400">&rarr;</div>
                                                <div class="col-span-5">To</div>
                                                <div class="col-span-1"></div>
                                            </div>

                                            <div class="space-y-3">
                                                <div class="grid grid-cols-12 items-center gap-3">
                                                    <select class="form-select h-11 rounded-lg col-span-5">
                                                        <option>Category</option>
                                                    </select>
                                                    <div class="col-span-1 text-center text-default-400">&rarr;</div>
                                                    <select class="form-select h-11 rounded-lg col-span-5">
                                                        <option>Team spending</option>
                                                    </select>
                                                    <button class="btn btn-icon text-default-400 col-span-1" type="button"><i class="iconify tabler--x"></i></button>
                                                </div>

                                                <div class="grid grid-cols-12 items-center gap-3">
                                                    <select class="form-select h-11 rounded-lg col-span-5">
                                                        <option>Status</option>
                                                    </select>
                                                    <div class="col-span-1 text-center text-default-400">&rarr;</div>
                                                    <select class="form-select h-11 rounded-lg col-span-5">
                                                        <option>Ready to sync</option>
                                                    </select>
                                                    <button class="btn btn-icon text-default-400 col-span-1" type="button"><i class="iconify tabler--x"></i></button>
                                                </div>

                                                <div class="grid grid-cols-12 items-center gap-3">
                                                    <select class="form-select h-11 rounded-lg col-span-5">
                                                        <option>Notes</option>
                                                    </select>
                                                    <div class="col-span-1 text-center text-default-400">&rarr;</div>
                                                    <select class="form-select h-11 rounded-lg col-span-5">
                                                        <option>Travel expenses</option>
                                                    </select>
                                                    <button class="btn btn-icon text-default-400 col-span-1" type="button"><i class="iconify tabler--x"></i></button>
                                                </div>
                                            </div>

                                            <button class="mt-4 text-primary font-semibold inline-flex items-center gap-2" type="button"> 
                                                <i class="iconify tabler--plus"></i>
                                                <span>Add action</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Transaction settings -->
                                <div class="space-y-3 pt-2">
                                    <h4 class="text-base font-semibold text-default-800">Transaction settings</h4>
                                    <p class="text-sm text-default-700">Apply transaction type and set run priority</p>

                                    <div class="card border-default-300 shadow-sm bg-white rounded-xl">
                                        <div class="card-body space-y-4">
                                            <div class="flex items-center gap-2 text-sm font-medium text-default-800">
                                                <i class="iconify tabler--settings text-default-500"></i>
                                                <span>Run on</span>
                                            </div>

                                            <div class="space-y-3">
                                                <label class="inline-flex items-center gap-2 text-sm text-default-800">
                                                    <input type="checkbox" checked class="form-checkbox" />
                                                    <span>Existing transactions</span>
                                                </label>
                                                <label class="inline-flex items-center gap-2 text-sm text-default-800">
                                                    <input type="checkbox" checked class="form-checkbox" />
                                                    <span>Upcoming transactions</span>
                                                </label>
                                            </div>

                                            <div class="bg-default-50 rounded-lg px-4 py-3 flex items-center justify-between gap-4">
                                                <div class="flex items-center gap-2 text-sm text-default-800">
                                                    <i class="iconify tabler--list-details text-default-500"></i>
                                                    <span>Set run priority</span>
                                                    <select class="form-select h-10 w-20 rounded-lg ms-2">
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                    </select>
                                                </div>
                                                <div class="text-sm text-default-600">Higher priority rule will be executed first</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Summary + Test result (static) -->
                                <div class="space-y-3">
                                    <h5 class="text-sm font-semibold text-default-900">Rule summary</h5>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="card border-default-300 shadow-sm bg-white">
                                            <div class="card-body">
                                                <h6 class="text-sm font-semibold text-default-800 mb-3">When</h6>
                                                <ul class="list-disc ps-4 text-sm text-default-800 leading-6 space-y-2">
                                                    <li>direction equal to incoming</li>
                                                    <li>contract address equal to <span class="italic text-default-700">"aave"</span></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="card border-default-300 shadow-sm bg-white">
                                            <div class="card-body">
                                                <h6 class="text-sm font-semibold text-default-800 mb-3">Change</h6>
                                                <ul class="list-disc ps-4 text-sm text-default-800 leading-6 space-y-2">
                                                    <li>Category to <a class="underline text-primary hover:text-primary-hover" href="#">Team spending</a></li>
                                                    <li>Status to <a class="underline text-primary hover:text-primary-hover" href="#">Ready to sync</a></li>
                                                    <li>Notes to <a class="underline text-primary hover:text-primary-hover" href="#">Travel expenses</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border-default-300 shadow-sm bg-white rounded-xl">
                                        <div class="card-body space-y-4">
                                            <div class="flex flex-col items-center gap-2">
                                                <div class="text-sm font-semibold text-default-900">Test result</div>
                                                <div class="inline-flex items-center bg-default-100 rounded-full p-1">
                                                    <button class="px-3 py-1 text-sm rounded-full bg-white shadow-xs">Before</button>
                                                    <button class="px-3 py-1 text-sm text-default-600 rounded-full">After</button>
                                                </div>
                                                <div class="text-xs text-default-600">Showing a sample of 5 transactions</div>
                                            </div>

                                            <div class="overflow-auto">
                                                <table class="table-auto w-full text-sm text-default-800">
                                                    <thead>
                                                        <tr class="text-default-700">
                                                            <th class="text-left py-2">Transaction hash</th>
                                                            <th class="text-left py-2">Date (GMT+0530)</th>
                                                            <th class="text-left py-2">From</th>
                                                            <th class="text-left py-2">To</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-t">
                                                            <td class="py-2 flex items-center gap-2"><i class="iconify tabler--circle-filled text-danger text-xs"></i><span>0x06b9...49f8</span></td>
                                                            <td class="py-2">Aug-03-2023 04:02:53</td>
                                                            <td class="py-2">EOA 1 - Polygon</td>
                                                            <td class="py-2">Uniswap V3</td>
                                                        </tr>
                                                        <tr class="border-t">
                                                            <td class="py-2 flex items-center gap-2"><i class="iconify tabler--circle-check-filled text-success text-xs"></i><span>0x06b9...78bw</span></td>
                                                            <td class="py-2">Aug-03-2023 04:02:53</td>
                                                            <td class="py-2">Uniswap V3</td>
                                                            <td class="py-2">EOA 1 - Polygon</td>
                                                        </tr>
                                                        <tr class="border-t">
                                                            <td class="py-2 flex items-center gap-2"><i class="iconify tabler--circle-filled text-danger text-xs"></i><span>0x6451...2053</span></td>
                                                            <td class="py-2">Aug-03-2023 04:02:53</td>
                                                            <td class="py-2">Safe A - Polygon</td>
                                                            <td class="py-2">Safe B - Polygon</td>
                                                        </tr>
                                                        <tr class="border-t">
                                                            <td class="py-2 flex items-center gap-2"><i class="iconify tabler--circle-filled text-danger text-xs"></i><span>0x06b9...78bw</span></td>
                                                            <td class="py-2">Aug-03-2023 04:02:53</td>
                                                            <td class="py-2">EOA 1 - Polygon</td>
                                                            <td class="py-2">Gas fees</td>
                                                        </tr>
                                                        <tr class="border-t">
                                                            <td class="py-2 flex items-center gap-2"><i class="iconify tabler--circle-filled text-danger text-xs"></i><span>0x6451...2053</span></td>
                                                            <td class="py-2">Aug-03-2023 04:02:53</td>
                                                            <td class="py-2">Safe A - Polygon</td>
                                                            <td class="py-2">Gas fees</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <x-slot name="footer">
                                <button class="btn bg-light hover:text-primary" data-hs-overlay="#createRuleModal" type="button">Cancel</button>
                                <button class="btn bg-primary text-white hover:bg-primary-hover" type="button">Create</button>
                            </x-slot>
                        </x-modal>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@include('shared.partials.customizer')
@endsection
@section('scripts') @vite(['resources/js/pages/rules.js']) @endsection
