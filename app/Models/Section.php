<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
   use HasFactory;
   protected $table = 'sections';
   
   public function page()
   {
       return $this->belongsTo(Page::class);
   }
   
}
