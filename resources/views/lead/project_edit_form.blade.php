@extends('layouts.app')

@section('menu_lead', 'active')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                    	<H5 class="text-danger"><strong>ADD/EDIT PROJECT</strong></H5>
			   			<hr>
			   			@if (session()->has('success'))
			   			<div class="alert alert-success alert-dismissible fade show" role="alert">
			   			  	{{ session()->get('success') }}
			   			  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			   			    	<span aria-hidden="true">&times;</span>
			   			  	</button>
			   			</div>
			   			@endif
			   			@if (session()->has('danger'))
			   			<div class="alert alert-danger alert-dismissible fade show" role="alert">
			   			  	{{ session()->get('danger') }}
			   			  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			   			    	<span aria-hidden="true">&times;</span>
			   			  	</button>
			   			</div>
			   			@endif
			   			<form method="post" action="{{ url('update-project') }}">
			   				<div class="row">
			   					<div class="form-group row" hidden>
	   				    			    <label for="sf_project_id" class="col-sm-3 col-form-label">Project ID</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_project_id" id="sf_project_id" value="{{ $row->sf_project_id }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
				   				<div class="col-md-6">
				   					<div class="form-group row">
	   				    			    <label for="sf_name" class="col-sm-3 col-form-label"> Name</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_name" id="sf_name" value="{{ $row->sf_name }}" placeholder="Sales plane name...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row" hidden>
   				    			  		<label for="mpp_code" class="col-sm-3 col-form-label"> MPP</label>
	   				    			    <div class="col-sm-9">
		   				    			    <div class="custom-control custom-radio">
											  	<input type="text" class="form-control" name="mpp_code" id="mpp_code" value="{{ $row->mpp_code }}" placeholder="Mpp">
											</div>
	   				    			   	</div>
   				    			  	</div>
   				    			  	
   				    			  	<div class="form-group row">
	   				    			    <label for="lc_id" class="col-sm-3 col-form-label">Legal Company</label>
	   				    			    <!-- <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="lc_id" id="lc_id" value="{{ $row->lc_id }}" placeholder="Legal Company name...">
	   				    			    </div> -->
	   				    			    <div class="col-sm-9">
                                            <select name="lc_id" class="select2 custom-select" id="Project_name_select">
                                            @foreach ($lc_names as $rows)
                                            	@if ($rows->lc_id == $row->lc_id)
                                                <option value="{{ $rows->lc_id }}" selected>{{ $rows->lc_account_id }}</option>
                                                @else
                                                <option value="{{ $rows->lc_id }}">{{ $rows->lc_account_id }}</option>
                                                @endif

                                            @endforeach
                                            </select>
                                        </div>
   				    			  	</div>
				   					<div class="form-group row">
	   				    			    <label for="sf_account_name_temp" class="col-sm-3 col-form-label">Account Name Temp</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_account_name_temp" id="sf_account_name_temp" value="{{ $row->sf_account_name_temp }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
   				    			  	
				   					<div class="form-group row">
	   				    			    <label for="office_temp" class="col-sm-3 col-form-label">Office Temp</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="office_temp" id="office_temp" value="{{ $row->office_temp }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
				   				</div>
				   				<div class="col-md-6">
   				    			  	<div class="form-group row">
	   				    			    <label for="office_temp" class="col-sm-3 col-form-label">Close Date</label>
	   				    			    <div class="col-sm-9">
	   				    			      	<div class="input-group">
	   				    			    	  	<input type="date" class="form-control" name="sf_est_close_date" id="sf_est_close_date" placeholder="Date" aria-label="Date" aria-describedby="basic-addon1" value="{{ date('Y-m-d', strtotime($row->sf_est_close_date))}}">
	   				    			    	  	<div class="input-group-append">
	   				    			    	    	<span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
	   				    			    	  	</div>
	   				    			    	</div>
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="office_temp" class="col-sm-3 col-form-label">PIC Temp Name</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_pic_name_temp" id="sf_pic_name_temp" value="{{ $row->sf_pic_name_temp }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_pic_phone_temp" class="col-sm-3 col-form-label">PIC Temp Phone</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_pic_phone_temp" id="sf_pic_phone_temp" value="{{ $row->sf_pic_phone_temp }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_service_type" class="col-sm-3 col-form-label">Service Type</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_service_type" id="sf_service_type" value="{{ $row->sf_service_type }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_service_group" class="col-sm-3 col-form-label">Service Group</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_service_group" id="sf_service_group" value="{{ $row->sf_service_group }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_service_subgroup" class="col-sm-3 col-form-label">Service Sub Group</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_service_subgroup" id="sf_service_subgroup" value="{{ $row->sf_service_subgroup }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_initiator" class="col-sm-3 col-form-label">Initiator</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_initiator" id="sf_initiator" value="{{ $row->sf_initiator }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_finalized" class="col-sm-3 col-form-label">Finalize</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_finalized" id="sf_finalized" value="{{ $row->sf_finalized }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
				   				</div>
				   				<div class="col-md-12">
				   					<hr>
				   					<div class="float-right">
							      		<button type="button" class="btn btn-danger btn-sm" onclick="window.history.back();">Cancel</button></a>
							      		<button type="submit" class="btn btn-success btn-sm">Save</button>
							      		<button type="submit" class="btn btn-secondary btn-sm">Save & View</button>
							      		<input type="hidden" name="_method" value="PUT">
				   						{{ csrf_field() }}
				   					</div>
							    </div>
			   				</div>
			   			</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection