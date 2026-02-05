@extends('shared.base', ['title' => 'Create Rule'])
@section('styles') @endsection
@section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Dashboards', 'title' => 'Create Rule'])
    @include('shared.partials.sidenav')

    <div class="page-content">
        <main>
            <div class="page-title-head">
                <h4 class="page-main-title">Create Rule</h4>
                <div class="hidden items-center gap-1.25 text-sm md:flex">
                    <a class="text-sm" href="#">Paces</a>
                    <i class="iconify tabler--chevron-right text-sm rtl:rotate-180"></i>
                    <a class="text-sm" href="#">Dashboard</a>
                    <i class="iconify tabler--chevron-right text-sm rtl:rotate-180"></i>
                    <a class="text-sm" href="{{ route('dashboard.rules') }}">Rule</a>
                    <i class="iconify tabler--chevron-right text-sm rtl:rotate-180"></i>
                    <a aria-current="page" class="text-default-400 text-sm" href="{{ route('dashboard.rules.create') }}">Create Rule</a>
                </div>
            </div>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body space-y-8">
                        <div class="flex items-center">
                            <a class="inline-flex items-center gap-2 text-sm font-medium text-default-700 hover:text-primary" href="{{ route('dashboard.rules') }}">
                                <i class="iconify tabler--arrow-left"></i>
                                <span>Back</span>
                            </a>
                        </div>

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
                </div>
            </div>
        </main>
    </div>
</div>
@include('shared.partials.customizer')
@endsection
@section('scripts') @vite(['resources/js/pages/rules.js']) @endsection
