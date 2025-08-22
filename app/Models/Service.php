<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $table ="services";
    // protected $with = ['section'];

    public function submenu(){
       return  $this->belongsTo(Submenu::class, 'id');
    }

    public function section(){
        return $this->hasMany(Section::class, 'service_id', 'id');
    }

}
