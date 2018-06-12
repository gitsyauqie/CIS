<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LegalCompany extends Model
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

    public static function CompanyDropdown()
    {
        $companyName = DB::table('legal_company')->pluck('lc_account_id');
        //dd($companyName)
        return $companyName;
    }
}
