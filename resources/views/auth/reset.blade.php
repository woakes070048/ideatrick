@extends('themes.auth')

@section('content')

<div class="p-lg panel md-whiteframe-z1 text-color m">

    <div class="m-b">
          Your account is under control!
          <p class="text-xs m-t">Enter your new password below, keep it secret, and take back your account.</p>
    </div>

  @include('errors._register')

  {!! Form::open(['url'=>'/password/reset']) !!}

  <input type="hidden" name="token" value="{{ $token }}">
  
  <div class="md-form-group float-label">
      {!! Form::email('email',null,['class'=>'md-input','ng-model'=>'user.email']) !!}
      {!! Form::label('email', 'E-Mail') !!}
  </div>

  <div class="md-form-group float-label">
      {!! Form::password('password',['class'=>'md-input','ng-model'=>'user.password']) !!}
      {!! Form::label('password', 'New Password') !!}
  </div>

  <div class="md-form-group float-label">
      {!! Form::password('password_confirmation',['class'=>'md-input','ng-model'=>'user.password']) !!}
      {!! Form::label('password_confirmation', 'New Password confirmation') !!}
  </div>
  
    <button md-ink-ripple type="submit" class="md-btn md-raised pink btn-block p-h-md">Update Password</button>
  {!!Form::close()!!}

</div>
<div class=" p-v-lg text-center">
    <div class="m-b"><button onclick="location.href='/auth/login';" ui-sref="access.login" class="md-btn">Back to Login</button></div>
</div>
@endsection
