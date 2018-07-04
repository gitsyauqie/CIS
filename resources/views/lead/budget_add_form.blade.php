@extends('layouts.app')

@section('menu_lead', 'active')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                    	<H5 class="text-danger"><strong>ADD/EDIT BUDGET INFO</strong></H5>
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
			   			<form method="post" action="{{ url('store-budget-info') }}">
			   				<div class="row">
				   				<div class="col-md-6">
				   					<div class="form-group row" hidden>
	   				    			    <label for="sf_project_id" class="col-sm-3 col-form-label">Sf Project ID</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_project_id" id="sf_project_id" value="{{ $sf_project_id }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row" hidden>
	   				    			    <label for="sf_opstage_id" class="col-sm-3 col-form-label">Sf Opstage ID</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_opstage_id" id="sf_opstage_id" value="{{ $sf_opstage_id }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row" hidden>
	   				    			    <label for="sf_budget_id" class="col-sm-3 col-form-label">Budget ID</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_budget_id" id="sf_budget_id" placeholder="Serial ID...">
	   				    			    </div>
   				    			  	</div>
				   					<div class="form-group row">
	   				    			    <label for="input21" class="col-sm-12 col-form-label">Budget Info :</label>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_budget_allocation" class="col-sm-3 col-form-label pl-md-5">Budget Allocation</label>
	   				    			    <div class="col-sm-9">
	   				    			      	<input type="text" class="form-control" name="sf_budget_allocation" id="sf_budget_allocation" value="" placeholder="986.700.000">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_budget_service_start" class="col-sm-3 col-form-label pl-md-5">Service Start</label>
	   				    			    <div class="col-sm-9">
	   				    			      	<div class="input-group">
	   				    			    	  	<input type="date" class="form-control" name="sf_budget_service_start" id="sf_budget_service_start" placeholder="Date" aria-label="Date" aria-describedby="basic-addon1">
	   				    			    	  	<div class="input-group-append">
	   				    			    	    	<span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
	   				    			    	  	</div>
	   				    			    	</div>
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_budget_service_termination" class="col-sm-3 col-form-label pl-md-5">Serv. Termination</label>
	   				    			    <div class="col-sm-9">
	   				    			      	<div class="input-group">
	   				    			    	  	<input type="date" class="form-control" name="sf_budget_service_termination" id="sf_budget_service_termination" placeholder="Date" aria-label="Date" aria-describedby="basic-addon1">
	   				    			    	  	<div class="input-group-append">
	   				    			    	    	<span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
	   				    			    	  	</div>
	   				    			    	</div>
	   				    			    </div>
   				    			  	</div>
   				    			  	<!-- <div class="form-group row">
	   				    			    <label for="input24" class="col-sm-3 col-form-label pl-md-5">Service Duration</label>
	   				    			    <div class="col-sm-9">
	   				    			      	<input type="number" class="form-control" name="input24" id="input24" value="3" placeholder="0">
	   				    			    </div>
   				    			  	</div> -->
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_budget_quantity" class="col-sm-3 col-form-label pl-md-5">Quantity</label>
	   				    			    <div class="col-sm-9">
	   				    			      	<input type="number" class="form-control" name="sf_budget_quantity" id="sf_budget_quantity" value="" placeholder="345">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_budget_monthly_charge" class="col-sm-3 col-form-label pl-md-5">Monthly Charge</label>
	   				    			    <div class="col-sm-9">
	   				    			      	<input type="number" class="form-control" name="sf_budget_monthly_charge" id="sf_budget_monthly_charge" value="" placeholder="345">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_budget_estimation" class="col-sm-3 col-form-label pl-md-5">Estimation</label>
	   				    			    <div class="col-sm-9">
	   				    			      	<input type="text" class="form-control" name="sf_budget_estimation" id="sf_budget_estimation" value="" placeholder="123.123.434.000">
	   				    			    </div>
   				    			  	</div>
				   				</div>
				   				<div class="col-md-6">
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_payment_type" class="col-sm-3 col-form-label">Payment Type</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_payment_type" id="sf_payment_type" value="" placeholder="Payment type...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_bank_account" class="col-sm-3 col-form-label">Bank Account</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_bank_account" id="sf_bank_account" value="" placeholder="Bank Account...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_project_system_integrator" class="col-sm-3 col-form-label">Project System Integrator</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_project_system_integrator" id="sf_project_system_integrator" value="" placeholder="Project System Integrator...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_end_service_treatment" class="col-sm-3 col-form-label">End Service Treatment</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_end_service_treatment" id="sf_end_service_treatment" value="" placeholder="End Service Treatment...">
	   				    			    	<small id="passwordHelpBlock" class="form-text text-muted">
	   				    			    		Treatment to Subscription after '2018-02-28'.
	   				    			    	</small>
	   				    			    </div>
   				    			  	</div>
				   				</div>
				   				<div class="col-md-12">
				   					<hr>
				   					<div class="float-right">
							      		<button type="button" class="btn btn-danger btn-sm" onclick="window.history.back();">Cancel</button></a>
							      		<button type="submit" class="btn btn-success btn-sm">Save</button>
							      		<button type="submit" class="btn btn-secondary btn-sm">Save & View</button>
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