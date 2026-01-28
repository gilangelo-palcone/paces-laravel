<!DOCTYPE html>
<html @yield('html_attribute') 
      lang="en"
      data-skin="{{ config('paces.theme.skin') }}"
      data-bs-theme="{{ config('paces.theme.mode') }}"
      data-layout-position="{{ config('paces.layout.position') }}"
      data-topbar-color="{{ config('paces.topbar.color') }}"
      data-sidenav-color="{{ config('paces.sidenav.color') }}"
      data-sidenav-size="{{ config('paces.sidenav.size') }}"
      @if(config('paces.sidenav.user_info')) data-sidenav-user="true" @endif>
    <head>
        <meta charset="utf-8"/>
        <title>
            {{ $title }}
        </title>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        @yield('styles')
        @include('shared.partials/head-css')
    </head>
    <body @yield('body_attribute')>
        @yield('content')
        @yield('scripts')
    </body>
</html>
