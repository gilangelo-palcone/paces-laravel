<div>
    <div class="hs-overlay hs-overlay-open:translate-x-0 bg-card hs-overlay-open:flex fixed inset-y-0 end-0 bottom-0 z-80 hidden w-full max-w-[400px] translate-x-full transform flex-col overflow-hidden transition-all duration-300 rtl:-translate-x-full" id="theme-customization">
        <div class="bg-primary text-default-600 border-default-900/10 flex items-start gap-3 border-b border-dashed bg-[url(/images/user-bg-pattern.png)] p-6">
            <div>
                <h5 class="mb-1.5 text-sm font-bold text-white uppercase">Admin Customizer</h5>
                <p class="font-medium text-white/75 italic">Easily configure layout, styles, and preferences for your admin interface.</p>
            </div>
            <div class="grow">
                <button class="btn btn-sm bg-default-100/20 size-7.5 rounded-full text-white" data-hs-overlay="#theme-customization" type="button">
                    <i class="iconify tabler--x text-base"></i>
                </button>
            </div>
        </div>
        <div class="h-full grow overflow-y-auto" data-simplebar="">
            <div class="divide-default-300 divide-y divide-dashed">
                <div class="p-6" id="skin">
                    <h5 class="text-md mb-base font-bold">Select Theme</h5>
                    <div class="grid grid-cols-2 gap-base">
                        <div class="card-radio" id="skin-default">
                            <input class="hidden" id="demo-skin-default" name="data-skin" type="radio" value="default" />
                            <label class="form-label" for="demo-skin-default">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-default.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Default</h5>
                        </div>
                        <div class="card-radio" id="skin-minimal">
                            <input class="hidden" id="demo-skin-minimal" name="data-skin" type="radio" value="minimal" />
                            <label class="form-label" for="demo-skin-minimal">
                                <img alt="layout img" class="flex size-full rounded-md" src="/images/layouts/skin-minimal.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Minimal</h5>
                        </div>
                        <div class="card-radio" id="skin-modern">
                            <input class="hidden" id="demo-skin-modern" name="data-skin" type="radio" value="modern" />
                            <label class="form-label" for="demo-skin-modern">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-modern.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Modern</h5>
                        </div>
                        <div class="card-radio" id="skin-material">
                            <input class="hidden" id="demo-skin-material" name="data-skin" type="radio" value="material" />
                            <label class="form-label" for="demo-skin-material">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-material.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Material</h5>
                        </div>
                        <div class="card-radio" id="skin-saas">
                            <input class="hidden" id="demo-skin-saas" name="data-skin" type="radio" value="saas" />
                            <label class="form-label" for="demo-skin-saas">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-saas.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">SaaS</h5>
                        </div>
                        <div class="card-radio" id="skin-flat">
                            <input class="hidden" id="demo-skin-flat" name="data-skin" type="radio" value="flat" />
                            <label class="form-label" for="demo-skin-flat">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-flat.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Flat</h5>
                        </div>
                        <div class="card-radio" id="skin-galaxy">
                            <input class="hidden" id="demo-skin-galaxy" name="data-skin" type="radio" value="galaxy" />
                            <label class="form-label" for="demo-skin-galaxy">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-galaxy.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Galaxy</h5>
                        </div>
                        <div class="card-radio" id="skin-luxe">
                            <input class="hidden" id="demo-skin-luxe" name="data-skin" type="radio" value="luxe" />
                            <label class="form-label" for="demo-skin-luxe">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-luxe.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Luxe</h5>
                        </div>
                        <div class="card-radio" id="skin-retro">
                            <input class="hidden" id="demo-skin-retro" name="data-skin" type="radio" value="retro" />
                            <label class="form-label" for="demo-skin-retro">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-retro.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Retro</h5>
                        </div>
                        <div class="card-radio" id="skin-neon">
                            <input class="hidden" id="demo-skin-neon" name="data-skin" type="radio" value="neon" />
                            <label class="form-label" for="demo-skin-neon">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-neon.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Neon</h5>
                        </div>
                        <div class="card-radio" id="skin-pixel">
                            <input class="hidden" id="demo-skin-pixel" name="data-skin" type="radio" value="pixel" />
                            <label class="form-label" for="demo-skin-pixel">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-pixel.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Pixel</h5>
                        </div>
                        <div class="card-radio" id="skin-soft">
                            <input class="hidden" id="demo-skin-soft" name="data-skin" type="radio" value="soft" />
                            <label class="form-label" for="demo-skin-soft">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-soft.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Soft</h5>
                        </div>
                        <div class="card-radio" id="skin-mono">
                            <input class="hidden" id="demo-skin-mono" name="data-skin" type="radio" value="mono" />
                            <label class="form-label" for="demo-skin-mono">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-mono.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Mono</h5>
                        </div>
                        <div class="card-radio" id="skin-prism">
                            <input class="hidden" id="demo-skin-prism" name="data-skin" type="radio" value="prism" />
                            <label class="form-label" for="demo-skin-prism">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-prism.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Prism</h5>
                        </div>
                        <div class="card-radio" id="skin-nova">
                            <input class="hidden" id="demo-skin-nova" name="data-skin" type="radio" value="nova" />
                            <label class="form-label" for="demo-skin-nova">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-nova.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Nova</h5>
                        </div>
                        <div class="card-radio" id="skin-zen">
                            <input class="hidden" id="demo-skin-zen" name="data-skin" type="radio" value="zen" />
                            <label class="form-label" for="demo-skin-zen">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-zen.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Zen</h5>
                        </div>
                        <div class="card-radio" id="skin-elegant">
                            <input class="hidden" id="demo-skin-elegant" name="data-skin" type="radio" value="elegant" />
                            <label class="form-label" for="demo-skin-elegant">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-elegant.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Elegant</h5>
                        </div>
                        <div class="card-radio" id="skin-vivid">
                            <input class="hidden" id="demo-skin-vivid" name="data-skin" type="radio" value="vivid" />
                            <label class="form-label" for="demo-skin-vivid">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-vivid.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Vivid</h5>
                        </div>
                        <div class="card-radio" id="skin-aurora">
                            <input class="hidden" id="demo-skin-aurora" name="data-skin" type="radio" value="aurora" />
                            <label class="form-label" for="demo-skin-aurora">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-aurora.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Aurora</h5>
                        </div>
                        <div class="card-radio" id="skin-crystal">
                            <input class="hidden" id="demo-skin-crystal" name="data-skin" type="radio" value="crystal" />
                            <label class="form-label" for="demo-skin-crystal">
                                <img alt="layout-img" class="flex size-full rounded-md" src="/images/layouts/skin-crystal.png" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Crystal</h5>
                        </div>
                        <div class="card-radio" id="skin-aurora">
                            <input class="hidden" type="radio" name="data-skin" id="demo-skin-aurora" value="aurora" />
                            <label class="form-label" for="demo-skin-aurora">
                                <img src="/images/layouts/skin-aurora.png" alt="layout-img" class="flex size-full rounded-md" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Aurora</h5>
                        </div>

                        <div class="card-radio" id="skin-crystal">
                            <input class="hidden" type="radio" name="data-skin" id="demo-skin-crystal" value="crystal" />
                            <label class="form-label" for="demo-skin-crystal">
                                <img src="/images/layouts/skin-crystal.png" alt="layout-img" class="flex size-full rounded-md" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Crystal</h5>
                        </div>

                        <div class="card-radio" id="skin-matrix">
                            <input class="hidden" type="radio" name="data-skin" id="demo-skin-matrix" value="matrix" />
                            <label class="form-label" for="demo-skin-matrix">
                                <img src="/images/layouts/skin-matrix.png" alt="layout-img" class="flex size-full rounded-md" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Matrix</h5>
                        </div>

                        <div class="card-radio" id="skin-orbit">
                            <input class="hidden" type="radio" name="data-skin" id="demo-skin-orbit" value="orbit" />
                            <label class="form-label" for="demo-skin-orbit">
                                <img src="/images/layouts/skin-orbit.png" alt="layout-img" class="flex size-full rounded-md" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Orbit</h5>
                        </div>

                        <div class="card-radio" id="skin-neo">
                            <input class="hidden" type="radio" name="data-skin" id="demo-skin-neo" value="neo" />
                            <label class="form-label" for="demo-skin-neo">
                                <img src="/images/layouts/skin-neo.png" alt="layout-img" class="flex size-full rounded-md" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Neo</h5>
                        </div>

                        <div class="card-radio" id="skin-silver">
                            <input class="hidden" type="radio" name="data-skin" id="demo-skin-silver" value="silver" />
                            <label class="form-label" for="demo-skin-silver">
                                <img src="/images/layouts/skin-silver.png" alt="layout-img" class="flex size-full rounded-md" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Silver</h5>
                        </div>

                        <div class="card-radio" id="skin-xenon">
                            <input class="hidden" type="radio" name="data-skin" id="demo-skin-xenon" value="xenon" />
                            <label class="form-label" for="demo-skin-xenon">
                                <img src="/images/layouts/skin-xenon.png" alt="layout-img" class="flex size-full rounded-md" />
                            </label>
                            <h5 class="text-md text-default-600 mt-2.5 text-center font-semibold">Xenon</h5>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <h5 class="text-md mb-base font-bold">Theme Direction</h5>
                    <div class="grid grid-cols-3 gap-base">
                        <div class="card-radio">
                            <input class="hidden" id="direction-ltr" name="dir" type="radio" value="ltr" />
                            <label class="form-label" for="direction-ltr">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/theme-light.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">LTR Mode</div>
                        </div>
                        <div class="card-radio">
                            <input class="hidden" id="direction-rtl" name="dir" type="radio" value="rtl" />
                            <label class="form-label" for="direction-rtl">
                                <img alt="layout img" class="border-default-300 flex size-full scale-x-[-1] rounded-md border" src="/images/layouts/theme-light.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">RTL Mode</div>
                        </div>
                    </div>
                </div>
                <div class="p-5" id="sidenav-size">
                    <h5 class="text-md mb-base font-bold">Sidenav View</h5>
                    <div class="grid grid-cols-3 gap-base">
                        <div class="card-radio" id="sidenav-size-default">
                            <input class="hidden" id="sidenav-view-default" name="data-sidenav-size" type="radio" value="default" />
                            <label class="form-label" for="sidenav-view-default">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/sidenav-size-default.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Default</div>
                        </div>
                        <div class="card-radio" id="sidenav-size-compact">
                            <input class="hidden" id="sidenav-view-md" name="data-sidenav-size" type="radio" value="md" />
                            <label class="form-label" for="sidenav-view-md">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/sidenav-size-compact.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Compact</div>
                        </div>
                        <div class="card-radio" id="sidenav-size-condensed">
                            <input class="hidden" id="sidenav-view-sm" name="data-sidenav-size" type="radio" value="sm" />
                            <label class="form-label" for="sidenav-view-sm">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/sidenav-size-condensed.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Condensed</div>
                        </div>
                        <div class="card-radio" id="sidenav-size-on-hover">
                            <input class="hidden" id="sidenav-view-hover" name="data-sidenav-size" type="radio" value="on-hover" />
                            <label class="form-label" for="sidenav-view-hover">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/sidenav-size-condensed.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">On Hover</div>
                        </div>
                        <div class="card-radio" id="sidenav-size-on-hover-active">
                            <input class="hidden" id="sidenav-view-hover-active" name="data-sidenav-size" type="radio" value="on-hover-active" />
                            <label class="form-label" for="sidenav-view-hover-active">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/sidenav-size-default.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">On Hover- Show</div>
                        </div>
                        <div class="card-radio" id="sidenav-size-offcanvas">
                            <input class="hidden" id="sidenav-view-mobile" name="data-sidenav-size" type="radio" value="offcanvas" />
                            <label class="form-label" for="sidenav-view-mobile">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/sidenav-size-offcanvas.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Offcanvas</div>
                        </div>
                        <div class="card-radio">
                            <input class="hidden" id="sidenav-view-hidden" name="data-sidenav-size" type="radio" value="hidden" />
                            <label class="form-label" for="sidenav-view-hidden">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/sidenav-size-offcanvas.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Hidden</div>
                        </div>
                    </div>
                </div>
                <div class="p-5" id="theme">
                    <h5 class="text-md mb-base font-bold">Theme Mode</h5>
                    <div class="grid grid-cols-3 gap-base">
                        <div class="card-radio" id="theme-light">
                            <input class="hidden" id="layout-color-light" name="data-theme" type="radio" value="light" />
                            <label class="form-label" for="layout-color-light">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/theme-light.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Light</div>
                        </div>
                        <div class="card-radio" id="theme-dark">
                            <input class="hidden" id="layout-color-dark" name="data-theme" type="radio" value="dark" />
                            <label class="form-label" for="layout-color-dark">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/theme-dark.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Dark</div>
                        </div>
                        <div class="card-radio" id="theme-system">
                            <input class="hidden" id="layout-color-system" name="data-theme" type="radio" value="system" />
                            <label class="form-label" for="layout-color-system">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/theme-system.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">System</div>
                        </div>
                    </div>
                </div>
                <div class="p-5" id="sidenav-color">
                    <h5 class="text-md mb-base font-bold">Sidenav Color</h5>
                    <div class="grid grid-cols-3 gap-base">
                        <div class="card-radio" id="sidenav-color-light">
                            <input class="hidden" id="menu-color-light" name="data-menu-color" type="radio" value="light" />
                            <label class="form-label" for="menu-color-light">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/sidenav-color-light.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Light</div>
                        </div>
                        <div class="card-radio" id="sidenav-color-dark">
                            <input class="hidden" id="menu-color-dark" name="data-menu-color" type="radio" value="dark" />
                            <label class="form-label" for="menu-color-dark">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/sidenav-color-dark.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Dark</div>
                        </div>
                        <div class="card-radio" id="sidenav-color-gradient">
                            <input class="hidden" id="menu-color-gradient" name="data-menu-color" type="radio" value="gradient" />
                            <label class="form-label" for="menu-color-gradient">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/sidenav-color-gradient.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Gradient</div>
                        </div>
                        <div class="card-radio" id="sidenav-color-gray">
                            <input class="hidden" id="menu-color-gray" name="data-menu-color" type="radio" value="gray" />
                            <label class="form-label" for="menu-color-gray">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/sidenav-color-gray.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Gray</div>
                        </div>
                        <div class="card-radio" id="sidenav-color-image">
                            <input class="hidden" id="menu-color-image" name="data-menu-color" type="radio" value="image" />
                            <label class="form-label" for="menu-color-image">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/sidenav-color-image.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Image</div>
                        </div>
                    </div>
                </div>
                <div class="p-5" id="topbar-color">
                    <h5 class="text-md mb-base font-bold">Topbar Color</h5>
                    <div class="grid grid-cols-3 gap-base">
                        <div class="card-radio" id="topbar-color-light">
                            <input class="hidden" id="layout-topbar-color-light" name="data-topbar-color" type="radio" value="light" />
                            <label class="form-label" for="layout-topbar-color-light">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/topbar-color-light.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Light</div>
                        </div>
                        <div class="card-radio" id="topbar-color-dark">
                            <input class="hidden" id="layout-topbar-color-dark" name="data-topbar-color" type="radio" value="dark" />
                            <label class="form-label" for="layout-topbar-color-dark">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/topbar-color-dark.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Dark</div>
                        </div>
                        <div class="card-radio" id="topbar-color-gradient">
                            <input class="hidden" id="layout-topbar-color-gradient" name="data-topbar-color" type="radio" value="gradient" />
                            <label class="form-label" for="layout-topbar-color-gradient">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/topbar-color-gradient.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Gradient</div>
                        </div>
                        <div class="card-radio" id="topbar-color-gray">
                            <input class="hidden" id="layout-topbar-color-gray" name="data-topbar-color" type="radio" value="gray" />
                            <label class="form-label" for="layout-topbar-color-gray">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/topbar-color-gray.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Gray</div>
                        </div>
                    </div>
                </div>
                <div class="p-5" id="width">
                    <h5 class="text-md mb-base font-bold">Layout Width</h5>
                    <div class="grid grid-cols-3 gap-base">
                        <div class="card-radio" id="width-fluid">
                            <input class="hidden" id="layout-width-fluid" name="data-layout-width" type="radio" value="fluid" />
                            <label class="form-label" for="layout-width-fluid">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/width-fluid.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Fluid</div>
                        </div>
                        <div class="card-radio" id="width-boxed">
                            <input class="hidden" id="layout-width-boxed" name="data-layout-width" type="radio" value="boxed" />
                            <label class="form-label" for="layout-width-boxed">
                                <img alt="layout img" class="border-default-300 flex size-full rounded-md border" src="/images/layouts/width-boxed.png" />
                            </label>
                            <div class="text-md text-default-600 mt-2.5 text-center font-semibold">Boxed</div>
                        </div>
                    </div>
                </div>
                <div class="p-6" id="position">
                    <div class="flex items-center justify-between">
                        <h5 class="font-bold">Layout Position</h5>
                        <div class="flex gap-1">
                            <div id="position-fixed">
                                <input class="peer hidden" id="layout-position-fixed" name="data-layout-position" type="radio" value="fixed" />
                                <label class="btn bg-warning/15 text-warning peer-checked:bg-warning peer-checked:text-white" for="layout-position-fixed">Fixed</label>
                            </div>
                            <div id="position-scrollable">
                                <input class="peer hidden" id="layout-position-scrollable" name="data-layout-position" type="radio" value="scrollable" />
                                <label class="btn bg-warning/15 text-warning peer-checked:bg-warning peer-checked:text-white" for="layout-position-scrollable">Scrollable</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6" id="sidenav-user">
                    <div class="flex items-center justify-between">
                        <label class="m-0 font-bold" for="sidebaruser-check">Sidebar User Info</label>
                        <input class="form-switch" id="sidebaruser-check" name="sidebar-user" type="checkbox" />
                    </div>
                </div>
            </div>
        </div>
        <div class="border-default-900/10 flex border-t p-6">
            <div class="grid w-full grid-cols-2 gap-4">
                <div></div>
                <button class="btn btn-lg w-full bg-danger text-white hover:bg-danger-hover" id="reset-layout" type="button">Reset</button>
            </div>
        </div>
    </div>
</div>
