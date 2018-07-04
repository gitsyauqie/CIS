@extends('layouts.app')

@section('menu_lead', 'active')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                    	<H5 class="text-danger"><strong>EDIT SOLOFFERS</strong></H5>
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
			   			<form method="post" action="{{ url('update-requirement') }}">
			   				<div class="row">
				   				<div class="col-md-12">
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_req_id" class="col-sm-3 col-form-label">Requirement ID</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_req_id" id="sf_req_id" value="{{ $row->sf_req_id }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_req_desc" class="col-sm-3 col-form-label">Requirement Description</label>
	   				    			    <div class="col-sm-9">
	   				    			    	<textarea class="form-control" id="sf_req_desc" name="sf_req_desc" rows="10">{{ $row->sf_req_desc }}</textarea>
	   				    			    </div>
   				    			  	</div>
							    </div>
				   				<div class="col-md-12">
   				    			  	<hr>
				   					<div class="float-right">
							      		<a href="{{ url('kanban') }}"><button type="button" class="btn btn-danger btn-sm">Back</button></a>
							      		<!-- <button type="submit" class="btn btn-success btn-sm">Save</button> -->
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