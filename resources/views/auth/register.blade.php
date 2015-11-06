@extends('themes.auth')

@section('content')

<div class="p-lg panel md-whiteframe-z1 text-color m">

  <div class="m-b text-sm">
    Sign up to {{Lang::get('titles.app')}}
  </div>
  @include('errors._register')

  {!! Form::open(['name'=>'form','url'=>'/auth/register']) !!}
  <div class="md-form-group float-label">
      {!! Form::text('username',null,['class'=>'md-input','ng-model'=>'user.name']) !!}
      {!! Form::label('username', 'Username') !!}
  </div>
  <div class="md-form-group float-label">
      {!! Form::email('email',null,['class'=>'md-input','ng-model'=>'user.email']) !!}
      {!! Form::label('email', 'Email') !!}
  </div>
  <div class="md-form-group float-label">
      {!! Form::password('password',['class'=>'md-input','ng-model'=>'user.password']) !!}
      {!! Form::label('password', 'Password') !!}
  </div>
  <div class="md-form-group float-label">
      {!! Form::password('password_confirmation',['class'=>'md-input','ng-model'=>'user.password']) !!}
      {!! Form::label('password_confirmation', 'Password confirmation') !!}
  </div>

  <div class="m-b-md">
      By clicking Sign up, you agree the <a href="#" onclick="modalTerms(); return false;" data-uk-modal="">Terms and Agreement</a>
  </div>
    <button md-ink-ripple type="submit" class="md-btn md-raised pink btn-block p-h-md">Sign up</button>
  {!!Form::close()!!}

</div>

<div class="p-v-lg text-center">
  <div>Already have an account? <button onclick="location.href='login';" ui-sref="access.signin" class="md-btn">Sign in</button></div>
</div>

@include('modals._tos')

@endsection
