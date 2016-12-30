@push('styles')
	<style type="text/css">
		.left_side_nav_stack ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    width: 15%;
		    background-color: #000;
		    position: fixed;
		    height: 100%;
		    overflow: auto;
		}

		.left_side_nav_stack li a {
		    display: block;
		    color: #fff;
		    padding: 8px 16px;
		    text-decoration: none;
		}

		.left_side_nav_stack li a.active {
		    background-color: #fff;
		    color: #000;
		}

		.left_side_nav_stack li a:hover:not(.active) {
		    background-color: #555;
		    color: #fff;
		}
	</style>
@endpush

<div class="left_side_nav_stack">
	<ul>
		@forelse($navigations as $key => $value)
			<li>
				<a href="{{route($value['route'])}}" class="{{$value['active']}}">{{$value['display']}}</a>
			</li>
		@empty
			<li>
				<a href="#">Here is navbar</a>
			</li>
		@endforelse
	</ul>
</div>