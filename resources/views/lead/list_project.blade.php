@extends('layouts.app')

@section('menu_lead', 'active')

@section('content')
List Project || 
<a href="{{ url('kanban') }}"> Versi Kanban</a><br>
<a href="{{ url('add-new-lead') }}"> Add new lead</a>

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
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>{{ $row->sf_opstage_startdate }}</td>
                <td><font color="green">Edit</font>&nbsp;<font color="red">Delete</font></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
