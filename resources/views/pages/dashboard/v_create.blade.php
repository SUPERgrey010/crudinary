@extends('layouts.v_main')

@section('title', 'Create Profile')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Create Profile</h4>
                <p class="card-category">Complete your profile</p>
            </div>
            <div class="card-body">
                <form action="{{ route('profile-add') }}" id="form-data" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-5">
                    <div class="form-group">
                        <label class="bmd-label-floating">Username</label>
                        <input type="text" id="username" name="username" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-5">
                    <div class="form-group">
                        <label class="bmd-label-floating">Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-5">
                    <div class="form-group">
                        <select class="form-control select2" style="width:100%;" name="user_access" id="user_access">
                            <option disabled value>Choose User Level</option>
                            @foreach ($user_access as $item)
                            <option value="{{ $item->id }}">{{ $item->user_level }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary pull-right">Add Profile</button>
                <div class="clearfix"></div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection