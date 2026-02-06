@extends('shared.base', ['title' => 'Tasks'])
@section('styles') @endsection
@section('content')
<div class="wrapper">
    @include('shared.partials.topbar', ['subtitle' => 'Apps', 'title' => 'Tasks'])
    @include('shared.partials.sidenav')
    <!-- Start Page Content here -->
    <div class="page-content">
        <main>
            @include('shared.partials.page-title', ['subtitle' => 'Tasks', 'title' => 'Running Automations'])
            <div class="mb-4 text-default-600 text-sm">Monitor, pause, and inspect automation rules that are currently executing based on real-time or scheduled signals.</div>
            <div class="container-fluid">
                <div class="card mb-base" data-table="" data-table-rows-per-page="8">
                    <div class="card-header">
                        <div class="flex gap-base w-full items-center justify-between">
                            <div class="flex gap-2.5">
                                <!-- Search -->
                                <div class="input-icon-group">
                                    <i class="iconify tabler--search input-icon"></i>
                                    <input class="form-input" data-table-search="" placeholder="Search task..." type="search" />
                                </div>
                                <!-- Delete Selected -->
                                <button class="btn bg-danger text-white hover:bg-danger-hover hidden" data-table-delete-selected="">Delete</button>
                            </div>
                            <div class="flex flex-wrap items-center gap-2.5">
                                <span class="font-semibold me-2.5">Filter By:</span>
                                <!-- Task Status Filter (matches table statuses) -->
                                <div class="input-icon-group">
                                    <i class="iconify tabler--list-check input-icon"></i>
                                    <select class="form-select" data-table-filter="status">
                                        <option value="All">Task Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Paused">Paused</option>
                                        <option value="Error">Error</option>
                                    </select>
                                </div>
                                <!-- Execution Filter (replaces Priority) -->
                                <div class="input-icon-group">
                                    <i class="iconify tabler--clock input-icon"></i>
                                    <select class="form-select" data-table-filter="execution">
                                        <option value="All">Execution</option>
                                        <option value="Real-time">Real-time</option>
                                        <option value="Scheduled">Scheduled</option>
                                        <option value="Batch">Batch</option>
                                    </select>
                                </div>
                                <!-- Records Per Page -->
                                <div>
                                    <select class="form-select" data-table-set-rows-per-page="">
                                        <option value="5">5</option>
                                        <option selected="" value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                    </select>
                                </div>
                                <!-- Reset Filters Button -->
                                <div>
                                    <button class="btn btn-icon bg-light hover:bg-default-100 p-2" data-table-reset="" type="button" aria-label="Reset filters" title="Reset filters">
                                        <i class="iconify tabler--refresh text-base"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="flex gap-1.5">
                                <a class="btn bg-primary text-white hover:bg-primary-hover" href="{{ url('/apps/task/create') }}">
                                    <i class="iconify tabler--plus text-base"></i>
                                    Create Automation
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="table-wrapper">
                        <table class="table table-hover table-custom table-centered table-select table-hover w-full">
                            <thead class="thead-sm">
                                <tr class="bg-light/25 text-2xs uppercase">
                                    <th class="w-[1%]">
                                        <input class="form-checkbox form-checkbox-light size-4.5" data-table-select-all="" type="checkbox" value="option" />
                                    </th>
                                    <th data-table-sort="" class="whitespace-nowrap">
                                        <span class="inline-flex items-center gap-1.5">AUTOMATION NAME <i class="iconify tabler--selector text-base opacity-50"></i></span>
                                    </th>
                                    <th data-table-sort="" class="whitespace-nowrap">
                                        <span class="inline-flex items-center gap-1.5">SIGNAL SOURCE <i class="iconify tabler--selector text-base opacity-50"></i></span>
                                    </th>
                                    <th data-table-sort="" class="whitespace-nowrap">
                                        <span class="inline-flex items-center gap-1.5">LAST TRIGGERED <i class="iconify tabler--selector text-base opacity-50"></i></span>
                                    </th>
                                    <th data-column="execution" data-table-sort="" class="whitespace-nowrap">
                                        <span class="inline-flex items-center gap-1.5">EXECUTION <i class="iconify tabler--selector text-base opacity-50"></i></span>
                                    </th>
                                    <th data-column="status" data-table-sort="" class="whitespace-nowrap">
                                        <span class="inline-flex items-center gap-1.5">STATUS <i class="iconify tabler--selector text-base opacity-50"></i></span>
                                    </th>
                                    <th data-column="impact" data-table-sort="" class="whitespace-nowrap">
                                        <span class="inline-flex items-center gap-1.5">IMPACT <i class="iconify tabler--selector text-base opacity-50"></i></span>
                                    </th>
                                    <th data-table-sort="" class="whitespace-nowrap">
                                        <span class="inline-flex items-center gap-1.5">LOGS <i class="iconify tabler--selector text-base opacity-50"></i></span>
                                    </th>
                                    <th class="text-center w-[1%]">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody class="divide-default-300 divide-y">
                                <!-- Sample automation rows (20 total) -->
                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-1" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Bid Adjustment - North America</a></h5><p class="text-default-400 text-xs">Created: Jan 22, 2026 <small class="text-default-400 text-2xs">09:05 AM</small></p></td>
                                    <td>Google Ads</td>
                                    <td>Feb 06, 2026 09:12 AM</td>
                                    <td>Real-time</td>
                                    <td><span class="badge border-success text-success border">Active</span></td>
                                    <td><span class="text-sm text-default-800">Revenue +5%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>12</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--report"></i></a><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--pause"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-2" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Pause Low-Performers</a></h5><p class="text-default-400 text-xs">Created: Nov 10, 2025 <small class="text-default-400 text-2xs">11:00 PM</small></p></td>
                                    <td>Facebook Ads</td>
                                    <td>Feb 05, 2026 11:43 PM</td>
                                    <td>Scheduled</td>
                                    <td><span class="badge border-warning text-warning border">Paused</span></td>
                                    <td><span class="text-sm text-default-800">Spend -12%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>4</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--play"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-3" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Creative Rotate (Test A/B)</a></h5><p class="text-default-400 text-xs">Created: Feb 01, 2026 <small class="text-default-400 text-2xs">08:00 AM</small></p></td>
                                    <td>Google Ads</td>
                                    <td>Feb 06, 2026 08:00 AM</td>
                                    <td>Real-time</td>
                                    <td><span class="badge border-danger text-danger border">Error</span></td>
                                    <td><span class="text-sm text-default-800">CTR +2%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>23</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--alert-circle"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-4" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Budget Rebalance</a></h5><p class="text-default-400 text-xs">Created: Dec 12, 2025 <small class="text-default-400 text-2xs">02:15 PM</small></p></td>
                                    <td>Data Warehouse</td>
                                    <td>Feb 04, 2026 02:15 PM</td>
                                    <td>Batch</td>
                                    <td><span class="badge border-success text-success border">Active</span></td>
                                    <td><span class="text-sm text-default-800">ROI +3%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>6</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--edit"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-5" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Blacklist IPs</a></h5><p class="text-default-400 text-xs">Created: Feb 06, 2026 <small class="text-default-400 text-2xs">07:50 AM</small></p></td>
                                    <td>Webhook</td>
                                    <td>Feb 06, 2026 07:50 AM</td>
                                    <td>Real-time</td>
                                    <td><span class="badge border-success text-success border">Active</span></td>
                                    <td><span class="text-sm text-default-800">Fraud - Low</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>1</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--trash"></i></a></div></td>
                                </tr>

                                <!-- additional rows to reach 20 -->
                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-6" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">CPA Optimization - EMEA</a></h5><p class="text-default-400 text-xs">Created: Jan 05, 2026 <small class="text-default-400 text-2xs">01:20 PM</small></p></td>
                                    <td>Google Ads</td>
                                    <td>Feb 05, 2026 10:00 AM</td>
                                    <td>Real-time</td>
                                    <td><span class="badge border-success text-success border">Active</span></td>
                                    <td><span class="text-sm text-default-800">CPA -8%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>7</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-7" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Increase Bids - Top Converters</a></h5><p class="text-default-400 text-xs">Created: Jan 28, 2026 <small class="text-default-400 text-2xs">04:30 PM</small></p></td>
                                    <td>TikTok Ads</td>
                                    <td>Feb 06, 2026 06:45 AM</td>
                                    <td>Real-time</td>
                                    <td><span class="badge border-success text-success border">Active</span></td>
                                    <td><span class="text-sm text-default-800">Conversions +9%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>3</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--pause"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-8" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Dynamic Keyword Bids</a></h5><p class="text-default-400 text-xs">Created: Feb 02, 2026 <small class="text-default-400 text-2xs">12:10 PM</small></p></td>
                                    <td>Google Ads</td>
                                    <td>Feb 06, 2026 12:11 PM</td>
                                    <td>Real-time</td>
                                    <td><span class="badge border-success text-success border">Active</span></td>
                                    <td><span class="text-sm text-default-800">Clicks +7%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>9</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-9" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Email Reengagement</a></h5><p class="text-default-400 text-xs">Created: Dec 01, 2025 <small class="text-default-400 text-2xs">09:00 AM</small></p></td>
                                    <td>Email Platform</td>
                                    <td>Feb 03, 2026 09:00 AM</td>
                                    <td>Scheduled</td>
                                    <td><span class="badge border-success text-success border">Active</span></td>
                                    <td><span class="text-sm text-default-800">Open Rate +4%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>2</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-10" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">LinkedIn Lead Boost</a></h5><p class="text-default-400 text-xs">Created: Jan 11, 2026 <small class="text-default-400 text-2xs">03:30 PM</small></p></td>
                                    <td>LinkedIn Ads</td>
                                    <td>Feb 05, 2026 03:30 PM</td>
                                    <td>Batch</td>
                                    <td><span class="badge border-warning text-warning border">Paused</span></td>
                                    <td><span class="text-sm text-default-800">Leads +2%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>5</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-11" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Remarketing Frequency Cap</a></h5><p class="text-default-400 text-xs">Created: Jan 20, 2026 <small class="text-default-400 text-2xs">05:45 PM</small></p></td>
                                    <td>Facebook Ads</td>
                                    <td>Feb 06, 2026 05:45 PM</td>
                                    <td>Real-time</td>
                                    <td><span class="badge border-success text-success border">Active</span></td>
                                    <td><span class="text-sm text-default-800">Engagement +6%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>8</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-12" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Exclude Low-Quality Placements</a></h5><p class="text-default-400 text-xs">Created: Feb 01, 2026 <small class="text-default-400 text-2xs">01:30 PM</small></p></td>
                                    <td>DSP</td>
                                    <td>Feb 02, 2026 01:30 PM</td>
                                    <td>Scheduled</td>
                                    <td><span class="badge border-success text-success border">Active</span></td>
                                    <td><span class="text-sm text-default-800">Viewability +10%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>0</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-13" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">SMS Convert Push</a></h5><p class="text-default-400 text-xs">Created: Jan 15, 2026 <small class="text-default-400 text-2xs">10:00 AM</small></p></td>
                                    <td>SMS Platform</td>
                                    <td>Feb 05, 2026 10:00 AM</td>
                                    <td>Scheduled</td>
                                    <td><span class="badge border-success text-success border">Active</span></td>
                                    <td><span class="text-sm text-default-800">Conversions +11%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>10</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-14" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Promo Cap Increase</a></h5><p class="text-default-400 text-xs">Created: Jan 02, 2026 <small class="text-default-400 text-2xs">08:20 AM</small></p></td>
                                    <td>Twitter Ads</td>
                                    <td>Feb 03, 2026 08:20 AM</td>
                                    <td>Batch</td>
                                    <td><span class="badge border-warning text-warning border">Paused</span></td>
                                    <td><span class="text-sm text-default-800">Impressions +15%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>0</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-15" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Auto-Allocate Budget to Winners</a></h5><p class="text-default-400 text-xs">Created: Dec 20, 2025 <small class="text-default-400 text-2xs">07:10 AM</small></p></td>
                                    <td>CRM</td>
                                    <td>Feb 06, 2026 07:10 AM</td>
                                    <td>Real-time</td>
                                    <td><span class="badge border-success text-success border">Active</span></td>
                                    <td><span class="text-sm text-default-800">ROI +6%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>14</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-16" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Fraud Detection Alert</a></h5><p class="text-default-400 text-xs">Created: Feb 06, 2026 <small class="text-default-400 text-2xs">01:00 AM</small></p></td>
                                    <td>Webhook</td>
                                    <td>Feb 06, 2026 01:00 AM</td>
                                    <td>Real-time</td>
                                    <td><span class="badge border-danger text-danger border">Error</span></td>
                                    <td><span class="text-sm text-default-800">Fraud - High</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>29</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--alert-circle"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-17" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Promo Budget Cap</a></h5><p class="text-default-400 text-xs">Created: Jan 18, 2026 <small class="text-default-400 text-2xs">09:40 AM</small></p></td>
                                    <td>Google Ads</td>
                                    <td>Feb 04, 2026 09:40 AM</td>
                                    <td>Batch</td>
                                    <td><span class="badge border-success text-success border">Active</span></td>
                                    <td><span class="text-sm text-default-800">Spend -5%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>2</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-18" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Scale Winners</a></h5><p class="text-default-400 text-xs">Created: Feb 03, 2026 <small class="text-default-400 text-2xs">06:00 PM</small></p></td>
                                    <td>Facebook Ads</td>
                                    <td>Feb 06, 2026 06:00 PM</td>
                                    <td>Real-time</td>
                                    <td><span class="badge border-success text-success border">Active</span></td>
                                    <td><span class="text-sm text-default-800">Conversions +18%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>11</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-19" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Pause Campaigns with High CPC</a></h5><p class="text-default-400 text-xs">Created: Jan 30, 2026 <small class="text-default-400 text-2xs">02:25 PM</small></p></td>
                                    <td>Google Ads</td>
                                    <td>Feb 06, 2026 02:25 PM</td>
                                    <td>Scheduled</td>
                                    <td><span class="badge border-warning text-warning border">Paused</span></td>
                                    <td><span class="text-sm text-default-800">CPC +22%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>3</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a></div></td>
                                </tr>

                                <tr>
                                    <td><input class="form-checkbox form-checkbox-light size-4.5" type="checkbox" value="auto-20" /></td>
                                    <td><h5><a class="hover:text-primary" href="{{ url('/apps/task/details') }}">Auto-Adjust Audience Sizes</a></h5><p class="text-default-400 text-xs">Created: Feb 04, 2026 <small class="text-default-400 text-2xs">11:11 AM</small></p></td>
                                    <td>DSP</td>
                                    <td>Feb 06, 2026 11:11 AM</td>
                                    <td>Real-time</td>
                                    <td><span class="badge border-success text-success border">Active</span></td>
                                    <td><span class="text-sm text-default-800">Reach +8%</span></td>
                                    <td><div class="flex items-center gap-1.25"><i class="iconify tabler--messages text-default-400 text-sm"></i>0</div></td>
                                    <td><div class="flex justify-center gap-1.25"><a class="btn btn-icon btn-sm border" href="#"><i class="iconify tabler--eye"></i></a></div></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="mt-3 border-t border-default-300 py-3 px-4 flex items-center justify-between overflow-hidden">
                            <div data-table-pagination-info="tasks"></div>
                            <div data-table-pagination=""></div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@include('shared.partials.customizer')
@endsection
@section('scripts')
@vite([
    'resources/js/pages/tasks.js',
    'resources/js/pages/custom-table.js'
])
@endsection
