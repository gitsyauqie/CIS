<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SfStage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

	protected $table = 'sf_stage';
	protected $primaryKey = 'sf_opstage_id';

    public function project()
    {
    	return $this->belongsTo('App\SfProject', 'sf_opstage_id');
    }

    public function requirement()
    {
    	return $this->hasMany('App\SfRequirement', 'sf_opstage_id');
    }

    public function soloffer()
    {
    	return $this->hasMany('App\SfSoloffer', 'sf_opstage_id');
    }

    public function document()
    {
    	return $this->hasMany('App\SfDocument', 'sf_opstage_id');
    }

    public function budget()
    {
    	return $this->hasMany('App\SfBudgetInfo', 'sf_opstage_id');
    }
}
