<?php

namespace App\Model;

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
    protected $fillable = ['sf_project_id','sf_opstage_id','sf_budget_service_start','sf_budget_service_termination','sf_budget_quantity','sf_budget_monthly_charge','sf_budget_estimation','sf_budget_allocation'];

    public function stage()
    {
    	return $this->belognsTo('App\SfStage', 'sf_opstage_id');
    }

    public function project()
    {
    	return $this->belognsTo('App\SfProject', 'sf_project_id');
    }
}
