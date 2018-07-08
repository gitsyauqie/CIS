@extends('layouts.app')

@section('menu_lead', 'active')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
		            <div class="panel panel-primary">
		              <div class="panel-heading"> Act History </div>
		              <div class="panel-body" >
		                  {!! $calendar_details->calendar() !!}
		              </div>
		            </div>
                </div>
             </div>
         </div>
     </div>
 </div>
@endsection


@section('script')
<!-- Scripts -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
 
{!! $calendar_details->script() !!}
@endsection