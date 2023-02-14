<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')
        @include('partials.main_head')
        {{-- @include('partials.jquery') --}}


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
        @include('partials.modals.email_varification2')
        @include('partials.modals.email-view')
        @include('partials.modals.error')
        @include('partials.modals.forget-password')
        @include('partials.modals.welcome_user')


        @include('partials.main_content')


        <!-- Footer-->
        @include('partials.footer')
        <!-- JavaScript files-->
        @include('partials.new-scripts')




  </body>
</html>


