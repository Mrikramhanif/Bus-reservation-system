<?php

namespace App\Models;


class Bus extends Model
{

    public function schedule()
      {
        return $this->hasMany(Schedule::class);
      }
      
}
