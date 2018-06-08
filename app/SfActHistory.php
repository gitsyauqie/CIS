<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SfActHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'sf_act_history';
	protected $primaryKey = 'sf_acthis_id';

    public function actitem()
    {
    	return $this->belognsTo('App\SfActItem', 'act_id');
    }
}
