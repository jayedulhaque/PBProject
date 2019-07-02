@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table-bordered" width="398" border="0" align="center" cellpadding="0">
                        <tbody>
                          <tr>
                            <td height="26" colspan="2">Your Profile Information </td>
                            <td><div align="right"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></div></td>
                        </tr>

                        <tr>
                            <td ><div align="left">Name:</div></td>
                            <td >{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td ><div align="left">Email:</div></td>
                            <td >{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <td ><div align="left">Password:</div></td>
                            <td >{{ Auth::user()->password }}</td>
                        </tr>
                        <tr>
                            <td ><div align="left"><a class="btn btn-info btn-sm" href="{{route('profile.edit',Auth::user()->id)}}">Edit</a></div></td>

                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
