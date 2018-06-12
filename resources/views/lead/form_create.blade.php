@extends('layouts.app')

@section('menu_lead', 'active')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                	<div class="row">
                        <div class="col-md-12">
                        	<form action="{{ URL::to('/save-lead') }}" class="form-horizontal" method="post">
                            	{{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-xs-3 col-form-label">Project Name</label>
                                    <div class="col-xs-9">
                                        <input class="form-control" type="text" name="sf_name" placeholder="Project Name">    
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-xs-3 col-form-label">Company Name</label>
                                    <div class="col-xs-9">
                                        <select name="lc_id" class="select2">
                                            @foreach ($lc_name as $key => $row)
                                                <option value="{{ $key }}">{{ $row }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-xs-3 col-form-label">Office Name</label>
                                    <div class="col-xs-9">
                                        <select name="office_id" class="select2">
                                            @foreach ($office_name as $key => $row)
                                                <option value="{{ $key }}">{{ $row }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-xs-3 col-form-label">Stage Account Name</label>
                                    <div class="col-xs-9">
                                        <input class="form-control" type="text" name="sf_account_name_temp" placeholder="Stage Account Project Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 col-form-label">Start Date</label>
                                    <div class="col-xs-9">
                                        <input class="form-control" type="text" name="sf_opstage_startdate">    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 col-form-label">End Date</label>
                                    <div class="col-xs-9">
                                        <input class="form-control" type="text" name="sf_opstage_enddate">    
                                    </div>
                                </div>
                                <input type="submit" name="Save">

                            </form>
            			</div>
        			</div>
        		</div>
        	</div>
        </div>
    </div>
</div>
   

    
@endsection

@section('script')
<script type="text/javascript">
$(".select2").select2({
    placeholder:"Silahkan Pilih",
});
</script>
@endsection
