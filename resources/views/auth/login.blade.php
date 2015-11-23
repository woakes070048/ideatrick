@extends('themes.auth')

@section('content')

<div class="p-lg panel md-whiteframe-z1 text-color m">

  <div class="m-b text-sm">
    Sign In to {{Lang::get('titles.app')}}
  </div>

  @include('errors._register')

  {!! Form::open(['name'=>'form','route'=>'login_post']) !!}
  <div class="md-form-group float-label">
      {!! Form::text('username',null,['class'=>'md-input','ng-model'=>'user.name']) !!}
      {!! Form::label('username', 'Username') !!}
  </div>
  <div class="md-form-group float-label">
      {!! Form::password('password',['class'=>'md-input','ng-model'=>'user.password']) !!}
      {!! Form::label('password', 'Password') !!}
  </div>
  <div class="m-b-md">
    <label class="md-check">
        {!! Form::checkbox('remember','remember') !!}
        <i class="indigo"></i> Keep me signed in
    </label>
</div>
    <button md-ink-ripple type="submit" class="md-btn md-raised pink btn-block p-h-md">Sign in</button>
  {!!Form::close()!!}

</div>

<div class="p-v-lg text-center">
    <div class="m-b"><button onclick="location.href='/password/email';" ui-sref="access.forgot-password" class="md-btn">{{Lang::get('auth.forgot')}}</button></div>
    <div>Don't have an account? <button onclick="location.href='register';" ui-sref="access.signin" class="md-btn">{{Lang::get('auth.register')}}</button></div>
</div>
@endsection
