<?php

namespace App\Http\Controllers;

use App\Models\GrParkingSpace;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SubeTuPlazaController extends Controller
{
       public function  subeTuPlazaPage1(Request $request){

        $parkingSpace =  $request->session()->get('parkingSpace');
        // return $parkingspace;
        return view('sube-tu-plaza.sube-tu-plaza1',compact('parkingSpace'));
       }

       public function  subeTuPlazaPage2(Request $request){
        if (session()->missing('parkingSpace')) {
            return redirect()->route('getSubeTuPlaza2');
        }
        $parkingSpace = $request->session()->get('parkingSpace');
        return view('sube-tu-plaza.sube-tu-plaza2',compact('parkingSpace'));
        // return view('sube-tu-plaza.sube-tu-plaza2')->with('parkingSpace',$parkingSpace);;
       }

       public function  subeTuPlazaPage3(Request $request){
        if (session()->missing('parkingSpace')) {
            return redirect()->route('getSubeTuPlaza3');
        }
        $parkingSpace =  $request->session()->get('parkingSpace');
        return view('sube-tu-plaza.sube-tu-plaza3')->with('parkingSpace',$parkingSpace);
       }

       public function  subeTuPlazaPage4(Request $request){
        if (session()->missing('parkingSpace')) {
            return redirect()->route('getSubeTuPlaza4');
        }
        $parkingSpace =  $request->session()->get('parkingSpace');
        // return view('sube-tu-plaza.sube-tu-plaza3');
        return view('sube-tu-plaza.sube-tu-plaza4')->with('parkingSpace',$parkingSpace);
       }

       public function  subeTuPlazaPage5(Request $request){
        if (session()->missing('parkingSpace')) {
            return redirect()->route('getSubeTuPlaza5');
        }
        $parkingSpace =  $request->session()->get('parkingSpace');
        return view('sube-tu-plaza.sube-tu-plaza5')->with('parkingSpace',$parkingSpace);
       }

       public function  subeTuPlazaPage6(Request $request){
        if (session()->missing('parkingSpace')) {
            return redirect()->route('getSubeTuPlaza6');
        }
        $parkingSpace =  $request->session()->get('parkingSpace');
        return view('sube-tu-plaza.sube-tu-plaza6')->with('parkingSpace',$parkingSpace);
       }

        public function  subeTuPlazaPage7(Request $request){
            if (session()->missing('parkingSpace')) {
            return redirect()->route('getSubeTuPlaza7');
           }
        $parkingSpace =  $request->session()->get('parkingSpace');
        return view('sube-tu-plaza.sube-tu-plaza7')->with('parkingSpace',$parkingSpace);
       }

        public function  subeTuPlazaPage8(Request $request){
            // return $request;
            if (session()->missing('parkingSpace')) {
            return redirect()->route('getSubeTuPlaza8');
           }
        $parkingSpace =  $request->session()->get('parkingSpace');
        // return $parkingSpace;
        return view('sube-tu-plaza.sube-tu-plaza8')->with('parkingSpace',$parkingSpace);
       }

        public function  subeTuPlazaPage9(Request $request){
            if (session()->missing('parkingSpace')) {
            return redirect()->route('getSubeTuPlaza9');
          }

          $parkingSpace =  $request->session()->get('parkingSpace');
        //   return $parkingSpace;
          return view('sube-tu-plaza.sube-tu-plaza9')->with('parkingSpace',$parkingSpace);
         }

        public function  subeTuPlazaPage10(Request $request){
            if (session()->missing('parkingSpace')) {
                return redirect()->route('getSubeTuPlaza10');
              }

              $parkingSpace =  $request->session()->get('parkingSpace');
             return view('sube-tu-plaza.sube-tu-plaza10')->with('parkingSpace',$parkingSpace);
         }


         public function  subeTuPlazaPagePost1(Request $request){
            // return $request;
            $validator = $request->validate([
                'vahical_type' => 'required',
            ]);

            $vahical_type = $request->vahical_type;
            // return $request;
            // if($request->vahical1 != null && $request->vahical2 == null ){
            //     $vahical_type = $request->vahical1;
            // }elseif($request->vahical1 == null && $request->vahical2 != null ){
            //         $vahical_type = $request->vahical2;
            // }else{
            //
            // }

            if(empty($request->session()->get('parkingSpace'))){
                $parkingSpace = new GrParkingSpace();
                $parkingSpace->vahical_type=$vahical_type;
                $request->session()->put('parkingSpace', $parkingSpace);
            }else{
                $parkingSpace = $request->session()->get('parkingSpace');
                $parkingSpace->vahical_type=$vahical_type;
                $request->session()->put('parkingSpace', $parkingSpace);
            }

            return Redirect::route('getSubeTuPlaza2');
           }

           public function  subeTuPlazaPagePost2(Request $request){
                $validator = $request->validate([
                    'largo' => 'required',
                    'ancho' => 'required',
                    'altura_min' => 'required'
                ]);

                if(empty($request->session()->get('parkingSpace'))){
                    $parkingSpace = new GrParkingSpace();
                    $parkingSpace->vahical_type= $request->vahical_type;
                    $parkingSpace->largo = $request->largo;
                    $parkingSpace->ancho = $request->ancho;
                    $parkingSpace->altura_min = $request->alutra_min;
                    $request->session()->put('parkingSpace', $parkingSpace);
                }else{
                    $parkingSpace = $request->session()->get('parkingSpace');
                    $parkingSpace->vahical_type=$parkingSpace->vahical_type;
                    $parkingSpace->largo = $request->largo;
                    $parkingSpace->ancho = $request->ancho;
                    $parkingSpace->altura_min = $request->altura_min;
                    $request->session()->put('parkingSpace', $parkingSpace);
                }
                return Redirect::route('getSubeTuPlaza3');
            }

           public function  subeTuPlazaPagePost3(Request $request){
            if($request->has('disabled_access')){
                $disabled_access = true;
            }else{
                $disabled_access = false;
            }

            if($request->has('security_personnel')){
                $security_personnel = true;
            }else{
                $security_personnel = false;
            }

            if($request->has('gate_electric_charger')){
                $gate_electric_charger = true;
            }else{
                $gate_electric_charger = false;
            }

            if($request->has('housekeeping')){
                $housekeeping = true;
            }else{
                $housekeeping = false;
            }

            if($request->has('automatic_door')){
                $automatic_door = true;
            }else{
                $automatic_door = false;
            }

            if($request->has('security_cameras')){
                $security_cameras = true;
            }else{
                $security_cameras = false;
            }

            if(empty($request->session()->get('parkingSpace'))){
                $parkingSpace = new GrParkingSpace();
                $parkingSpace->vahical_type=$request->vahical_type;
                $parkingSpace->largo = $request->largo;
                $parkingSpace->ancho = $request->ancho;
                $parkingSpace->altura_min = $request->altura_min;
                $parkingSpace->disabled_access = $disabled_access;
                $parkingSpace->housekeeping = $housekeeping;
                $parkingSpace->security_personnel = $security_personnel;
                $parkingSpace->automatic_door = $automatic_door;
                $parkingSpace->gate_electric_charger = $gate_electric_charger;
                $parkingSpace->security_cameras = $security_cameras;
                $request->session()->put('parkingSpace', $parkingSpace);
            }else{
                $parkingSpace = $request->session()->get('parkingSpace');

                $parkingSpace->vahical_type=$parkingSpace->vahical_type;
                $parkingSpace->largo = $parkingSpace->largo;
                $parkingSpace->ancho = $parkingSpace->ancho;
                $parkingSpace->altura_min = $parkingSpace->altura_min;
                $parkingSpace->disabled_access = $disabled_access;
                $parkingSpace->housekeeping = $housekeeping;
                $parkingSpace->security_personnel = $security_personnel;
                $parkingSpace->automatic_door = $automatic_door;
                $parkingSpace->gate_electric_charger = $gate_electric_charger;
                $parkingSpace->security_cameras = $security_cameras;
                $request->session()->put('parkingSpace', $parkingSpace);
            }

            return Redirect::route('getSubeTuPlaza4');
           }


           public function  subeTuPlazaPagePost4(Request $request){
            // return $request;
            $validator = $request->validate([
                'ciudad' => 'required',
                'es_zone' => 'required',
                'direccion' => 'required',
                'planta' => 'required',
                'n_plaza' => 'required',
                'codigo_postel' => 'required',
            ]);

            if(empty($request->session()->get('parkingSpace'))){
                $parkingSpace = new GrParkingSpace();

                $request->session()->put('parkingSpace', $parkingSpace);
            }else{
                $parkingSpace = $request->session()->get('parkingSpace');
                // $parkingSpace = new GrParkingSpace();
                $parkingSpace->vahical_type=$parkingSpace->vahical_type;
                $parkingSpace->largo = $parkingSpace->largo;
                $parkingSpace->ancho = $parkingSpace->ancho;
                $parkingSpace->altura_min = $parkingSpace->altura_min;
                $parkingSpace->disabled_access = $parkingSpace->disabled_access;
                $parkingSpace->housekeeping = $parkingSpace->housekeeping;
                $parkingSpace->security_personnel = $parkingSpace->security_personnel;
                $parkingSpace->automatic_door = $parkingSpace->automatic_door;
                $parkingSpace->gate_electric_charger = $parkingSpace->gate_electric_charger;
                $parkingSpace->security_cameras = $parkingSpace->security_cameras;
                $parkingSpace->ciudad = $request->ciudad;
                $parkingSpace->es_zone = $request->es_zone;
                $parkingSpace->direccion = $request->direccion;
                $parkingSpace->planta = $request->planta;
                $parkingSpace->n_plaza = $request->n_plaza;
                $parkingSpace->codigo_postel = $request->codigo_postel;

                $request->session()->put('parkingSpace', $parkingSpace);
            }
            // return  $parkingSpace;
            return Redirect::route('getSubeTuPlaza5');
           }


           public function  subeTuPlazaPagePost5(Request $request){

            $request->validate([
                  'duration' => 'required',
            ]);
            $duration = $request->duration;
            if(empty($request->session()->get('parkingSpace'))){
                $parkingSpace = new GrParkingSpace();

                $request->session()->put('parkingSpace', $parkingSpace);
            }else{
                $parkingSpace = $request->session()->get('parkingSpace');
                // $parkingSpace = new GrParkingSpace();
                $parkingSpace->vahical_type=$parkingSpace->vahical_type;
                $parkingSpace->largo = $parkingSpace->largo;
                $parkingSpace->ancho = $parkingSpace->ancho;
                $parkingSpace->altura_min = $parkingSpace->altura_min;
                $parkingSpace->disabled_access = $parkingSpace->disabled_access;
                $parkingSpace->housekeeping = $parkingSpace->housekeeping;
                $parkingSpace->security_personnel = $parkingSpace->security_personnel;
                $parkingSpace->automatic_door = $parkingSpace->automatic_door;
                $parkingSpace->gate_electric_charger = $parkingSpace->gate_electric_charger;
                $parkingSpace->security_cameras = $parkingSpace->security_cameras;
                $parkingSpace->ciudad = $parkingSpace->ciudad;
                $parkingSpace->es_zone = $parkingSpace->es_zone;
                $parkingSpace->direccion = $parkingSpace->direccion;
                $parkingSpace->planta = $parkingSpace->planta;
                $parkingSpace->n_plaza = $parkingSpace->n_plaza;
                $parkingSpace->codigo_postel = $parkingSpace->codigo_postel;
                $parkingSpace->duration = $duration;

                $request->session()->put('parkingSpace', $parkingSpace);
            }
            //    return $parkingSpace;
            return Redirect::route('getSubeTuPlaza6');
           }


           public function  subeTuPlazaPagePost6(Request $request){
            // return $request;
            $validator = $request->validate([
                'precio' => 'required',
                // 'vehic' => 'required',
            ]);

            if($request->has('vehic')){
                $vehic = true;
            }else{
                $vehic = false;
            }

            if(empty($request->session()->get('parkingSpace'))){
                $parkingSpace = new GrParkingSpace();

                $request->session()->put('parkingSpace', $parkingSpace);
            }else{
                $parkingSpace = $request->session()->get('parkingSpace');
                // $parkingSpace = new GrParkingSpace();
                $parkingSpace->vahical_type=$parkingSpace->vahical_type;
                $parkingSpace->largo = $parkingSpace->largo;
                $parkingSpace->ancho = $parkingSpace->ancho;
                $parkingSpace->altura_min = $parkingSpace->altura_min;
                $parkingSpace->disabled_access = $parkingSpace->disabled_access;
                $parkingSpace->housekeeping = $parkingSpace->housekeeping;
                $parkingSpace->security_personnel = $parkingSpace->security_personnel;
                $parkingSpace->automatic_door = $parkingSpace->automatic_door;
                $parkingSpace->gate_electric_charger = $parkingSpace->gate_electric_charger;
                $parkingSpace->security_cameras = $parkingSpace->security_cameras;
                $parkingSpace->ciudad = $parkingSpace->ciudad;
                $parkingSpace->es_zone = $parkingSpace->es_zone;
                $parkingSpace->direccion = $parkingSpace->direccion;
                $parkingSpace->planta = $parkingSpace->planta;
                $parkingSpace->n_plaza = $parkingSpace->n_plaza;
                $parkingSpace->codigo_postel = $parkingSpace->codigo_postel;
                $parkingSpace->duration = $parkingSpace->duration;
                $parkingSpace->precio = $request->precio;
                $parkingSpace->vehic = $vehic;

                $request->session()->put('parkingSpace', $parkingSpace);
            }
            // return $parkingSpace;
            return Redirect::route('getSubeTuPlaza7');

           }

           public function  subeTuPlazaPagePost7(Request $request){
            //  return $request;
             $validator = $request->validate([
                'upload_file' => 'required',
            ]);

            $upload_images = [];
            if($request->hasFile('upload_file')){
                $files = $request->upload_file;
                foreach ($files as $file) {
                    $image = $file;
                    $name = Str::random(6).'.'.$image->getClientOriginalExtension();

                    $des = public_path('/img/photo/parking_1/');
                    $image->move($des, $name);
                    $upload_images[] = $name;
                }
            }
            // return $upload_images
            if(empty($request->session()->get('parkingSpace'))){
                $parkingSpace = new GrParkingSpace();

                $request->session()->put('parkingSpace', $parkingSpace);
            }else{
                $parkingSpace = $request->session()->get('parkingSpace');
                // $parkingSpace = new GrParkingSpace();
                $parkingSpace->vahical_type=$parkingSpace->vahical_type;
                $parkingSpace->largo = $parkingSpace->largo;
                $parkingSpace->ancho = $parkingSpace->ancho;
                $parkingSpace->altura_min = $parkingSpace->altura_min;
                $parkingSpace->disabled_access = $parkingSpace->disabled_access;
                $parkingSpace->housekeeping = $parkingSpace->housekeeping;
                $parkingSpace->security_personnel = $parkingSpace->security_personnel;
                $parkingSpace->automatic_door = $parkingSpace->automatic_door;
                $parkingSpace->gate_electric_charger = $parkingSpace->gate_electric_charger;
                $parkingSpace->security_cameras = $parkingSpace->security_cameras;
                $parkingSpace->ciudad = $parkingSpace->ciudad;
                $parkingSpace->es_zone = $parkingSpace->es_zone;
                $parkingSpace->direccion = $parkingSpace->direccion;
                $parkingSpace->planta = $parkingSpace->planta;
                $parkingSpace->n_plaza = $parkingSpace->n_plaza;
                $parkingSpace->codigo_postel = $parkingSpace->codigo_postel;
                $parkingSpace->duration = $parkingSpace->duration;
                $parkingSpace->precio = $parkingSpace->precio;
                $parkingSpace->vehic = $parkingSpace->vehic;
                $parkingSpace->upload_file = $upload_images;

                $request->session()->put('parkingSpace', $parkingSpace);
            }
            //   return $parkingSpace;
            return Redirect::route('getSubeTuPlaza8');
           }
           public function  subeTuPlazaPagePost8(Request $request){
            // return $request;
            $request->validate([
                  'date' => 'required'
            ]);
            // return $request;
            if(empty($request->session()->get('parkingSpace'))){
                $parkingSpace = new GrParkingSpace();

                $request->session()->put('parkingSpace', $parkingSpace);
            }else{
                $parkingSpace = $request->session()->get('parkingSpace');
                // $parkingSpace = new GrParkingSpace();
                $parkingSpace->vahical_type=$parkingSpace->vahical_type;
                $parkingSpace->largo = $parkingSpace->largo;
                $parkingSpace->ancho = $parkingSpace->ancho;
                $parkingSpace->altura_min = $parkingSpace->altura_min;
                $parkingSpace->disabled_access = $parkingSpace->disabled_access;
                $parkingSpace->housekeeping = $parkingSpace->housekeeping;
                $parkingSpace->security_personnel = $parkingSpace->security_personnel;
                $parkingSpace->automatic_door = $parkingSpace->automatic_door;
                $parkingSpace->gate_electric_charger = $parkingSpace->gate_electric_charger;
                $parkingSpace->security_cameras = $parkingSpace->security_cameras;
                $parkingSpace->ciudad = $parkingSpace->ciudad;
                $parkingSpace->es_zone = $parkingSpace->es_zone;
                $parkingSpace->direccion = $parkingSpace->direccion;
                $parkingSpace->planta = $parkingSpace->planta;
                $parkingSpace->n_plaza = $parkingSpace->n_plaza;
                $parkingSpace->codigo_postel = $parkingSpace->codigo_postel;
                $parkingSpace->duration = $parkingSpace->duration;
                $parkingSpace->precio = $parkingSpace->precio;
                $parkingSpace->vehic = $parkingSpace->vehic;
                $parkingSpace->upload_file = $parkingSpace->upload_file;
                $parkingSpace->date = $request->date;
                $request->session()->put('parkingSpace', $parkingSpace);
            }
            //   return $parkingSpace;
            return Redirect::route('getSubeTuPlaza9');

           }
           public function  subeTuPlazaPagePost9(Request $request){
            // return $request;
            $request->validate([
                'time' => 'required'
                ]);
            if(empty($request->session()->get('parkingSpace'))){
                $parkingSpace = new GrParkingSpace();

                $request->session()->put('parkingSpace', $parkingSpace);
            }else{
                $parkingSpace = $request->session()->get('parkingSpace');
                // $parkingSpace = new GrParkingSpace();
                $parkingSpace->vahical_type=$parkingSpace->vahical_type;
                $parkingSpace->largo = $parkingSpace->largo;
                $parkingSpace->ancho = $parkingSpace->ancho;
                $parkingSpace->altura_min = $parkingSpace->altura_min;
                $parkingSpace->disabled_access = $parkingSpace->disabled_access;
                $parkingSpace->housekeeping = $parkingSpace->housekeeping;
                $parkingSpace->security_personnel = $parkingSpace->security_personnel;
                $parkingSpace->automatic_door = $parkingSpace->automatic_door;
                $parkingSpace->gate_electric_charger = $parkingSpace->gate_electric_charger;
                $parkingSpace->security_cameras = $parkingSpace->security_cameras;
                $parkingSpace->ciudad = $parkingSpace->ciudad;
                $parkingSpace->es_zone = $parkingSpace->es_zone;
                $parkingSpace->direccion = $parkingSpace->direccion;
                $parkingSpace->planta = $parkingSpace->planta;
                $parkingSpace->n_plaza = $parkingSpace->n_plaza;
                $parkingSpace->codigo_postel = $parkingSpace->codigo_postel;
                $parkingSpace->duration = $parkingSpace->duration;
                $parkingSpace->precio = $parkingSpace->precio;
                $parkingSpace->vehic = $parkingSpace->vehic;
                $parkingSpace->upload_file = $parkingSpace->upload_file;
                $parkingSpace->date = $parkingSpace->date;
                $parkingSpace->time = $request->time;

                $request->session()->put('parkingSpace', $parkingSpace);
            }
            return Redirect::route('getSubeTuPlaza10');
        }

        public function  subeTuPlazaPagePost10(Request $request){
            if(empty($request->session()->get('parkingSpace'))){
                $parkingSpace = new GrParkingSpace();

                $request->session()->put('parkingSpace', $parkingSpace);
            }else{
                $parkingSpace = $request->session()->get('parkingSpace');

                $space = new GrParkingSpace();
                $space->vahical_type= $parkingSpace->vahical_type;
                $space->largo = $parkingSpace->largo;
                $space->ancho = $parkingSpace->ancho;
                $space->altura_min = $parkingSpace->altura_min;
                $space->disabled_access = $parkingSpace->disabled_access;
                $space->housekeeping = $parkingSpace->housekeeping;
                $space->security_personnel = $parkingSpace->security_personnel;
                $space->automatic_door = $parkingSpace->automatic_door;
                $space->gate_electric_charger = $parkingSpace->gate_electric_charger;
                $space->security_cameras = $parkingSpace->security_cameras;
                $space->es_zone = $parkingSpace->es_zone;
                $space->es_street = $parkingSpace->ciudad;
                $space->es_description = $parkingSpace->direccion;
                $space->planta = $parkingSpace->planta;
                $space->n_plaza = $parkingSpace->n_plaza;
                $space->codigo_postel = $parkingSpace->codigo_postel;
                $space->duration = $parkingSpace->duration;
                $space->price = $parkingSpace->precio;
                $space->fianza = $parkingSpace->vehic;
                $space->photo_path = '/img/photo/parking_1/';
                $space->time_make_3d_video = Carbon::createFromFormat('d-m-Y H:i',Carbon::parse($parkingSpace->date)->format('d-m-Y') . " " . $parkingSpace->time,null);
                $space->user_id = Auth::user()->id;
                $space->save();
                //    $space = GrParkingSpace::find(4);
                foreach ($parkingSpace->upload_file as $file) {
                    $image = $file;

                    $arr = (explode('.',$image));
                    // return $arr;
                    $mediaObj = new Media();
                    $mediaObj->file_path = $image;
                    $mediaObj->file_type = $arr[1];
                    $space->media()->save($mediaObj);

                }

                session()->forget('parkingSpace');
            }

            return Redirect::route('home');

        }
}
