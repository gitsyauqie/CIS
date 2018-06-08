@extends('layouts.app')

@section('menu_salesplan', 'active')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 pt-2">
                            <div class="d-inline" style="margin-left: 25%; ">
                                <span class="text-success">Win</span>
                                <strong>Rp 2.500m</strong>
                            </div>
                            <div class="d-inline" style="margin-left: 20%; ">
                                <span class="text-info">Total Opportunity</span>
                                <strong>Rp 5.500m</strong>
                            </div>
                            <div class="d-inline float-right">
                                <span>Total Target</span>
                                <strong>Rp 25.500m</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-12 pt-2">
                            <div class="d-inline" style="margin-left: 35%; ">
                                <span class="text-success">Revenue BBS</span>
                                <strong>Rp 3.500m</strong>
                            </div>
                            <div class="d-inline float-right">
                                <span>Total Target</span>
                                <strong>Rp 25.500m</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-md-3 pl-3">
        <div class="col-md-2 col-sm-12 border-right border-sm-bottom pt-sm-2 pb-sm-2">
            <form>
                <div class="custom-control custom-radio">
                    <input type="radio" id="show-all" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="show-all">Show All</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="open" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="open">Open</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="drop" name="customRadio" class="custom-control-input" checked>
                    <label class="custom-control-label" for="drop">Drop</label>
                </div>
            </form>
        </div>
        <div class="col-md-3 col-sm-12 border-right border-sm-bottom pt-sm-2 pb-sm-2">
            <form>
                <div class="custom-control custom-radio">
                    <input type="radio" id="auto-sort" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="auto-sort">Auto Sort</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="custom-sort" name="customRadio" class="custom-control-input" checked>
                    <label class="custom-control-label" for="custom-sort">Custom Sort</label>
                </div>
                <div class="custom-control custom-checkbox ml-4">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">by Account</label>
                </div>
                <div class="custom-control custom-checkbox ml-4">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">by Account Manager</label>
                </div>
                <div class="custom-control custom-checkbox ml-4">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                    <label class="custom-control-label" for="customCheck1">by Project</label>
                </div>
            </form>
        </div>
        <div class="col-md-5 col-sm-12 border-right border-sm-bottom pt-sm-2 pb-sm-2">
            <form>
                <div class="row">
                    <div class="col">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                            <label class="custom-control-label" for="customCheck1">Filter Lead</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-sm-4">
                        <div class="custom-control custom-checkbox ml-4 mt-1">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                            <label class="custom-control-label" for="customCheck1">Filter Lead</label>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" placeholder="First name">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-sm-4">
                        <div class="custom-control custom-checkbox ml-4 mt-1">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                            <label class="custom-control-label" for="customCheck1">Filter Lead</label>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" placeholder="First name">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-sm-4">
                        <div class="custom-control custom-checkbox ml-4 mt-1">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                            <label class="custom-control-label" for="customCheck1">Filter Lead</label>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control form-control-sm" placeholder="First name">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2 col-sm-12 pt-sm-2 pb-sm-2 pl-sm-0">
            <button type="button" class="btn btn-secondary btn-sm float-right btn-float mt-2">Calendar</button>
        </div>
    </div>
    

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
                            <div class="card mt-1">
                                <div class="card-body pt-1 pl-1 pr-1 pb-1 ">
                                    <p>Bank Central Asia Tbk</p>
                                    <div class="card mb-1">
                                        <div class="card-body pt-1 pl-1 pr-1 pb-1 bg-light">
                                            <div>
                                                <span><strong>EDC BCA Project</strong></span> 
                                                <a href="#" class="float-right text-dark title-pop" data-container="body" data-toggle="popover" data-placement="bottom"><i class="fa fa-ellipsis-v"></i></a>
                                            </div>
                                            <div> 
                                                <span>Rp 500m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-1">
                                <div class="card-body pt-1 pl-1 pr-1 pb-1 ">
                                    <p>Bank Central Asia Tbk</p>
                                    <div class="card mb-1">
                                        <div class="card-body pt-1 pl-1 pr-1 pb-1 bg-light">
                                            <div>
                                                <span><strong>EDC BCA Project</strong></span> 
                                                <a href="#" class="float-right text-dark title-pop" data-container="body" data-toggle="popover" data-placement="bottom"><i class="fa fa-ellipsis-v"></i></a>
                                            </div>
                                            <div> 
                                                <span>Rp 500m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <div class="card mt-1">
                                <div class="card-body pt-1 pl-1 pr-1 pb-1 ">
                                    <p>Bank Central Asia Tbk</p>
                                    <div class="card mb-1">
                                        <div class="card-body pt-1 pl-1 pr-1 pb-1 bg-light">
                                            <div>
                                                <span><strong>EDC BCA Project</strong></span> 
                                                <a href="#" class="float-right text-dark title-pop" data-container="body" data-toggle="popover" data-placement="bottom"><i class="fa fa-ellipsis-v"></i></a>
                                            </div>
                                            <div> 
                                                <span>Rp 500m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-1">
                                <div class="card-body pt-1 pl-1 pr-1 pb-1 ">
                                    <p>Bank Central Asia Tbk</p>
                                    <div class="card mb-1">
                                        <div class="card-body pt-1 pl-1 pr-1 pb-1 bg-light">
                                            <div>
                                                <span><strong>EDC BCA Project</strong></span> 
                                                <a href="#" class="float-right text-dark title-pop" data-container="body" data-toggle="popover" data-placement="bottom"><i class="fa fa-ellipsis-v"></i></a>
                                            </div>
                                            <div> 
                                                <span>Rp 500m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-1">
                                <div class="card-body pt-1 pl-1 pr-1 pb-1 ">
                                    <p>Bank Central Asia Tbk</p>
                                    <div class="card mb-1">
                                        <div class="card-body pt-1 pl-1 pr-1 pb-1 bg-light">
                                            <div>
                                                <span><strong>EDC BCA Project</strong></span> 
                                                <a href="#" class="float-right text-dark title-pop" data-container="body" data-toggle="popover" data-placement="bottom"><i class="fa fa-ellipsis-v"></i></a>
                                            </div>
                                            <div> 
                                                <span>Rp 500m</span>
                                            </div>
                                        </div>
                                    </div>
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
                            <div class="card mt-1">
                                <div class="card-body pt-1 pl-1 pr-1 pb-1 ">
                                    <p>Bank Central Asia Tbk</p>
                                    <div class="card mb-1">
                                        <div class="card-body pt-1 pl-1 pr-1 pb-1 bg-light">
                                            <div>
                                                <span><strong>EDC BCA Project</strong></span> 
                                                <a href="#" class="float-right text-dark title-pop" data-container="body" data-toggle="popover" data-placement="bottom"><i class="fa fa-ellipsis-v"></i></a>
                                            </div>
                                            <div> 
                                                <span>Rp 500m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-1">
                                <div class="card-body pt-1 pl-1 pr-1 pb-1 ">
                                    <p>Bank Central Asia Tbk</p>
                                    <div class="card mb-1">
                                        <div class="card-body pt-1 pl-1 pr-1 pb-1 bg-light">
                                            <div>
                                                <span><strong>EDC BCA Project</strong></span> 
                                                <a href="#" class="float-right text-dark title-pop" data-container="body" data-toggle="popover" data-placement="bottom"><i class="fa fa-ellipsis-v"></i></a>
                                            </div>
                                            <div> 
                                                <span>Rp 500m</span>
                                            </div>
                                        </div>
                                    </div>
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
                            <div class="card mt-1">
                                <div class="card-body pt-1 pl-1 pr-1 pb-1 ">
                                    <p>Bank Central Asia Tbk</p>
                                    <div class="card mb-1">
                                        <div class="card-body pt-1 pl-1 pr-1 pb-1 bg-light">
                                            <div>
                                                <span><strong>EDC BCA Project</strong></span> 
                                                <a href="#" class="float-right text-dark title-pop" data-container="body" data-toggle="popover" data-placement="bottom"><i class="fa fa-ellipsis-v"></i></a>
                                            </div>
                                            <div> 
                                                <span>Rp 500m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-1">
                                <div class="card-body pt-1 pl-1 pr-1 pb-1 ">
                                    <p>Bank Central Asia Tbk</p>
                                    <div class="card mb-1">
                                        <div class="card-body pt-1 pl-1 pr-1 pb-1 bg-light">
                                            <div>
                                                <span><strong>EDC BCA Project</strong></span> 
                                                <a href="#" class="float-right text-dark title-pop" data-container="body" data-toggle="popover" data-placement="bottom"><i class="fa fa-ellipsis-v"></i></a>
                                            </div>
                                            <div> 
                                                <span>Rp 500m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-1">
                                <div class="card-body pt-1 pl-1 pr-1 pb-1 ">
                                    <p>Bank Central Asia Tbk</p>
                                    <div class="card mb-1">
                                        <div class="card-body pt-1 pl-1 pr-1 pb-1 bg-light">
                                            <div>
                                                <span><strong>EDC BCA Project</strong></span> 
                                                <a href="#" class="float-right text-dark title-pop" data-container="body" data-toggle="popover" data-placement="bottom"><i class="fa fa-ellipsis-v"></i></a>
                                            </div>
                                            <div> 
                                                <span>Rp 500m</span>
                                            </div>
                                        </div>
                                    </div>
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
                            <div class="card mt-1">
                                <div class="card-body pt-1 pl-1 pr-1 pb-1 ">
                                    <p>Bank Central Asia Tbk</p>
                                    <div class="card mb-1">
                                        <div class="card-body pt-1 pl-1 pr-1 pb-1 bg-light">
                                            <div>
                                                <span><strong>EDC BCA Project</strong></span> 
                                                <a href="#" class="float-right text-dark title-pop" data-container="body" data-toggle="popover" data-placement="bottom"><i class="fa fa-ellipsis-v"></i></a>
                                            </div>
                                            <div> 
                                                <span>Rp 500m</span>
                                            </div>
                                        </div>
                                    </div>
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
                    <div class="card mt-1">
                        <div class="card-body pt-1 pl-1 pr-1 pb-1 ">
                            <p>Bank Central Asia Tbk</p>
                            <div class="card mb-1">
                                <div class="card-body pt-1 pl-1 pr-1 pb-1 bg-light">
                                    <div>
                                        <span><strong>EDC BCA Project</strong></span> 
                                        <a href="#" class="float-right text-dark title-pop" data-container="body" data-toggle="popover" data-placement="bottom"><i class="fa fa-ellipsis-v"></i></a>
                                    </div>
                                    <div class="mt-1"> 
                                        <span>Rp 500m</span>
                                        <div class="float-right">
                                            <div class="circle-success">win</div>
                                            <span>76%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <div class="card-body pt-1 pl-1 pr-1 pb-1 ">
                            <p>Bank Central Asia Tbk</p>
                            <div class="card mb-1">
                                <div class="card-body pt-1 pl-1 pr-1 pb-1 bg-light">
                                    <div>
                                        <span><strong>EDC BCA Project</strong></span> 
                                        <a href="#" class="float-right text-dark title-pop" data-container="body" data-toggle="popover" data-placement="bottom"><i class="fa fa-ellipsis-v"></i></a>
                                    </div>
                                    <div class="mt-1"> 
                                        <span>Rp 500m</span>
                                        <div class="float-right">
                                            <div class="circle-danger">Lost</div>
                                            <span>76%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
