@extends('main-template')
@section('section')
    <section class="py-5">
        <div class="container">
        <div class="row">
            <div class="col-lg-3 me-lg-auto">
            @include('settings.sidebar')
            </div>
            <div id="Perfil" class="tabcontent col-lg-9 ps-lg-5">
                <h3 class="class_titles_profile_options">Mi Perfil</h3>
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

                <form action="{{route('update-profile')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row">
                    <div class="col-md-8">
                        <input type="text" name="name"  class="class_input_fields_profile form-control  mt-2" placeholder="name" value="{{Auth::user()->name}}">
                        <input type="text"  name='surname' class="class_input_fields_profile form-control  mt-4"  placeholder="surname" value="{{Auth::user()->surname}}">
                        <input type="email"  name='email' class="class_input_fields_profile form-control  mt-4"  placeholder="email" value="{{Auth::user()->email}}">
                        <label class="mt-4">Sexo*</label>
                        <div class="row mt-2"
                        style="border: 1px solid;
                                    border-radius: 2em;
                                    margin-left:2px;
                                    margin-right:2px">
                                <div class="col">
                                    <input type="radio"  name="sex" id="option1" value="hombre" autocomplete="" {{Auth::user()->sex == 'hombre' ? 'checked': ''}}  />
                                    <label class="btn" for="option1">Hombre</label>
                                </div>
                                <div class="col">
                                    <input type="radio"  name="sex" id="option2" value="mujer" autocomplete="off"  {{Auth::user()->sex == 'mujer' ? 'checked': ''}}/>
                                    <label class="btn" for="option2">Mujer</label>
                                </div>
                                <div class="col">
                                    <input class="class_checkbox_profile_option3" type="radio" name="sex" id="option3" value="no-binario" autocomplete="off" {{Auth::user()->sex == 'no-binario' ? 'checked': ''}} />
                                    <label class="btn" for="option3">No Binario</label>
                                </div>
                            </div>

                            <label class="mt-4">Cuando naciste*</label>
                            <input type="date" name="date_of_birth" class="class_input_fields_profile form-control" value="{{Auth::user()->date_of_birth}}" placeholder="Date OF Birth">

                            <label class="mt-4">DNI o NIE*</label>
                            <input type="text" name='identity_code' class="class_input_fields_profile form-control mt-2" placeholder="Documento de identidad" value={{Auth::user()->identity_code}}>

                        <label class="mt-4">¿Qué vehículo vas a aparcar?</label>
                        <div class="row mt-2"
                        style="border: 1px solid;
                        border-radius: 2em;
                        margin-left:2px;
                        margin-right:2px">
                                <div class="col">
                                    <input type="radio"  name="vahical_tpye" id="option1" value="coche" autocomplete="off" {{Auth::user()->vahical_type == 'coche' ? 'checked': ''}}  />
                                    <label class="btn" for="option1">Coche</label>
                                </div>
                                <div class="col">
                                    <input type="radio"  name="vahical_type" id="option2" value="moto" autocomplete="off"  {{Auth::user()->vahical_type == 'moto' ? 'checked': ''}}/>
                                    <label class="btn" for="option2">Moto</label>
                                </div>
                                <div class="col">
                                    <input type="radio" class="class_checkbox_profile_option3" name="vahical_type" id="option3" value="coche/moto" autocomplete="off"  {{Auth::user()->vahical_type == 'hombre' ? 'checked': ''}}/>
                                    <label class="btn" for="option3">Coche/Moto</label>
                                </div>
                            </div>
                        <label class="mt-4">¿Estudias o trabajas?</label>
                        <div class="row mt-2"
                        style="border: 1px solid;
                        border-radius: 2em;
                        margin-left:2px;
                        margin-right:2px">
                                <div class="col">
                                    <input type="radio"  name="job" value="estudiante" id="option1" autocomplete="" {{Auth::user()->job == 'estudiante' ? 'checked': ''}}  />
                                    <label class="btn" for="option1">Estudiante</label>
                                </div>
                                <div class="col">
                                    <input type="radio"  name="job" value="profesional" id="option2" autocomplete="off" {{Auth::user()->job == 'profesional' ? 'checked': ''}} />
                                    <label class="btn" for="option2">Profesional</label>
                                </div>
                        </div>
                            <label class="mt-4">¿A qué te dedicas?</label>
                            <input type="text" name='job_description' value="{{Auth::user()->job_description}}" class="class_input_fields_profile form-control mt-2" placeholder="Oficio">
                    </div>
                    <div class="col-md-4" style="text-align: -webkit-center;margin-top: 10px;">
                                <img class="class_avatar_profile_photo d-block avatar avatar-xxl mb-2" src="/img/avatar/{{Auth::user()->avatar}}" alt="" onclick="document.getElementById('upload_file').click()">
                        <img class="class_img_pencil_profile_photo" src="/img/pencil.png">
                                <input type="file" class="class_text_custom_photo_profile" id="upload_file" name="avatar" />
                        <p class="class_text_note_profile_page mt-4">Nota: Utiliza una foto tuya para transmitir confianza, no se puede utilizar una foto de un logo, puede ser detectado como spam</p>
                    </div>
                    <div>
                        <label class="mt-4">Explícanos algo breve sobre ti:</label>
                        <textarea name="description" class="class_description_field_profile form-control mt-2" rows="5" placeholder="Descripción.....">{{Auth::user()->description}}</textarea>
                    </div>

                    </div>
                    <button type="submit" class="class_button_accept_profile class_login_button_modal class_input_box form-control">
                        Aceptar
                    </button>

                </form>

            </div>

        </div>
    </div>
    </section>
@endsection



