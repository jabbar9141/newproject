@extends('main-template')
<style>
    .tab:hover {
      background-color: #96a0a9af;

    }
    a.tablinks {
        color: #9E9FA4 !important;
        margin-left: 12px;

    }
    /* Create an active/current "tab button" class */
    .tab a.active {
       color:#2A6092!important;
       font-size: 18px;
       font-weight: bold;
    }
    .tab {
    width: 240px;
    height: 28px;
    background-color: #ffffff;
    /* border: 1px solid; */
    border-radius: 7px;
    /* text-align: center; */
}
</style>
@section('section')
    <section class="py-5">
        <div class="container">
        <div class="row">
            <div class="col-lg-3 me-lg-auto">
            @include('settings.sidebar')
            </div>
            <div id="Anuncios" class="tabcontent col-lg-9 ps-lg-5">
                <h3 style="color:#2A6092">Anuncios</h3>
                @if(session()->get('msg'))
                <div class="alert alert-success">
                    <span>
                    <b> {{ session()->get('msg') }}</span>
                </div>
                 @endif
                 @if(session()->get('deletemsg'))
                 <div class="alert alert-danger">
                     <span>
                     <b> {{ session()->get('deletemsg') }}</span>
                 </div>
                  @endif
               @foreach ($parkingSpaces as $parkingSpace)
                <div class="row" style="align-items: center; text-align: center;">
                    <div class="col-sm-10">
                        <a href="{{route('edit.anuncios',$parkingSpace->id)}}">
                            <div class="card mt-2">
                                <div class="card-body">
                                <div class="row " style="align-items:center;text-align: center;">
                                    <div class="col-sm-3">
                                        <img src="{{asset('img/photo/parking_1/photo_1.jpg')}}" alt="" width="100px" height="60px">
                                    </div>
                                    <div class="col-sm-3 ">
                                        <h5>{{$parkingSpace->price}} $</h5>
                                        <p>{{$parkingSpace->es_street. ' '. $parkingSpace->es_zone}}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <h6>Publicado</h6>
                                        <p>{{date('d/m/Y', strtotime($parkingSpace->created_at));}}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-2">
                        <a onclick="alert('Are you sure to delete this parking space')" href="{{route('delete.anuncious',$parkingSpace->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
               @endforeach
            </div>

        </div>
    </div>
    </section>
@endsection
