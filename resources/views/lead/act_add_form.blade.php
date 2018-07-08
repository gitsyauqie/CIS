@extends('layouts.app')

@section('menu_lead', 'active')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-5">
                    <div class="col-md-12">
                    	<H5 class="text-danger"><strong>ADD ACT ITEM</strong></H5>
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
			   			<form method="post" action="{{ url('store-action-item') }}">
			   				<div class="row">
				   				<div class="col-md-6">
				   					<div class="form-group row" hidden>
	   				    			    <label for="sf_opstage_id" class="col-sm-3 col-form-label">Opstage id</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_opstage_id" id="sf_opstage_id" value="{{ $sf_opstage_id }}" placeholder="">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_act_name" class="col-sm-3 col-form-label">Act Name</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_act_name" id="sf_act_name" placeholder="Act Name...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_act_type" class="col-sm-3 col-form-label">Act type</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_act_type" id="sf_act_type" placeholder="Act type...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_act_description" class="col-sm-3 col-form-label">Act Description</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <textarea class="form-control" id="sf_act_description" name="sf_act_description" rows="4" placeholder="Description here..."></textarea>
	   				    			    </div>
   				    			  	</div>
							    </div>
				   				<div class="col-md-6">
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_act_assigned" class="col-sm-3 col-form-label">Act Assigned</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_act_assigned" id="sf_act_assigned" placeholder="Act Assigned...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_act_latest_status" class="col-sm-3 col-form-label">Lates Status</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_act_latest_status" id="sf_act_latest_status" placeholder="Lates Status...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_act_latest_update" class="col-sm-3 col-form-label">Lates Update</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="date" class="form-control" name="sf_act_latest_update" id="sf_act_latest_update" placeholder="Lates Update...">
	   				    			    </div>
	   				    			    <div class="col-sm-9" hidden>
	   				    			    	 <input type="text" class="form-control" name="time" id="time" value="{{ date('h:i:s') }}" placeholder="Lates Update...">
	   				    			    </div>
   				    			  	</div>
   				    			  	<div class="form-group row">
	   				    			    <label for="sf_act_status" class="col-sm-3 col-form-label">Act Status</label>
	   				    			    <div class="col-sm-9">
	   				    			    	 <input type="text" class="form-control" name="sf_act_status" id="sf_act_status" placeholder="Act Status...">
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
                <div class="row">
                	<div class="col-md-12">
                		<H5 class="text-danger"><strong>ACTION ITEMS</strong></H5>
                		<table class="table table-striped ">
                 			<thead>
                                <tr>
                                  	<th scope="col">No</th>
                                  	<th scope="col">Stage</th>
                                  	<th scope="col">Action</th>
                                  	<th scope="col">Action Type</th>
                                  	<th scope="col">Description</th>
                                  	<th scope="col">Assigned to</th>
                                  	<th scope="col">Latest Status</th>
                                  	<th scope="col">Latest Update</th>
                                  	<th scope="col">Status</th>
                                </tr>
                          	</thead>
                          	<tbody>
                          		@foreach($sf_act_item as $key => $value)
                                <tr>
                                  	<td scope="row">{{ $key + 1 }}</td>
                                  	<td>
                                  		@if($value->sf_opstage_ref_id == 3) 
                                  			Solution Delivery
                                  		@elseif ($value->sf_opstage_ref_id == 4)
                                  			Negotiation
                                  		@else 
                                  			Don Stage
                                  		@endif
                                  	</td>
                                  	<td>{{ $value->sf_act_name }}</td>
                                  	<td>{{ $value->sf_act_type }}</td>
                                  	<td>{{ $value->sf_act_description }}</td>
                                  	<td>{{ $value->sf_act_latest_status }}</td>
                                  	<td>{{ $value->sf_act_latest_update }}</td>
                                  	<td>{{ $value->sf_act_status }}</td>
                                  	<th scope="col"><a href="#">History</a></th>
                                </tr>
                                @endforeach
                          	</tbody>
                        </table>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection