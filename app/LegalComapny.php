<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalComapny extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

	protected $table = 'legal_company';
	protected $primaryKey = 'lc_id';

    public function office()
    {
    	return $this->hasMany('App\LegalOffice', 'lc_id');
    }

    public function project()
    {
    	return $this->hasMany('App\SfProject', 'lc_id');
    }
}
