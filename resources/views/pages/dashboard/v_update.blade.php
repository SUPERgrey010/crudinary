@extends('layouts.v_main')

@section('title', 'Update Profile')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Update Profile</h4>
                <p class="card-category">Complete your profile</p>
            </div>
            <div class="card-body">
                <form action="{{ route('profile-edit', $user->id) }}" id="form-data" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-5">
                    <div class="form-group">
                        <label class="bmd-label-floating">Username</label>
                        <input type="text" id="username" name="username" class="form-control" value="{{ $user->username }}">
                    </div>
                    </div>
                    <div class="col-md-5">
                    <div class="form-group">
                        <label class="bmd-label-floating">Password</label>
                        <input type="password" id="password" name="password" class="form-control" value="{{ $user->password }}">
                    </div>
                    </div>
                    <div class="col-md-5">
                    <div class="form-group">
                        <select class="form-control select2" style="width:100%;" name="user_access_id" id="user_access_id">
                            <option disabled value>Choose User Level</option>
                            <option value="$user->user_access_id">{{ $user->user_access->user_level }}</option>

                            @foreach ($user_access as $item)
                            <option value="{{ $item->id }}">{{ $item->user_level }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                <div class="clearfix"></div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection