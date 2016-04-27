<?php namespace Laracc\Accountmanager\Http\Controllers;

use App\Http\Controllers\Controller;

class AccountManagerController extends Controller {

	/**
	 * [$pathRedirectAfterLogin description]
	 * @var string
	 */
	protected $pathRedirectAfterLogin = '/';

	/**
	 * [$enableAccountValidation description]
	 * @var boolean
	 */
	protected $enableAccountValidation = false;

	/**
	 * [__construct description]
	 */
	public function __construct()
	{
		parent::__construct();

		$this->theme->layout('default');
	}
	
	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		return view('accountmanager::index');
	}

	/**
	 * [create description]
	 * @return [type] [description]
	 */
	public function create()
	{
		return $this->watch('account.create')->render();
	}

	/**
	 * [login description]
	 * @return [type] [description]
	 */
	public function login()
	{
		return $this->watch('account.login')->render();
	}

	/**
	 * [createPost description]
	 * @return [type] [description]
	 */
	public function createPost()
	{
		return $this->create();
	}

	/**
	 * [loginPost description]
	 * @return [type] [description]
	 */
	public function loginPost()
	{
		return $this->login();
	}
}