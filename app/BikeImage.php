<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BikeImage extends Model
{


  /**
   * Get the ibike related to the image
   */
  public function images()
  {
      return $this->hasOne('App\Bike', 'bikeId', 'bikeImageId');
  }

}
