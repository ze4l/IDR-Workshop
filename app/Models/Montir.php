<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Montir extends Model
{
    
   use HasFactory;
   protected $guarded = ['id'];

   public function kehadiran () {
      return $this->hasMany(Kehadiran::class);
  }
   
}
