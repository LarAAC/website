<?php namespaceApp\Http\Controllers;

use Auth;
use Menu;
use Route;

class MenuController {

	/**
	 * [__construct description]
	 */
	public function __construct() {

		$route = Route::class;

		Menu::make('default', function ($menu) use ($route) {

		})->filter(function ($item) {
			return $this->filterMenu($item);
		});
	}

	/**
	 * Filtra se o usuário possui permissões para o menu
	 * @param  $item
	 * @return boolean
	 */
	private function filterMenu($item) {
		return true;
	}

	/**
	 * Retorna URI rota
	 * @param  [type] $routeName [description]
	 * @return [type]            [description]
	 */
	private function getRoutePath($routeName) {
		$route = Route::class;
		return $route::getRoutes()->getByName($routeName)->getPath();
	}
}