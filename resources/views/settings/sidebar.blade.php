<div class="card border-0 shadow mb-6 mb-lg-0">
    <div class="card-header bg-gray-100 py-4 border-0">
      <h5 class = "mt-4">Ajustes</h5>
    </div>
    <div class="card-body p-4">
      <div class="d-flex align-items-center mb-3">
            <div class="tab" >
              <a href="{{route('profile-view')}}" class = "{{ Route::currentRouteNamed('profile-view') ? "tablinks mb-0 active" : "tablinks mb-0" }}">Perfil</a>
            </div>
      </div>
      <div class="d-flex align-items-center mb-3">
            <div class="tab" >
            <a href="{{route('change-password-view')}}"  class = "{{ Route::currentRouteNamed('change-password-view') ? "tablinks mb-0 active" : "tablinks mb-0" }}" >Cambiar contraseña</a>
            </div>
      </div>
      <div class="d-flex align-items-center mb-3">
        <div class="tab">
          <a href="{{route('payment-mathod-view')}}" class = "{{ Route::currentRouteNamed('payment-mathod-view') ? "tablinks mb-0 active" : "tablinks mb-0" }}">Métodos de pago</a>
        </div>
      </div>
      <!-- <div class="d-flex align-items-center mb-3">
        <div class="tab">
          <a href="{{route('messages-view')}}" class = "{{ Route::currentRouteNamed('messages-view') ? "tablinks mb-0 active" : "tablinks mb-0" }}">Mensajes</a>
        </div>
      </div> -->
      <div class="d-flex align-items-center mb-3">
        <div class="tab">
          <a href="{{route('requests-view')}}" class = "{{ Route::currentRouteNamed('requests-view') ? "tablinks mb-0 active" : "tablinks mb-0" }}">Solicitudes</a>
        </div>
      </div>
      <!-- <div class="d-flex align-items-center mb-3">
        <div class="tab">
          <a href="{{route('vehicles-view')}}" class = "{{ Route::currentRouteNamed('vehicles-view') ? "tablinks mb-0 active" : "tablinks mb-0" }}">Vehículos</a>
        </div>
      </div> -->
      <div class="d-flex align-items-center mb-3">
        <div class="tab">
          <a href="{{route('adverts-view')}}" class = "{{ Route::currentRouteNamed('adverts-view') ? "tablinks mb-0 active" : "tablinks mb-0" }}">Anuncios</a>
        </div>
      </div>
      <div class="d-flex align-items-center mb-3">
        <div class="tab">
          <a href="{{route('square-access-view')}}"
            class = "{{ Route::currentRouteNamed('square-access-view') ? "tablinks mb-0 active" : "tablinks mb-0" }}
                     {{Route::currentRouteNamed('recogida') ? "tablinks mb-0 active" : "tablinks mb-0"}}
                     {{Route::currentRouteNamed('recogida2') ? "tablinks mb-0 active" : "tablinks mb-0"}}
                     {{Route::currentRouteNamed('entrega2') ? "tablinks mb-0 active" : "tablinks mb-0"}}
                     {{Route::currentRouteNamed('entrega') ? "tablinks mb-0 active" : "tablinks mb-0"}}">Acceso a la plaza</a>
        </div>
      </div>
      <div class="d-flex align-items-center mb-3">
        <div class="tab">
          <a href="{{route('contracts-view')}}" class = "{{ Route::currentRouteNamed('contracts-view') ? "tablinks mb-0 active" : "tablinks mb-0"}}">Contratos</a>
        </div>
      </div>
      <div class="d-flex align-items-center mb-3">
        <div class="tab">
          <a href="{{route('invoices-view')}}" class = "{{ Route::currentRouteNamed('invoices-view') ? "tablinks mb-0 active" : "tablinks mb-0" }}">Facturas</a>
        </div>
      </div>
    </div>
  </div>
