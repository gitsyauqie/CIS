<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SfSoloffer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'sf_soloffers';
	protected $primaryKey = 'sf_soloff_packet_id';
    protected $fillable = ['sf_project_id', 'sf_opstage_id', 'sf_soloff_serialid', 'sf_soloff_type', 'sf_soloff_name', 'sf_soloff_unit_price', 'sf_soloff_qty']

    public function stage()
    {
    	return $this->belognsTo('App\SfStage', 'sf_opstage_id');
    }

    public function project()
    {
    	return $this->belognsTo('App\SfProject', 'sf_project_id');
    }
}
