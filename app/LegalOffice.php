<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalOffice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

	protected $table = 'legal_office';
	protected $primaryKey = 'office_id';

    public function zone()
    {
    	return $this->belognsTo('App\LegalZone', 'zone_id');
    }

    public function company()
    {
    	return $this->belognsTo('App\LegalCompany', 'lc_id');
    }

    public function province()
    {
    	return $this->belognsTo('App\LegalProvince', 'province_id');
    }
}
