<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Illuminate\Database\Eloquent\SoftDeletes;

class Favorite extends Model
{
    use HasFactory,SoftDeletes;


    protected $fillable = [
        'user_id',
        'gr_parking_space_id'
    ];

    public function grParkingSpace()
    {
        return $this->belongsTo(GrParkingSpace::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
