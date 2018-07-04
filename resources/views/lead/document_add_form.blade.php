@extends('layouts.app')

@section('menu_lead', 'active')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                    	<H5 class="text-danger"><strong>ADD DOCUMENTS</strong></H5>
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
			   			<form method="post" action="{{ url('store-document') }}">
			   				<div class="row">
				   				<div class="col-md-6">
   				    			  	<div class="form-group row" hidden>
	   				    			    <label for="sf_opstage_id" class="col-sm-3 col-form-label">Opstage id</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_opstage_id" id="sf_opstage_id" value="{{ $sf_opstage_id }}" placeholder="  ">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_doc_name" class="col-sm-3 col-form-label">Document name</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_doc_name" id="sf_doc_name" value="" placeholder="Document name...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_doc_upload_by" class="col-sm-3 col-form-label">Upload By</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_doc_upload_by" id="sf_doc_upload_by" value="" placeholder="Enter name...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_doc_upload_date" class="col-sm-3 col-form-label">Upload Date</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="date" class="form-control" name="sf_doc_upload_date" id="sf_doc_upload_date" value="" placeholder="Enter name...">
	   				    			    </div>
	   				    			    <div class="col-sm-3" hidden>
	   				    			    	 <input type="text" class="form-control" name="time" id="time" value="{{ date('h:i:s') }}" placeholder="Enter name...">
	   				    			    </div>
   				    			  	</div>
							    </div>
				   				<div class="col-md-6">
   				    			  	<div class="form-group row">
	   				    			    <div class="col-sm-12">
	   				    			    	 <input type="file" class="form-control-file" id="sf_doc_attachment" name="sf_doc_attachment">
	   				    			    </div>
   				    			  	</div>
							    </div>
				   				<div class="col-md-12">
   				    			  	<hr>
				   					<div class="float-right">
							      		<a href="{{ url('kanban') }}"><button type="button" class="btn btn-danger btn-sm">Back</button></a>
							      		<!-- <button type="submit" class="btn btn-success btn-sm">Save</button> -->
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