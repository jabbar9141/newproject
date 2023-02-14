<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\GrParkingSpace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class FavoriteController extends Controller
{
    //

    public function addToFavorite($id)
    {
        if(Auth::check()){
            $space = GrParkingSpace::find($id);
            $user_id = Auth::user()->id;
            $exsisting_space = Favorite::withTrashed()
                             ->where('gr_parking_space_id','=',$space->id)
                             ->where('user_id','=',$user_id)
                             ->first();
            if(is_null($exsisting_space)){
               $space->favorite()->create([
                    'user_id' => $user_id,
                ]);
                return Redirect::route('search-result');

            }else{
                if(is_null($exsisting_space->deleted_at))
                {
                    $exsisting_space->delete();
                    return Redirect::route('search-result');
                }else{
                    $exsisting_space->restore();
                    return Redirect::route('search-result');
                }
            }
        }else{
           return Redirect::route('search-result')->with('error_code',5);
        }


    }

    public function getAllFavoriteParkigSpaces()
    {
        //destroy the session of parking space
        session()->forget('parkingSpace');

        $favItems = Favorite::where('user_id',Auth::user()->id)->get();
        // return $favItems;
        return view('favoritos')->with('favorits',$favItems);
    }
}
