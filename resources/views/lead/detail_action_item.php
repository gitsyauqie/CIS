@extends('layouts.app')

@section('menu_lead', 'active')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="content-tab" id="tabs-4">
   				    	<H5 class="text-danger"><strong>Action Item</strong></H5>
			    			<div class="row">
			    				<div class="col-md-12">
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
	                                      	<th scope="col"></th>
	                                    </tr>
                                  	</thead>
                                  	<tbody>
                                  		@foreach ($row as $data)
	                                    <tr>
	                                      	<td scope="row">1</td>
	                                      	<td>Negotiation</td>
	                                      	<td>Product Baru</td>
	                                      	<td></td>
	                                      	<td>Kebutuhan Product Baru</td>
	                                      	<td>ROLE: PRODUCT_TEAM</td>
	                                      	<td>In Development</td>
	                                      	<td>2017-12-03</td>
	                                      	<td>Open</td>
	                                      	<th scope="col"><a href="#">History</a></th>
	                                    </tr>
	                                    @endforeach
                                  	</tbody>
                                </table>
			    				</div>
			    			</div>
			    			<div class="row mt-5">
			    				<div class="col-md-12">
			    					<H5 class="text-danger"><strong>DOCUMENT ATTACHEMENT</strong></H5>
			    					<hr>
			    					<div class="row mb-4">
				    					<div class="col-4 col-md-2">Title <span class="float-right">:</span></div>
				    					<div class="col-8 col-md-10">Kebutuhan Product Baru</div>
				    					<div class="col-4 col-md-2">Description <span class="float-right">:</span></div>
				    					<div class="col-8 col-md-10">Development Product A</div>
			    					</div>
				    				<a href="#" class="float-right text-dark mb-3"><i class="fa fa-plus-circle text-dark"></i> New</a>
			    					<table class="table table-striped ">
                                  	<thead>
                                        <tr>
                                          	<th scope="col">No</th>
                                          	<th scope="col">Role</th>
                                          	<th scope="col">Username</th>
                                          	<th scope="col">Feedback</th>
                                          	<th scope="col">Document</th>
                                        </tr>
                                  	</thead>
                                  	<tbody>
                                        <tr>
                                          	<td scope="row">1</td>
                                          	<td>ROLE: PRODUCT_TEAM</td>
                                          	<td>Fajri</td>
                                          	<td>Eskalasi</td>
                                          	<td><a href="#">View</a></td>
                                        </tr>
                                  	</tbody>
                                </table>
			    				</div>
			    			</div>
			    		</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection