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
		$title = 'Home|Test';
		
		return View::make('home/index')->with('title', $title);
	}

}
