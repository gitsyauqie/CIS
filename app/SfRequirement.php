<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SfRequirement extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'sf_requirement';
	protected $primaryKey = 'sf_req_id';

    public function stage()
    {
    	return $this->belognsTo('App\SfStage', 'sf_opstage_id');
    }

    public function project()
    {
    	return $this->belognsTo('App\SfProject', 'sf_project_id');
    }
}
