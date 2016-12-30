<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class NavigationComposer
{
	/**
	 * Bind data to the view.
	 *
	 * @param  View  $view
	 * @return void
	 */
	public function compose(View $view)
	{
		$navigations	=
						[
							[
								'route'		=> 'dashboard',
								'active'	=> ['dashboard'],
								'display'	=> 'Dashboard',
							],
						];
		
		$view->with('navigations', $navigations);
	}
}