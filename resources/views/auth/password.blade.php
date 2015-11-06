@extends('themes.auth')

@section('content')

<div class="p-lg panel md-whiteframe-z1 text-color m">

    <div class="m-b">
          Forgot your password?
          <p class="text-xs m-t">Enter your email address below and we will send you instructions on how to change your password.</p>
    </div>

  @include('errors._register')

  {!! Form::open(['url'=>'/password/email']) !!}
  <div class="md-form-group float-label">
      {!! Form::email('email',null,['class'=>'md-input','ng-model'=>'user.email']) !!}
      {!! Form::label('email', 'E-Mail') !!}
  </div>
    <button md-ink-ripple type="submit" class="md-btn md-raised pink btn-block p-h-md">Send Reset Link</button>
  {!!Form::close()!!}

</div>
<div class=" p-v-lg text-center">
    <div class="m-b"><button onclick="location.href='/auth/login';" ui-sref="access.login" class="md-btn">Back to Login</button></div>
</div>
@endsection
