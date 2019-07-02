@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="m_name" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="m_name" type="text" class="form-control{{ $errors->has('m_name') ? ' is-invalid' : '' }}" name="m_name" value="{{ old('m_name') }}" required autofocus>

                                @if ($errors->has('m_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('m_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="l_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="l_name" type="text" class="form-control{{ $errors->has('l_name') ? ' is-invalid' : '' }}" name="l_name" value="{{ old('l_name') }}" required autofocus>

                                @if ($errors->has('l_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('l_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="country_location" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                          <div class="col-md-6">
                            <input id="country_location" type="text" class="form-control{{ $errors->has('country_location') ? ' is-invalid' : '' }}" name="country_location" value="{{ old('country_location') }}" required autofocus>

                            @if ($errors->has('country_location'))
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('country_location') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                      <div class="col-md-6">
                        <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

                        @if ($errors->has('address'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('address') }}</strong>
                      </span>
                      @endif
                  </div>
              </div>
              <div class="form-group row">
                  <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                  <div class="col-md-6">
                    <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>

                    @if ($errors->has('city'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('city') }}</strong>
                  </span>
                  @endif
              </div>
          </div>
          <div class="form-group row">
              <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

              <div class="col-md-6">
                <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" required autofocus>

                @if ($errors->has('state'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('state') }}</strong>
              </span>
              @endif
          </div>
      </div>
      <div class="form-group row">
          <label for="postal_code" class="col-md-4 col-form-label text-md-right">{{ __('Postal Code') }}</label>

          <div class="col-md-6">
            <input id="postal_code" type="text" class="form-control{{ $errors->has('postal_code') ? ' is-invalid' : '' }}" name="postal_code" value="{{ old('postal_code') }}" required autofocus>

            @if ($errors->has('postal_code'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('postal_code') }}</strong>
          </span>
          @endif
      </div>
  </div>
  <div class="form-group row">
      <label for="field_interest" class="col-md-4 col-form-label text-md-right">{{ __('Field of Interest') }}</label>

      <div class="col-md-6">
        <select class="form-control" name="field_interest" required="required">
            <option selected="selected">
            </option>
            <option value="education sector">Education</option>
            <option value="research">Research</option>
            <option value="self development">Self Development</option>
            <option value="others">Others</option>
        </select>
        @if ($errors->has('field_interest'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('field_interest') }}</strong>
      </span>
      @endif
  </div>
</div>
<div class="form-group row">
    <label for="profession" class="col-md-4 col-form-label text-md-right">{{ __('I Am') }}</label>

    <div class="col-md-6">
       <select class="form-control" name="profession" required="required">
        <option selected="selected">
        </option>
        <option value="student">Student</option>
        <option value="private employee">Private Employee</option>
        <option value="government employee">Government Employee</option>
        <option value="researcher">Researcher</option>
        <option value="blogger">Blogger</option>
        <option value="newsreader">Newsreader</option>
        <option value="writer">Writer</option>
        <option value="presentor">Presentor</option>
        <option value="journalist">Journalist</option>
        <option value="professor">Professor</option>
        <option value="Faculty">Faculty</option>
        <option value="college teacher">College Teacher</option>
        <option value="school teacher">School Teacher</option>
        <option value="script writer">Script Writer</option>
        <option value="general user">General User</option>
    </select>

    @if ($errors->has('profession'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('profession') }}</strong>
  </span>
  @endif
</div>
</div>
<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group row">
  <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

  <div class="col-md-6">
    <input id="mobile" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}"  autofocus>

    @if ($errors->has('mobile'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('mobile') }}</strong>
  </span>
  @endif
</div>
</div>
<div class="form-group row">
  <label for="fixed_line" class="col-md-4 col-form-label text-md-right">{{ __('Fixed Line') }}</label>

  <div class="col-md-6">
    <input id="fixed_line" type="text" class="form-control{{ $errors->has('fixed_line') ? ' is-invalid' : '' }}" name="fixed_line" value="{{ old('fixed_line') }}"  autofocus>

    @if ($errors->has('fixed_line'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('fixed_line') }}</strong>
  </span>
  @endif
</div>
</div>
<div class="form-group row">
  <label for="pro_pic" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

  <div class="col-md-6">
    <input id="pro_pic" type="text" class="form-control{{ $errors->has('pro_pic') ? ' is-invalid' : '' }}" name="pro_pic" value="{{ old('pro_pic') }}"  autofocus>

    @if ($errors->has('pro_pic'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('pro_pic') }}</strong>
  </span>
  @endif
</div>
</div>
<div class="form-group row">
  <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

  <div class="col-md-6">
    <select class="form-control" name="gender" required="required">
       <option selected="selected">
       </option>
       <option value="male">Male</option>
       <option value="female">Female</option>
   </select>
   @if ($errors->has('gender'))
   <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('gender') }}</strong>
  </span>
  @endif
</div>
</div>
<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
