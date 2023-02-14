<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'avatar',
        'name',
        'surname',
        'email',
        'date_of_birth',
        'sex',
        'vahical_type',
        'job',
        'job_description',
        'identity_code',
        'description',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function favorite(){
        return $this->hasMany(Favorite::class);
    }

    public function conversation(){
        return $this->hasMany(Conversation::class);
    }

    public function messages(){
        return $this->hasMany(Conversation::class);
    }

    public function verifyUser(){
        return $this->hasOne(VerifyUser::class);
    }

    public function grParkingSpace(){
        return $this->hasOne(GrParkingSpace::class);
    }

}
