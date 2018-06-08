<?php

namespace App;

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

    public function stage()
    {
    	return $this->belognsTo('App\SfStage', 'sf_opstage_id');
    }

    public function history()
    {
    	return $this->hasMany('App\SfActHistory', 'act_id');
    }
}
