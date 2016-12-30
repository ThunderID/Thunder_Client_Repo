@push('styles')
	<style type="text/css">
		/* The side navigation menu */
		.left_side_nav_overlay {
		    height: 100%; /* 100% Full-height */
		    width: 0; /* 0 width - change this with JavaScript */
		    position: fixed; /* Stay in place */
		    z-index: 1; /* Stay on top */
		    top: 0;
		    left: 0;
		    background-color: #111; /* Black*/
		    overflow-x: hidden; /* Disable horizontal scroll */
		    padding-top: 60px; /* Place content 60px from the top */
		    transition: 0.5s; /* 0.5 second transition effect to slide in the left_side_nav_overlay */
		}

		/* The navigation menu links */
		.left_side_nav_overlay a {
		    padding: 8px 8px 8px 32px;
		    text-decoration: none;
		    font-size: 25px;
		    color: #818181;
		    display: block;
		    transition: 0.3s
		}

		/* When you mouse over the navigation links, change their color */
		.left_side_nav_overlay a:hover, .offcanvas a:focus{
		    color: #f1f1f1;
		}

		/* Position and style the close button (top right corner) */
		.left_side_nav_overlay .closebtn {
		    position: absolute;
		    top: 0;
		    right: 25px;
		    font-size: 36px;
		    margin-left: 50px;
		}

		/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
		#main {
		    transition: margin-left .5s;
		    padding: 20px;
		}

		/* On smaller screens, where height is less than 450px, change the style of the left_side_nav_overlay (less padding and a smaller font size) */
		@media screen and (max-height: 450px) {
		    .left_side_nav_overlay {padding-top: 15px;}
		    .left_side_nav_overlay a {font-size: 18px;}
		}
	</style>
@endpush

<div id="left_side_nav_overlay" class="left_side_nav_overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="close_left_side_nav_overlay()">&times;</a>
	@forelse($navigations as $key => $value)
		<a href="{{route($value['route'])}}" class="{{$value['active']}}">{{$value['display']}}</a>
	@empty
		<a href="#">Here is navbar</a>
	@endforelse
</div>

@push('scripts')
	<script type="text/javascript">
		/* Set the width of the side navigation to 250px */
		function open_left_side_nav_overlay() 
		{
		    document.getElementById("left_side_nav_overlay").style.width = "250px";
		}

		/* Set the width of the side navigation to 0 */
		function close_left_side_nav_overlay() 
		{
		    document.getElementById("left_side_nav_overlay").style.width = "0";
		}
	</script>
@endpush
