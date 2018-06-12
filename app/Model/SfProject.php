<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SfProject extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

	protected $table = 'sf_project';
	protected $primaryKey = 'sf_project_id';
    protected $fillable = ['mpp_code','sf_name','office_id','lc_id'];

    public function company()
    {
    	return $this->belongsTo('App\LegalCompany', 'lc_id');
    }

    public function office()
    {
    	return $this->belongsTo('App\LegalOffice', 'office_id');
    }

    public function stage()
    {
    	return $this->hasMany('App\SfStage', 'sf_project_id');
    }

    public function soloffer()
    {
    	return $this->hasMany('App\SfSoloffer', 'sf_project_id');
    }

    public function requirement()
    {
    	return $this->hasOne('App\SfRequirement', 'sf_project_id');
    }

    public function budget()
    {
    	return $this->hasOne('App\SfBudgetInfo', 'sf_project_id');
    }
}
