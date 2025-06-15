<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $table ="services";

    public function submenu(){
        $this->belongsTo(Submenu::class, 'id');
    }

}
