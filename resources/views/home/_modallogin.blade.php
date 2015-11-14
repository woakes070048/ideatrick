@if (Auth::guest())
<div></div>
@else
	@include('dashboard.admin._logoutmodal')
@endif