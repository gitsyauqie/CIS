<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalZone extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

	protected $table = 'legal_zone';
	protected $primaryKey = 'zone_id';

    public function city()
    {
    	return $this->belognsTo('App\LegalCity', 'city_id');
    }

    public function office()
    {
    	return $this->hasMany('App\LegalOffice', 'zone_id');
    }
}
