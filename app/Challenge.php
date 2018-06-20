<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use App\Type;

class Challenge extends Model
{
  use HasSlug;

  protected $fillable = [
      'id_type', 'id_user', 'slug', 'title', 'desc', 'difficulty', 'photo', 'views'
  ];

  /**
   * Get the options for generating the slug.
   */
  public function getSlugOptions() : SlugOptions
  {
      return SlugOptions::create()
          ->generateSlugsFrom('title')
          ->saveSlugsTo('slug');
  }

  public function type()
  {
    return $this->belongsTo(Type::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
