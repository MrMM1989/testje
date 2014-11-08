<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Home Controller: controller for homepage & static pages
	|--------------------------------------------------------------------------
	*/
 
	/*
	| index method -> Homepage of site
	*/

	public function index()
	{
		$title		= 'Home|Test';
		$pageheader	= 'Test: Home';
		
		return View::make('home/index')->with(array('title' => $title, 'pageheader' => $pageheader));
	}

}
