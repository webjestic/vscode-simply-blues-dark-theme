<?php
class Home_Controller extends Base_Controller {
    /* orange comments?  why in the world... */
	public function action_index()
	{
		$themes = Theme::order_by('updated_at', 'desc')->paginate(9);
		return View::make('home.index')
		->with('themes', $themes);
	}
}