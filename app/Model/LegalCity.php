<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LegalCity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'legal_city';
	protected $primaryKey = 'city_id';

    public function province()
    {
    	return $this->belognsTo('App\LegalProvince', 'province_id');
    }

    public function zone()
    {
    	return $this->hasMany('App\LegalZone', 'city_id');
    }
}
