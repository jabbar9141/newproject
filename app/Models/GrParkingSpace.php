<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrParkingSpace extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'es_street',
        'es_zone',
        'es_description',
        'photo_path',
        'vahical_type',
        'duration',
        'disabled_access',
        'housekeeping',
        'security_personnel',
        'automatic_door',
        'gate_electric_charger',
        'security_cameras',
        'price',
        'status',
        'ciudad',
        'direccion',
        'planta',
        'n_plaza',
        'codigo_postel',
        'time_make_3d_video',
        'largo',
        'ancho',
        'altura_min',
        'user_id',
    ];


    public function favorite(){
        return $this->hasMany(Favorite::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function media()
    {
        return $this->morphMany(Media::class, 'mediaable');
    }

}
