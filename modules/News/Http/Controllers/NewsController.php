<?php namespace Laracc\News\Http\Controllers;

use App\Http\Controllers\Controller;

class NewsController extends Controller {

	/**
	 * [__construct description]
	 */
	public function __construct()
	{
		parent::__construct();

		$this->theme->layout('default');
	}
	
	public function index()
	{
		return $this->watch('news.home')->render();
	}	
}