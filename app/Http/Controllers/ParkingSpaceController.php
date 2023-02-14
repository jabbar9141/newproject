<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\GrParkingSpace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class ParkingSpaceController extends Controller
{
    //
    public function getAllParkingSpaces()
    {
        $allParkingSpaces = GrParkingSpace::paginate(10);
        if(Auth::check()){
            $favorite = Favorite::withTrashed()
            ->where('user_id',Auth::user()->id)
            ->get();
        }else{
            $favorite = [];
        }
    //    return $favorite;
        // return $exsisting_space;
        return view('search-results')
              ->with('allParkingSpaces',$allParkingSpaces)
              ->with('favs',$favorite);
    }

    public function getSingleParkingSpace(Request $request)
    {
        $url=$request->getUri();
        $id = substr($url,-2,-1);
        // return $id;
           $parkingSpace = GrParkingSpace::find($id);
        //    dd($parkingSpace);
           return view('parking-lot')->with('parkingSpace',$parkingSpace);
    }

    public function applyFilter(Request $request)
    {
        // return $request;
        if(!$request->has('disabled_access')
           && !$request->has('housekeeping')
           && !$request->has('security_personnel')
           && !$request->has('automatic_door')
           && !$request->has('security_cameras')
           && !$request->has('gate_electric_charger')
           && $request->vahical == null
           && $request->vahical2 == null
           && $request->startValue == 0
           && $request->endValue == 150
           && $request->duration1 == null
           && $request->duration2 == null
           && $request->duration3 == null){
            $allParkingSpaces = GrParkingSpace::paginate(10);
        if(Auth::check()){
            $favorite = Favorite::withTrashed()
            ->where('user_id',Auth::user()->id)
            ->get();
        }else{
            $favorite = [];
        }
        return Redirect::route('search-result')
              ->with('allParkingSpaces',$allParkingSpaces)
              ->with('favs',$favorite);
        }elseif($request->has('location') || $request->has('duration') || $request->has('vahical_type') || $request->has('vahical_type1') ||$request->has('vahical_type2')){
            $allParkingSpaces = GrParkingSpace::orWhere('duration',$request->duration)
                ->orWhere('vahical_type',$request->vahical_type)
                ->orWhere('vahical_type',$request->vahical_type1)
                ->orWhere('vahical_type',$request->vahical_type2)
                ->orWhere('es_zone', 'like', '%' . $request->location . '%')
                ->orWhere('es_street', 'like', '%' . $request->location . '%')
                ->paginate(10);
                if(Auth::check()){
                    $favorite = Favorite::withTrashed()
                    ->where('user_id',Auth::user()->id)
                    ->get();
                }else{
                    $favorite = [];
                }
                return view('search-results')
                    ->with('allParkingSpaces',$allParkingSpaces)
                    ->with('favs',$favorite);
        }else{
            // return true;
            $firstPrice = $request->startValue;
            $secondPrice = $request->endValue;
            if($firstPrice== 0 && $secondPrice == 150){
                $allParkingSpaces = GrParkingSpace::orWhere('vahical_type',$request->vahical1)
                    ->orWhere('vahical_type',$request->vahical2)
                    ->orWhere('duration',$request->duration1)
                    ->orWhere('duration',$request->duration2)
                    ->orWhere('duration',$request->duration3)
                    ->orWhere('disabled_access',$request->disabled_access)
                    ->orWhere('housekeeping',$request->housekeeping)
                    ->orWhere('security_personnel',$request->security_personnel)
                    ->orWhere('automatic_door',$request->automatic_door)
                    ->orWhere('security_cameras',$request->security_cameras)
                    ->orWhere('gate_electric_charger',$request->gate_electric_charger)
                    ->paginate(10);
            if(Auth::check()){
                $favorite = Favorite::withTrashed()
                ->where('user_id',Auth::user()->id)
                ->get();
            }else{
                $favorite = [];
            }
            return view('search-results')
                  ->with('allParkingSpaces',$allParkingSpaces)
                  ->with('favs',$favorite);

            }else{
                $allParkingSpaces = GrParkingSpace::orWhere('vahical_type',$request->vahical1)
                    ->orWhere('vahical_type',$request->vahical2)
                    ->orWhere('duration',$request->duration1)
                    ->orWhere('duration',$request->duration2)
                    ->orWhere('duration',$request->duration3)
                    ->orWhere('disabled_access',$request->disabled_access)
                    ->orWhere('housekeeping',$request->housekeeping)
                    ->orWhere('security_personnel',$request->security_personnel)
                    ->orWhere('automatic_door',$request->automatic_door)
                    ->orWhere('security_cameras',$request->security_cameras)
                    ->orWhere('gate_electric_charger',$request->gate_electric_charger)
                    ->orWhereBetween('price', [$firstPrice,$secondPrice])
                    ->paginate(10);
                if(Auth::check()){
                    $favorite = Favorite::withTrashed()
                    ->where('user_id',Auth::user()->id)
                    ->get();
                }else{
                    $favorite = [];
                }
                return view('search-results')
                      ->with('allParkingSpaces',$allParkingSpaces)
                      ->with('favs',$favorite);
            }

        }
    }

    public function storeParkingSpace(){

    }

}
