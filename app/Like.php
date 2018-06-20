<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Like extends Model
{
  protected $fillable = [
      'challenge_id', 'user_id'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
