<?php

namespace App\Http\Controllers;

use App\Models\GrParkingSpace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class AnunciousController extends Controller
{
    //
    public function editAnuncious1($id){
        $parkingSpace = GrParkingSpace::find($id);
        return view('settings.edit-anuncios')->with('parkingSpace',$parkingSpace);
    }

    public function editAnuncious1Post(Request $request,$id){
        // return $request;
        $request->validate([
          'es_street' => 'required',
          'es_zone' => 'required',
          'planta' => 'required',
          'n_plaza' => 'required',
          'codigo_postel' => 'required',
          'largo' => 'required',
          'ancho' => 'required',
          'altura_min' => 'required',
          'es_description' => 'required',
        ]);
        if($request->vahical1 != null && $request->vahical2 == null ){
            $vahical_type = $request->vahical1;
        }elseif($request->vahical1 == null && $request->vahical2 != null ){
                $vahical_type = $request->vahical2;
        }else{
            $vahical_type = $request->vahical1;
        }
        // return $vahical_type;
        $parkingSpace = GrParkingSpace::find($id);

        $parkingSpace->es_street = $request->es_street;
        $parkingSpace->es_zone = $request->es_zone;
        $parkingSpace->planta = $request->planta;
        $parkingSpace->n_plaza = $request->n_plaza;
        $parkingSpace->codigo_postel = $request->codigo_postel;
        $parkingSpace->largo = $request->largo;
        $parkingSpace->ancho = $request->ancho;
        $parkingSpace->altura_min = $request->altura_min;
        $parkingSpace->es_description = $request->es_description;
        $parkingSpace->fianza = $request->fianza;
        $parkingSpace->vahical_type = $vahical_type;

        $parkingSpace->save();

        return view('settings.edit-anuncios2')->with('parkingSpace',$parkingSpace);
    }

    public function editAnuncious2($id){
        $parkingSpace = GrParkingSpace::find($id);
        return view('settings.edit-anuncios2')->with('parkingSpace',$parkingSpace);
    }

    public function editAnuncious2Post(Request $request,$id){
        // return $request;
        if($request->duration1 != null && $request->duration2 == null && $request->duration3 == null ){
            $duration = $request->duration1;
        }elseif($request->duration1 == null && $request->duration2 != null && $request->duration3 == null){
                $duration = $request->duration2;
        }elseif($request->duration1 == null && $request->duration2 == null && $request->duration3 != null){
                $duration = $request->duration3;
        }else{
                $duration = $request->duration1;
        }
        // return $duration;

        $parkingSpace = GrParkingSpace::find($id);

        $parkingSpace->duration = $duration;
        $parkingSpace->disabled_access = $request->disabled_access;
        $parkingSpace->housekeeping = $request->housekeeping;
        $parkingSpace->security_personnel = $request->security_personnel;
        $parkingSpace->automatic_door = $request->automatic_door;
        $parkingSpace->gate_electric_charger = $request->gate_electric_charger;
        $parkingSpace->security_cameras = $request->security_cameras;

        // return $parkingSpace;
        $parkingSpace->save();

        return Redirect::route('adverts-view')->with('msg','ParkingLot Information Update Successfully!');

    }

    public function advertsView(){
        $parkingSpaces =  GrParkingSpace::where('user_id',Auth::user()->id)->get();
        return view('settings.anuncios')->with('parkingSpaces',$parkingSpaces);
    }

    public function deleteAnuncious($id){
        // return $id;
        $parkingSpaces =  GrParkingSpace::find($id);
        $parkingSpaces->delete();
        // return $parkingSpaces;
        return Redirect::route('adverts-view')->with('deletemsg','Parking Space Remove Successfully!');
    }
}
