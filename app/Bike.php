<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{

  public $timestamps = false;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'title', 'description', 'url', 'sort'
  ];

  /**
   * Get the images related to the bike
   */
  public function images()
  {
      return $this->hasMany('App\BikeImage', 'bikeId');
  }

}
