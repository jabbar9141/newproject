<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCardDetail extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'card_holder_name',
        'card_number',
        'card_type',
        'expiry_date',
        'user_id',
    ];
}
