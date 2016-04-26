<?php namespace App\Http\Controllers;

use App\Http\Controllers\MenuController;
use Pingpong\Modules\Routing\Controller as PingpongController;
use Theme;
use View;

class Controller extends PingpongController {

	/**
	 * [$theme description]
	 * @var [type]
	 */
	public $theme;

	/**
	 * [$partialsToViewComposer description]
	 * @var array
	 */
	private $partialsToViewComposer = [];

	/**
	 * [__construct description]
	 */
	public function __construct() {
		# set theme
		$this->theme('default');

		# base composer to view
		$this->partialsToViewComposer = collect([
			'user' => auth()->user(),
			'theme' => $this->theme,
			'head' => $this->theme->asset()->container('head'),
			'footer' => $this->theme->asset()->container('footer'),
			'asset' => $this->theme->asset(),
			'styles' => $this->theme->asset()->styles(),
			'scripts' => $this->theme->asset()->scripts(),
			'form' => \Form::class,
			'partial' => function ($partial) {
				return $this->theme->partial($partial);
			},
		]);
	}

	/**
	 * Add partial to view composer
	 */
	public function partialToView($name, $value)
	{
		$this->partialsToViewComposer->put($name, $value);

		return $this;
	}

	/**
	 * [setTheme description]
	 */
	protected function theme($theme) {

		# set theme
		if (!Theme::exists($theme)) {
			throw new Exception('Theme invalid ' . $theme);
		}

		$this->theme = Theme::uses($theme);

		return $this;
	}

	/**
	 * [FunctionName description]
	 * @param string $value [description]
	 */
	protected function watch($view, array $data = []) {
		$this->viewComposer();

		return $this->theme->watch($view, $data);
	}

	/**
	 * [viewComposer description]
	 * @return [type] [description]
	 */
	private function viewComposer() {
		View::composer('*', function ($view) {
			$this->partialsToViewComposer->each(function ($k, $v) use ($view) {
				$view->with($v, $k);
			});
		});
	}

	/**
	 * [viewWith description]
	 * @param  [type] $name  [description]
	 * @param  [type] $value [description]
	 * @return [type]        [description]
	 */
	public function viewWith($name, $value) {
		$this->partialsToViewComposer->put($name, $value);
	}
}