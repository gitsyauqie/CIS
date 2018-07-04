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
			   			<form>
			   				<div class="row">
				   				<div class="col-md-6">
				   					<div class="form-group row">
	   				    			    <label for="input1" class="col-sm-3 col-form-label">Sales Plane Name</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="email" class="form-control" name="input1" id="inputEmail3" value="Installment iPad Air 2 25 Unit" placeholder="Sales plane name...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input2" class="col-sm-12 col-form-label">Corporate Name</label>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <div class="col-sm-9 pl-5">
		   				    			    <div class="custom-control custom-radio">
											  	<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
											  	<label class="custom-control-label" for="customRadio1">New Attack</label>
											</div>
	   				    			   	</div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <div class="col-sm-3 pl-5">	
											<div class="custom-control custom-radio">
											  	<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
											  	<label class="custom-control-label" for="customRadio2">Exiting</label>
											</div>
	   				    			   	</div>
	   				    			    <div class="col-sm-9">
									      	<select class="form-control select2" name="input1" id="input1">
                                                <option value="0">Corporate A</option>
                                                <option value="1">Corporate B</option>
                                                <option value="2">Corporate C</option>
                                                <option value="3">Corporate D</option>
                                            </select>
	   				    			   	</div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input2" class="col-sm-3 col-form-label">Acoount Name</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="email" class="form-control" name="input2" id="input2" value="" placeholder="Acoount name...">
	   				    			    </div>
   				    			  	</div>
				   					<div class="form-group row">
	   				    			    <label for="input3" class="col-sm-3 col-form-label">Office</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="email" class="form-control" name="input3" id="input3" value="" placeholder="Office...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input6" class="col-sm-3 col-form-label">Estimation Closing Date</label>
	   				    			    <div class="col-sm-9">
	   				    			    	<div class="input-group">
	   				    			    	  	<input type="date" class="form-control" name="input6" id="input6" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
	   				    			    	  	<div class="input-group-append">
	   				    			    	    	<span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
	   				    			    	  	</div>
	   				    			    	</div>
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input30" class="col-sm-12 col-form-label">PIC</label>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input31" class="col-sm-3 col-form-label pl-md-5">Name</label>
	   				    			    <div class="col-sm-9">
	   				    			      	<input type="text" class="form-control" name="input31" id="input31" value="Aprilia Nelly" placeholder="Name...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input32" class="col-sm-3 col-form-label pl-md-5">Handphone</label>
	   				    			    <div class="col-sm-9">
	   				    			      	<input type="text" class="form-control" name="input32" id="input32" value="628190496676" placeholder="08xxx...">
	   				    			    </div>
   				    			  	</div>
				   				</div>
				   				<div class="col-md-6">
   				    			  	<div class="form-group row">
	   				    			    <label for="input7" class="col-sm-12 col-form-label">Service</label>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input8" class="col-sm-3 col-form-label pl-md-5">Type</label>
	   				    			    <div class="col-sm-9">
	   				    			      	<input type="text" class="form-control" name="input8" id="input8" value="Digital Service" placeholder="Service type...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input9" class="col-sm-3 col-form-label pl-md-5">Group</label>
	   				    			    <div class="col-sm-9">
	   				    			      	<input type="text" class="form-control" name="input9" id="input9" value="Enterprise Digital" placeholder="Group...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input10" class="col-sm-3 col-form-label pl-md-5">Sub Group</label>
	   				    			    <div class="col-sm-9">
	   				    			      	<input type="text" class="form-control" name="input10" id="input10" value="APN Corporate" placeholder="Sub Group...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input3" class="col-sm-12 col-form-label">Account Manager</label>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input4" class="col-sm-3 col-form-label pl-md-5">Initiator</label>
	   				    			    <div class="col-sm-9">
	   				    			      	<input type="text" class="form-control" name="input4" id="input4" value="Jafar Shodiq" placeholder="Initiator name...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="input5" class="col-sm-3 col-form-label pl-md-5">Finalized</label>
	   				    			    <div class="col-sm-9">
	   				    			      	<input type="text" class="form-control" name="input5" id="input5" value="Jafar Shodiq" placeholder="Finalized name...">
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