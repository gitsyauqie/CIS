<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalProvince extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'legal_province';
	protected $primaryKey = 'province_id';

    public function city()
    {
    	return $this->hasMany('App\LegalCity', 'province_id');
    }
}
