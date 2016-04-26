<?php namespace Laracc\Helloworld\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class HelloWorldController extends Controller {
	
	public function index()
	{
		return view('helloworld::index');
	}
	
}