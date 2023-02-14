@extends('main-template')
@section('section')
    <section class="py-5">
        <div class="container">
        <div class="row">
            <div class="col-lg-3 me-lg-auto">
            @include('settings.sidebar')
            </div>
            <div id="Cambiar" class="tabcontent col-lg-9 ps-lg-5">
                <h3 class="class_titles_profile_options">Cambiar contraseña</h3>
                @if ($errors->any())
                    <div class="class_error_texts_upload_parking">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session()->get('msg'))
                    <div class="alert alert-success">
                        <span>
                        <b> {{ session()->get('msg') }}</span>
                    </div>
                @endif

                @if(session()->get('error'))
                    <div class="alert alert-success">
                        <span>
                        <b> {{ session()->get('error') }}</span>
                    </div>
                @endif


                <form action="{{route('change-password')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <input type="password" name="nueva_contrasena" class="class_field_change_password_page_profile class_input_fields_profile form-control  mt-2" placeholder="Nueva Contraseña" value="">
                    <input type="password"  name='confirmar_contrasena' class="class_field_change_password_page_profile class_input_fields_profile form-control  mt-4"  placeholder="Confirmar Contraseña" value="">
                    <button type="submit" class="class_button_accept_profile_change_password class_login_button_modal class_input_box form-control">

                        Aceptar
                   </button>
                </form>
            </div>
        </div>
    </div>
    </section>
@endsection
