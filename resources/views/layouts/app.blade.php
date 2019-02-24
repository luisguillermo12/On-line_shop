<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.htmlheader')
<body>
 @include('layouts.header')
 @include('layouts.siderbar')
    <div id="app">
        @yield('content')
    </div>

 @include('layouts.footer')

 @include('sweetalert::alert')
 @include('sweetalert::view')


   @yield('after-scripts-end')
@include('layouts.scripts')
@include('layouts.script.popover')
</body>
</html>