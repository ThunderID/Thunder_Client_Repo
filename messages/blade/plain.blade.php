@if(Session::has('alert-info'))
	<p class="alert alert-info">{{ Session::get('alert-info') }}</p>
@endif
@if(Session::has('alert-warning'))
	<p class="alert alert-warning">{{ Session::get('alert-warning') }}</p>
@endif
@if(Session::has('alert-danger'))
	<p class="alert alert-danger">{{ Session::get('alert-danger') }}</p>
@endif
@if(Session::has('alert-success'))
	<p class="alert alert-success">{{ Session::get('alert-success') }}</p>
@endif