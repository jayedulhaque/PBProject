@extends('after-login-layout')

@section('content')
<div class="container">
  @if(isset($user))
  <form method="post" action="{{route('profile.update',$user->id)}}" enctype="multipart/form-data">
    {{method_field('PATCH')}}
    {{csrf_field()}}
    <div class="row">
      <div class="form-group col-md-4">
        <label for="Name">Name</label>
        <input type="text" class="form-control" name="Name" value="{{$user->name}}">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-4">
        <label for="Email">Email</label>
        <input type="text" class="form-control" name="Email" value="{{$user->email}}">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-4 {{ $errors->has('current-password') ? ' has-error' : '' }}>
        <label for="current-password">Current Password</label>
        <input id="current-password" type="password" class="form-control" name="current-password" required>
        @if ($errors->has('current-password'))
        <span class="help-block">
          <strong>{{ $errors->first('current-password') }}</strong>
        </span>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-4 {{ $errors->has('new-password') ? ' has-error' : '' }}">
        <label for="new-password">New Password</label>
        <input id="new-password" type="password" class="form-control" name="new-password" required>
        @if ($errors->has('new-password'))
        <span class="help-block">
          <strong>{{ $errors->first('new-password') }}</strong>
        </span>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-4">
        <label for="new-password-confirm">Changed Password</label>
         <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-4" style="margin-top:30px">
        <button type="submit" class="btn btn-success">Update</button>
      </div>
    </div>
  </form>
  @endif
</div>
@endsection
