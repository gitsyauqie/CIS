<?php

namespace App\Model;

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
    protected $fillable = ['sf_opstage_id', 'sf_doc_name', 'sf_doc_attachment', 'sf_doc_type', 'sf_doc_upload_by', 'sf_doc_upload_date'];

    public function stage()
    {
    	return $this->belognsTo('App\SfStage', 'sf_opstage_id');
    }
}
