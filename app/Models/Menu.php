<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $fillable = [];
    protected $guarded = [];

    public function submenu(){
        return $this->hasMany(Submenu::class, 'menu_id', 'id');
    }
}
