@extends('layouts.app')

@section('menu_lead', 'active')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                    	<H5 class="text-danger"><strong>ADD/EDIT SOLOFFERS</strong></H5>
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
			   			<form method="post" action="{{ url('store-soloffer') }}">
			   				<div class="row">
				   				<div class="col-md-6">
   				    			  	<div class="form-group row" hidden>
	   				    			    <label for="sf_project_id" class="col-sm-3 col-form-label">Sf Project ID</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_project_id" id="sf_project_id" value="{{ $sf_project_id }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row" hidden>
	   				    			    <label for="sf_opstage_id" class="col-sm-3 col-form-label">Sf Project ID</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_opstage_id" id="sf_opstage_id" value="{{ $sf_opstage_id }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_soloff_serialid" class="col-sm-3 col-form-label">Serial ID</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_soloff_serialid" id="sf_soloff_serialid" placeholder="Serial ID...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_soloff_type" class="col-sm-3 col-form-label">Type</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_soloff_type" id="sf_soloff_type" placeholder="type...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_soloff_name" class="col-sm-3 col-form-label">Name</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_soloff_name" id="sf_soloff_name" placeholder="Name...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_soloff_unit_price" class="col-sm-3 col-form-label">Unit Price</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_soloff_unit_price" id="sf_soloff_unit_price" placeholder="Unit Price...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_soloff_qty" class="col-sm-3 col-form-label">QTY</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_soloff_qty" id="sf_soloff_qty" placeholder="QTY...">
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