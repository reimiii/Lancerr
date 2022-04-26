<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('includes.landing.meta')

  <title>@yield('title') | LANCERR</title>

  @stack('before-styles')

  @include('includes.landing.style')

  @stack('after-styles')
</head>

<body class="antialiased">
  <div class="relative">
    @include('includes.landing.header')
    {{-- @include('sweetalert::alert') --}}

    @yield('content')

    @include('includes.landing.footer')

    @stack('before-script')

    @include('includes.landing.script')

    @stack('after-script')

    {{-- modall --}}
    @include('components.modal.login')
    @include('components.modal.register-success')
    @include('components.modal.register')

  </div>
</body>

</html>
