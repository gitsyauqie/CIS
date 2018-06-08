<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SfDocument extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'sf_documents';
	protected $primaryKey = 'sf_doc_id';

    public function stage()
    {
    	return $this->belognsTo('App\SfStage', 'sf_opstage_id');
    }
}
