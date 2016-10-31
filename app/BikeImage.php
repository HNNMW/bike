<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BikeImage extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'url', 'sort'
    ];

  /**
   * Get the ibike related to the image
   */
  public function images()
  {
      return $this->hasOne('App\Bike', 'bikeId', 'bikeImageId');
  }

}
