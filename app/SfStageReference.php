<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SfStageReference extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

	protected $table = 'sf_stage_reference';
	protected $primaryKey = 'sf_opstage_ref_id';

}
