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
                            <H5 class="text-danger"><strong>SALES FUNNEL</strong></H5>
                            <hr>
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="input1" class="col-sm-3 col-form-label">Sales Plane Name</label>
                                        <div class="col-sm-9">
                                             <input type="text" class="form-control" name="sf_name" id="inputEmail3" placeholder="Sales plane name...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input2" class="col-sm-12 col-form-label">Corporate Name</label>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9 pl-5">
                                            <div class="custom-control custom-checkbox mt-1">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                                              <label class="custom-control-label" for="customCheck1">New Attack</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3 pl-5">
                                            <div class="custom-control custom-checkbox mt-1">
                                              <input type="checkbox" class="custom-control-input" id="customCheck2">
                                              <label class="custom-control-label" for="customCheck2">Exiting</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <select name="lc_id" class="select2 custom-select">
                                            @foreach ($lc_name as $key => $row)
                                                <option value="{{ $key }}">{{ $row }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input3" class="col-sm-12 col-form-label">Account Manager</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input4" class="col-sm-3 col-form-label pl-md-5">Initiator</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="sf_initiator" placeholder="Initiator name...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input5" class="col-sm-3 col-form-label pl-md-5">Finalized</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="sf_finalized" Shodiq" placeholder="Finalized name...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input6" class="col-sm-3 col-form-label">Estimation Closing Date</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="sf_est_close_date" id="input6" aria-describedby="basic-addon1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-md-5">
                                    <div class="form-group row">
                                        <label for="input7" class="col-sm-12 col-form-label">Service</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input8" class="col-sm-3 col-form-label pl-md-5">Type</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="sf_service_type" id="input8" placeholder="Service type...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input9" class="col-sm-3 col-form-label pl-md-5">Group</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="sf_service_group" id="input9" placeholder="Group...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input10" class="col-sm-3 col-form-label pl-md-5">Sub Group</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="sf_service_subgroup" id="input10" placeholder="Sub Group...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input11" class="col-sm-12 col-form-label">Stage</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input12" class="col-sm-3 col-form-label pl-md-5">Name</label>
                                        <div class="col-sm-9">
                                            <select name="sf_opstage_ref_id" class="select2 custom-select">
                                            @foreach ($stage_reference as $ref_id => $ref_name)
                                                <option value="{{ $ref_id }}">{{ $ref_name }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input13" class="col-sm-3 col-form-label pl-md-5">Date</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="sf_opstage_startdate" id="input13" placeholder="Date" aria-label="Date" aria-describedby="basic-addon1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input14" class="col-sm-3 col-form-label pl-md-5">Probablity</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="input14" id="input14" value="100" placeholder="0" aria-label="Probablity" aria-describedby="basic-addon1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon1">%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input15" class="col-sm-12 col-form-label">Outcome</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="unput16" class="col-sm-3 col-form-label pl-md-5">Type</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="unput16" id="unput16" placeholder="Outcome type...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input17" class="col-sm-3 col-form-label pl-md-5">Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="input17" id="input17" placeholder="Number...">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <H5 class="text-danger mt-5"><strong>PROJECT INFORMATION</strong></H5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="input20" class="col-sm-12 col-form-label">Corporate Name</label>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9 pl-5">
                                            <div class="custom-control custom-checkbox mt-1">
                                              <input type="checkbox" class="custom-control-input" id="customCheck3">
                                              <label class="custom-control-label" for="customCheck3">New Attack</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3 pl-5">
                                            <div class="custom-control custom-checkbox mt-1">
                                              <input type="checkbox" class="custom-control-input" id="customCheck4">
                                              <label class="custom-control-label" for="customCheck4">Exiting</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <select name="lc_id" class="select2 custom-select">
                                            @foreach ($lc_name as $key => $row)
                                                <option value="{{ $key }}">{{ $row }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input21" class="col-sm-12 col-form-label">Budget</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input22" class="col-sm-3 col-form-label pl-md-5">Service Start</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="sf_budget_service_start" id="input22" placeholder="Date" aria-label="Date" aria-describedby="basic-addon1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input23" class="col-sm-3 col-form-label pl-md-5">Serv. Termination</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="sf_budget_service_termination" id="input23" placeholder="Date" aria-label="Date" aria-describedby="basic-addon1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input24" class="col-sm-3 col-form-label pl-md-5">Service Duration</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="input24" id="input24" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input25" class="col-sm-3 col-form-label pl-md-5">Quantity</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="sf_budget_quantity" id="input25" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input26" class="col-sm-3 col-form-label pl-md-5">Monthly Charge</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="sf_budget_monthly_charge" id="input26" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input27" class="col-sm-3 col-form-label pl-md-5">Estimation</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="sf_budget_estimation" id="input27" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input28" class="col-sm-3 col-form-label pl-md-5">Treat. Anomali</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="input28" id="input28" placeholder="Treatment for Anomali...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input29" class="col-sm-3 col-form-label pl-md-5">Budget Allocation</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="sf_budget_allocation" id="input29" placeholder="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="input30" class="col-sm-12 col-form-label">PIC</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input31" class="col-sm-3 col-form-label pl-md-5">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="sf_pic_name_temp" id="input31" placeholder="Name...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input32" class="col-sm-3 col-form-label pl-md-5">Handphone</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="sf_pic_phone_temp" id="input32" placeholder="08xxx...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input33" class="col-sm-12 col-form-label">Collection</label>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9 pl-4">
                                            <div class="custom-control custom-checkbox mt-1">
                                              <input type="checkbox" class="custom-control-input" id="customCheck5">
                                              <label class="custom-control-label" for="customCheck5">Personal Paid</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3 pl-4">
                                            <div class="custom-control custom-checkbox mt-1">
                                              <input type="checkbox" class="custom-control-input" id="customCheck6">
                                              <label class="custom-control-label" for="customCheck6">Corporate Paid</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3 pl-5">
                                            <div class="custom-control custom-checkbox mt-1">
                                              <input type="checkbox" class="custom-control-input" id="customCheck7">
                                              <label class="custom-control-label" for="customCheck7">TCOPS</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3 pl-5">
                                            <div class="custom-control custom-checkbox mt-1">
                                              <input type="checkbox" class="custom-control-input" id="customCheck8">
                                              <label class="custom-control-label" for="customCheck8">S. Integrator</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <select class="custom-select" name="input33" id="input33">
                                                <option>- Select Corporate Name -</option>
                                                <option value="1" selected>PT. Nestle Indonesia</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input34" class="col-sm-12 col-form-label">End Service Treatment</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input34" class="col-sm-3 col-form-label pl-md-5">Treatment</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="input34" id="input34" placeholder="Treatment tu subscription...">
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                Treatment to Subscription after '2018-02-28'.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="row mt-5 pb-5">
                                <div class="col-md-12">
                                    <div class="float-right">
                                        <button type="button" class="btn btn-danger btn-sm">Cancle</button>
                                        <button type="submit" class="btn btn-secondary btn-sm">Save & View</button>
                                        <button type="submit" class="btn btn-success btn-sm">Save</button>
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
</div>
   

    
@endsection

@section('script')
<script type="text/javascript">
$(".select2").select2({
    placeholder:"Silahkan Pilih",
});
</script>
@endsection
