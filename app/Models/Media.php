<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'file_path',
        'file_type',
        'mediaable_id',
        'mediaable_type',
    ];

    protected $appends = [
        'AppURL'
    ];
    public function getAppURLAttribute(){
        return config('app.url').'/'.($this->file_path) ;
    }
    public function mediaable(){
             return $this->morphTo();
    }
}
