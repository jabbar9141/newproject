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


       <section class="mt-4 container">

            <p style="color: red">
             AL PICAR A LA PARTE DE AYUDA, LINKA A LA SECCÓN DE PREGUNTAS FRECUENTES
            </p>

      </section>

        <!-- Footer-->
        {{-- @include('partials.footer') --}}
        <!-- JavaScript files-->
        @include('partials.new-scripts')
  </body>
</html>
