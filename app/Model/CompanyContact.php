<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompanyContact extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

	protected $table = 'company_contacts';
	protected $primaryKey = 'c_contact_id';
}
