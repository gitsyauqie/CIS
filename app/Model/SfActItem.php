<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SfActItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'sf_act_item';
	protected $primaryKey = 'sf_act_id';
    protected $fillable = ['sf_act_id', 'sf_opstage_id', 'sf_act_name', 'sf_act_type', 'sf_act_description', 'sf_act_assigned', 'sf_act_latest_status', 'sf_act_latest_update', 'sf_act_status'];

    public function stage()
    {
    	return $this->belognsTo('App\SfStage', 'sf_opstage_id');
    }

    public function history()
    {
    	return $this->hasMany('App\SfActHistory', 'act_id');
    }
}
