@extends('layouts.app')

@section('menu_lead', 'active')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        List Project
                        <div class="btn-group float-right mb-3" role="group" aria-label="Basic example">
                            <button onclick="location.href='{{ url('kanban') }}'" type="button" class="btn btn-outline-secondary">Kanban View</button>
                            <button onclick="location.href='{{ url('add-new-lead') }}'" type="button" class="btn btn-outline-secondary">Add New Lead</button>
                        </div>
                        

                        <div class="table-scrollable">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="cursor:pointer;"> Project</th>
                                        <th style="cursor:pointer;"> Company Name</th>
                                        <th style="cursor:pointer;"> State/Province</th>
                                        <th style="cursor:pointer;"> Phone</th>
                                        <th style="cursor:pointer;"> Email</th>
                                        <th style="cursor:pointer;"> Lead Status</th>
                                        <th style="cursor:pointer;"> Owner</th>
                                        <th style="cursor:pointer;"> Create Date</th>
                                        <th style="cursor:pointer;"> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach ($project as $row)
                                    <tr align="left">
                                        <td><label><input  type="checkbox" name="check"> <span class="label-text">{{ $row->sf_name }}</span></label></td>
                                        <td>{{ $row->lc_account_id }}</td>
                                        <td>{{ $row->province_desc }}</td>
                                        <td>{{ $row->lc_telp }}</td>
                                        <td></td>
                                        <td>{{ $row->sf_opstage_ref_name }}</td>
                                        <td>{{ $row->sf_pic_name_temp }}</td>
                                        <td>{{ $row->sf_opstage_startdate }}</td>
                                        <td><font color="green">Edit</font>&nbsp;<font color="red">Delete</font></td>
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
</div>
@endsection
