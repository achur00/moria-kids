<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Submenu extends Model
{
    use HasFactory;

    protected $table = 'submenus';
    protected $fillable = ['name', 'url', 'order', 'menu_id'];
    protected $with=['services'];

    // Automatically load the "menu" relationship
    // protected $with = ['Menu','Sections'];

    // public function menu() //  Ensure method name is lowercase
    // {
    //     return $this->belongsTo(Menu::class, 'menu_id', 'id');
    // }

    public function services()
    {
        return $this->hasMany(Service::class, 'submenu_id', 'id');
    }

     public function menu()
    {
        return $this->belongsTo(Menu::class,  'id');
    }
}
   


