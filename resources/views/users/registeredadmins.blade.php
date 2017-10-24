@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Registered Administrators
            <span class="pull-right">
          <a class="btn btn-primary" href="{{ url('admins/create') }}">Create New</a>
        </span>
        </div>
        <div class="panel-body">
            <table id="simple-table" class="table  table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
                </thead>
                @if(count($admins) == 0)
                    <tr>
                        <td colspan="7"><h1 class="text-center text-danger">No admin$admin Registered</h1></td>
                    </tr>
                @else
                    @php  $count = 1; @endphp
                    @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $admin->firstName }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->phone }}</td>
                            <td>@php if($admin->status==1){ @endphp
                            	<span class="label label-success arrowed-in arrowed-in-right">Active</span>
                                @php }else { @endphp
                                <span class="label label-inverse arrowed">Blocked</span>
                            @php } @endphp</td>
                            <td>{{ $admin->created_at }}</td>
                            <td>{{ $admin->updated_at }}</td>
                            <td>
                            <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button">Actions<span class="caret"></span>
                                    </button>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="#">View Details</a>
                                        </li>
                                        </li>
                                        <li><a href="deactivate/?xzvf={{ $admin->id }}">Deactivate</a>
                                        </li>
                                        <li><a href="activate/?xzvfx={{ $admin->id }}">Activate</a>
                                        </li>
                                        </li>
                                    </ul>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
    </div>
@endsection
