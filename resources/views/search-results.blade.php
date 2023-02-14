
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
           @include('partials.modals.email_varification2')
           @include('partials.modals.email-view')
           @include('partials.modals.forget-password')
           @include('partials.modals.error')
           @include('partials.modals.welcome_user')

           @include('partials.results')
           @include('partials.results_map')



        <!-- Footer-->
        {{-- @include('partials.footer') --}}
        <!-- JavaScript files-->
        @include('partials.new-scripts')
        <!-- Main Theme JS file    -->
        {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}

  </body>
</html>


