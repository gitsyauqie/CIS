@extends('layouts.app')

@section('menu_lead', 'active')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                    	<H5 class="text-danger"><strong>ADD/EDIT ACT ITEM</strong></H5>
			   			<hr>
			   			<form>
			   				<div class="row">
				   				<div class="col-md-6">
   				    			  	<div class="form-group row">
	   				    			    <label for="input1" class="col-sm-3 col-form-label">Act Name</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="email" class="form-control" name="input1" id="input1" value="" placeholder="Act Name...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input2" class="col-sm-3 col-form-label">Act type</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="email" class="form-control" name="input2" id="input2" value="" placeholder="Act type...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="textarea1" class="col-sm-3 col-form-label">Act Description</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <textarea class="form-control" id="textarea1" rows="10" placeholder="Description here..."></textarea>
	   				    			    </div>
   				    			  	</div>
							    </div>
				   				<div class="col-md-6">
   				    			  	<div class="form-group row">
	   				    			    <label for="input3" class="col-sm-3 col-form-label">Act Assigned</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="input3" id="input3" value="" placeholder="Act Assigned...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input4" class="col-sm-3 col-form-label">Lates Status</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="input4" id="input4" value="" placeholder="Lates Status...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input5" class="col-sm-3 col-form-label">Lates Update</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="date" class="form-control" name="input5" id="input5" value="" placeholder="Lates Update...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input6" class="col-sm-3 col-form-label">Act Status</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="input6" id="input6" value="" placeholder="Act Status...">
	   				    			    </div>
   				    			  	</div>
							    </div>
				   				<div class="col-md-12">
   				    			  	<hr>
				   					<div class="float-right">
							      		<button type="button" class="btn btn-danger btn-sm" onclick="window.history.back();">Cancel</button></a>
							      		<button type="submit" class="btn btn-success btn-sm">Save</button>
							      		<button type="submit" class="btn btn-secondary btn-sm">Save & View</button>
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