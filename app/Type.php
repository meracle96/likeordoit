<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Challenge;

class Type extends Model
{
    public function challenges()
    {
      return $this->hasMany(Challenge::class);
    }
}
