<script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite -
    //   see more here
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
    function injectSvgSprite(path) {

        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function(e) {
        var div = document.createElement("div");
        div.className = 'd-none';
        div.innerHTML = ajax.responseText;
        document.body.insertBefore(div, document.body.childNodes[0]);
        }
    }
    // to avoid CORS issues when viewing using file:// protocol, using the demo URL for the SVG sprite
    // use your own URL in production, please :)
    // https://demo.bootstrapious.com/directory/1-0/icons/orion-svg-sprite.svg
    //- injectSvgSprite('${path}icons/orion-svg-sprite.svg');
    injectSvgSprite('https://demo.bootstrapious.com/directory/1-4/icons/orion-svg-sprite.svg');

  </script>
  <!-- jQuery-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Magnific Popup - Lightbox for the gallery-->
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Smooth scroll-->
  <script src="vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
  <!-- Bootstrap Select-->
  <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
  <script src="vendor/object-fit-images/ofi.min.js"></script>
  <!-- Swiper Carousel                       -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
  <script>var basePath = ''</script>
  <!-- Main Theme JS file    -->
<script src="{{asset('js/theme.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('js/show_password.js')}}"></script>
<script src="{{asset('js/change_to_login_and_register.js')}}"></script>
<script src="{{asset('js/hide_downdrop_menu_onclick.js')}}"></script>
<script src="{{asset('js/GoBackPage.js')}}"></script>


<!--GOOGLE MAPS API-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php $query6 = DB::select("SELECT * FROM gr_configs WHERE variable='api_google_maps_key'");foreach ($query6 as $result_query6){ echo $result_query6->value; }?>&libraries=places&callback=initMap" async defer"></script>
<script src="{{asset('js/call_to_google_maps.js')}}"></script>
<!--END OF GOOGLE MAPS API-->


      @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
        <script>
        $(function() {
            $('#modal_login').modal('show');
        });
        </script>
        @endif


        @if(!empty(Session::get('error_code')) && Session::get('error_code') == 3)
        <script>
        $(function() {
            $('#modal_register').modal('show');
        });
        </script>
        @endif

        @if (Session::has('success'))
                <script>
                    $(function(){
                        $('#myModal').modal('show');
                    });
                </script>
        @endif

        @if (Session::has('success2'))
                <script>
                    $(function(){
                        $('#myModal2').modal('show');
                    });
                </script>
        @endif

        @if (Session::has('message'))
                <script>
                    $(function(){
                        $('#myError').modal('show');
                    });
                </script>
        @endif

        @if(!empty(Session::get('emailview')) && Session::get('emailview') == 1)
        <script>
        $(function() {
            $('#myEmailView').modal('show');
        });
        </script>
        @endif

        @if(!empty(Session::get('forgetpassword')) && Session::get('forgetpassword') == 2)
        <script>
        $(function() {
            $('#myForgetPassword').modal('show');
        });
        </script>
        @endif

        @if(!empty(Session::get('welcomeuser')) && Session::get('welcomeuser') == 4)
        <script>
        $(function() {
            $('#welcomeUserModal').modal('show');
        });
        </script>
        @endif

        <script>
        $(document).on('click', '.desktop-closed-message-avatar img', function() {
    var iframe = document.getElementById("chatBotManFrame");
    iframe.addEventListener('load', function () {
        var htmlFrame = this.contentWindow.document.getElementsByTagName("html")[0];
        var bodyFrame = this.contentWindow.document.getElementsByTagName("body")[0];
        var headFrame = this.contentWindow.document.getElementsByTagName("head")[0];

        var image = ""

        htmlFrame.style.backgroundImage = "url("+image+")";
        bodyFrame.style.backgroundImage = "url("+image+")";
    });
});

        </script>
