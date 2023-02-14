<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')

    </head>

  <body style="padding-top: 72px;">
       <header class="header">
        @if (Auth::check())
            @include('partials.login-navbar')
        @else
            @include('partials.header')
        @endif
       </header>
       @include('partials.modals.email_varification')

        @yield('section')

        <!-- Footer-->
        @include('partials.footer')
        <!-- JavaScript files-->
        @include('partials.new-scripts')
  </body>
</html>
