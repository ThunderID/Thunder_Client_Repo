<!-- Fixed navbar on top -->
<nav class="navbar navbar-default navbar-fixed-top">
	<!-- menu navbar & action profile -->
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				@if(isset($logo))
					{{Html::image($logo)}}
				@else
					THUNDER.ID
				@endif
			</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-menu">
				@forelse($navigations as $key => $value)
					<li class="@if(in_array(Route::currentRouteName(), $value['active'])) active @endif">
						<a href="{{route($value['route'])}}">{!!$value['display']!!}</a>
					</li>
				@empty
					<li>
						<a href="#">Here is navbar</a>
					</li>
				@endforelse
			</ul>
			<ul class="nav navbar-nav navbar-right navbar-feature m-r-none">
				<li><a href="../navbar/"><i class="fa fa-calendar"></i></a></li>
				<li><a href="../navbar/"><i class="fa fa-globe"></i></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ada Lovelace <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						<li><a href="#">Akun Saya</a></li>
						<li><a href="#">Ubah Password</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Keluar</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div style="padding-bottom: 60px"></div>