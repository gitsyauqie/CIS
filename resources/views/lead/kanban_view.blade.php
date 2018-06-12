@extends('layouts.app')

@section('menu_lead', 'active')

@section('content')
<a href="{{ url('lead') }}"> List Project </a>|| 
Versi Kanban<br>
<a href="{{ url('add-new-lead') }}"> Add new lead</a>

<div class="row">
	<div class="col-md-2 pr-md-0 mt-sm-2">
		<div class="card">
	  	<div class="card-body pt-2 pl-2 pr-2 pb-2">
	  		<div class="row">
	  			<div class="col-md-12">
	  				<h6>
   						<strong>Lead</strong>
							<a href="#" class="float-right lead-pop" data-container="body" data-toggle="popover" data-placement="bottom">
				  			<div class="icon-title-1"></div>
				  			<div class="icon-title-2"></div>
				  			<div class="icon-title-3"></div>
							</a>
   					</h6>
	  			</div>
		  		<div class="col-md-12" id="sortable1">
  			  		<div class="card mt-3">
  					  	<div class="card-body bg-secondary pt-2 pl-1 pr-1 pb-2">
  					  		<strong class="text-white">Rp 2500m</strong> 
  					  		<span class="text-light float-right">3 Deals</span>
  					  	</div>
  					</div>
  					@foreach ($grouped as $name => $projects)
  					<div class="card mt-1">
  					  	<div class="card-body pt-1 pl-1 pr-1 pb-1 ">
  					  		<p>{{ $name }}</p>
  					  		@foreach ($projects as $project)
  					  		<div class="card mb-1">
  					  			<div class="card-body pt-1 pl-1 pr-1 pb-1 bg-light">
  					  				<div>
  					  					<span><strong>{{ $project->sf_name }}</strong></span> 
  					  					<a href="#" class="float-right text-dark title-pop" data-container="body" data-toggle="popover" data-placement="bottom"><i class="fa fa-ellipsis-v"></i></a>
  					  				</div>
  					  				<div> 
  					  					<span>Rp 500m</span>
  					  				</div>
  			  					</div>
  			  				</div>
  			  				@endforeach
  			  			</div>
  			  		</div>
  					@endforeach
  					
		  		</div>
	  		</div>
	  	</div>
	</div>
	</div>
	
	<div class="col-md-8 pl-md-1 pr-md-1 mt-sm-2">
		<div class="card">
	  	<div class="card-body pt-md-2 pl-md-2 pr-md-2 pb-md-2 pl-sm-2">
	  		<div class="row">
	  			<div class="col-md-12">
	  				<h6>
   						<strong>Opportunity</strong>
							<a href="#" class="float-right lead-pop" data-container="body" data-toggle="popover" data-placement="bottom">
								<div class="icon-title-1"></div>
								<div class="icon-title-2"></div>
								<div class="icon-title-3"></div>
							</a>
   					</h6>
	  			</div>
	  			<div class="col-md-3 pr-sm-1" id="sortable2">
	  				<p class="text-title">Business Requirement</p>
	  				<div class="card">
					  	<div class="card-body pt-2 pl-1 pr-1 pb-2 bg-secondary">
					  		<strong class="text-white">Rp 2500m</strong> 
					  		<span class="text-light float-right">3 Deals</span>
					  	</div>
					</div>
	  			</div>
	  			<div class="col-md-3 pr-sm-1 pl-md-1 pr-md-2" id="sortable3">
	  				<p class="text-title">Business Requirement</p>
	  				<div class="card">
					  	<div class="card-body pt-2 pl-1 pr-1 pb-2 bg-secondary">
					  		<strong class="text-white">Rp 2500m</strong> 
					  		<span class="text-light float-right">3 Deals</span>
					  	</div>
					</div>
	  			</div>
	  			<div class="col-md-3 pr-sm-1 pl-md-0 pr-md-2" id="sortable4">
	  				<p class="text-title">Business Requirement</p>
	  				<div class="card">
					  	<div class="card-body pt-2 pl-1 pr-1 pb-2 bg-secondary">
					  		<strong class="text-white">Rp 2500m</strong> 
					  		<span class="text-light float-right">3 Deals</span>
					  	</div>
					</div>
					
	  			</div>
	  			<div class="col-md-3 pr-sm-1 pl-md-0 pr-md-3" id="sortable5">
	  				<p class="text-title">Business Requirement</p>
	  				<div class="card">
					  	<div class="card-body pt-2 pl-1 pr-1 pb-2 bg-secondary">
					  		<strong class="text-white">Rp 2500m</strong> 
					  		<span class="text-light float-right">3 Deals</span>
					  	</div>
					</div>
					
	  			</div>
	  		</div>
			</div>
		</div>
	</div>

	<div class="col-md-2 mt-sm-2 pl-md-0">
		<div class="card">
	  	<div class="card-body pt-2 pl-2 pr-2 pb-2" id="sortable6">
				<h6>
					<strong>Deal</strong>
					<a href="#" class="float-right lead-pop" data-container="body" data-toggle="popover" data-placement="bottom">
						<div class="icon-title-1"></div>
						<div class="icon-title-2"></div>
						<div class="icon-title-3"></div>
					</a>
				</h6>
				<div class="card mt-4">
			  	<div class="card-body pt-2 pl-1 pr-1 pb-2 bg-success">
			  		<strong class="text-white">Rp 2500m</strong> 
			  		<span class="text-light float-right">3 Deals</span>
			  	</div>
			</div>
				<div class="card mt-1">
			  	<div class="card-body pt-2 pl-1 pr-1 pb-2 bg-danger">
			  		<strong class="text-white">Rp 2500m</strong> 
			  		<span class="text-light float-right">3 Deals</span>
			  	</div>
			</div>
			
			</div>
		</div>
	</div>
</div>

@endsection