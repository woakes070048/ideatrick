@if (count($errors) > 0)
    <div class="uk-alert uk-alert-danger">
		<strong>{{ Lang::get('auth.whoops') }}</strong> {{ Lang::get('auth.someProblems') }}<br><br>
			<ul class="uk-list">
			    @foreach ($errors->all() as $error)
			             <li>{{ $error }}</li>
		        @endforeach
			</ul>
	</div>
@endif
