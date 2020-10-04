<!DOCTYPE html>
<html lang="en">
@include('frontend.templates.partials.head')
<body>
    @include('frontend.templates.partials.navbar')
    <div class="container">
      @yield('content')
    </div>
@include('frontend.templates.partials.script')
@include('frontend.templates.partials.toast')
</body>
</html>