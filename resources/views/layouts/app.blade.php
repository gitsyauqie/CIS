<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CIS') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.4.2/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/core.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light navbar-custom">
            <div class="container-fluid">
                
                <!-- @auth -->
                <a href="#" class="mr-5" id="btn-toggles">
                    <div class="icon-toggle-1"></div>
                    <div class="icon-toggle-2"></div>
                    <div class="icon-toggle-2"></div>
                </a>
                <!-- @endauth -->

                <a class="navbar-brand d-none d-sm-none d-md-block mr-5" href="#" style="margin-top: -10px; margin-bottom: -10px;">
                    <img src="{{ URL::to('img/telkomsel-logo.png') }}" width="170" height="50" alt="">
                </a>
                <a class="navbar-brand" href="#">CAM INFORMATION SYSTEM</a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </nav> 
        

        <div id="wrapper">

            <!-- @auth -->
            <div id="sidebar">
                <ul class="sidebar-menu">
                    <li class=" @yield('menu_salesplan') "><a href=" {{ url('/') }} ">Sales Plain Activity</a></li>
                    <li class=" @yield('menu_lead') "><a href="{{ url('lead') }}">Lead</a></li>
                    <li class=" @yield('menu_opportunity') "><a href="">Opportunity</a></li>
                    <li class=" @yield('menu_quote') "><a href="">Quote</a></li>
                </ul>
            </div>
            <!-- @endauth -->
            
            <div id="content">
            @yield('content')
            </div>

        </div>
    </div>

        
        
        <!-- List PopoverButton Popover -->
        <div class="container" id="list-pop" hidden>
            <ul class="list-popover">
                <li><a href="#"><i class="fa fa-angle-right"></i> Add Business Req</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i> Edit Business Req</a></li>
            </ul>
        </div>
        <!-- List PopoverButton Popover End-->
        
        <!-- Modal-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form id="form-submit">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancel">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal End -->

    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.4.2/sweetalert2.min.js"></script>
        <script src="{{ asset('assets/js/core.js') }}"></script>

        <script>
            
            $( function() {

                $( ".sortable").sortable({
                    connectWith: ".sortable-connected",
                    cancel: ".fixed",
                    placeholder: "portlet-placeholder ui-corner-all",
                    cursor: "move", cursorAt: { top: 56, left: 56 },
                    receive: function(event, ui){
                        target = ui.item.parent('div').prev('p').text();
                        target_stage = ui.item.parent('div').attr('stage-id');
                    },
                    stop: function(e){

                        var length = $(this).find('div.card').length;
                        var bank   = $(this).parent('div').find('p').text();
                        var content = $(this).closest('div.card');
                        var dataid =  $(this).attr('data-id');

                        if (length < 1) {
                            content.hide();
                        }

                        swal({
                            //title: 'Ada yakin akan menggeser ?',
                            text: "Ada yakin akan menggeser?" +dataid,
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes',
                            closeOnConfirm: false,
                            closeOnCancel: false
                        }).then(function() {
                            save_stage(dataid,target_stage);

                            // if (target != bank) {
                                
                            //     dialog_confirm_callback(false);

                            //     swal(
                            //       'Gagal!',
                            //       'Pilih sesuai perusahaan',
                            //       'error'
                            //     )

                            //     if (length < 1) {
                            //         content.show();
                            //     }
                            // }
                            // else {
                            //     dialog_confirm_callback(true);
                            //     swal(
                            //       'Berhasil!',
                            //       'Anda berhasil menggeser!',
                            //       'success'
                            //     )
                            // }
                        }, function(dismiss) {
                            if (dismiss === 'cancel') { // you might also handle 'close' or 'timer' if you used those
                                $(".sortable").sortable('cancel');
                                dialog_confirm_callback(false);
                                
                                if (length < 1) {
                                    content.show();
                                }
                            } 
                            else {
                                throw dismiss;
                            }
                        })
                    }
                });

                function dialog_confirm_callback(value) {
                    if (value) {} else {
                        $(".sortable").sortable('cancel');
                    }
                }
                $(".sortable").sortable({});

                function save_stage(dataid, target){

                    $.ajax({
                                url : "http:{{ url('/save-stage/') }}/"+ dataid+"/?ref-id="+target,
                                type : 'GET',
                                success : function(data){
                                    location.reload();
                                },
                                error : function(data){
                                    console.log(data);
                                },
                            }
                        );
                }

            });
        </script>

        @yield('script')
</body>
</html>
