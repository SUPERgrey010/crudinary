@extends('layouts.v_main')

@section('title', 'Dashboard')
@section('content')
<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <a class="btn btn-primary pull-left ml-3" href="{{ route('profile-create') }}" type="submit">Create Profile</a>
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">List Profile</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table id="tab_all" class="table table-head-custom table-striped" style="width: 100%">
                    <thead>
                        <tr>
                        <th >No</th>
                        <th>Username</th>
                        <th>Access Level</th>
                        <th>Actions</th>
                        </tr>   
                    </thead>
                    <tbody>
                        @foreach($dtUser as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->user_access->user_level }}</td>
                                <td><a href="{{ route('profile-update', $user->id) }}"><span class="material-icons" style="color:green;">build</span></a> | 
                                <a href="{{ route('profile-delete', $user->id) }}"><span class="material-icons" style="color:red;">delete_outline</span></a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <div class="card-footer">
                    {{ $dtUser->links() }}
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection