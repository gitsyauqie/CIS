<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SfBudgetinfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'sf_budget_info';
	protected $primaryKey = 'sf_budget_id';

    public function stage()
    {
    	return $this->belognsTo('App\SfStage', 'sf_opstage_id');
    }

    public function project()
    {
    	return $this->belognsTo('App\SfProject', 'sf_project_id');
    }
}
