<?php namespace Franzl\LaravelRain;

use Illuminate\Support\ServiceProvider;
use Rain\Tpl;

class LaravelRainServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	public function boot()
	{
		$app = $this->app;
		$app->resolving('view', function($view) use ($app)
		{
			Tpl::configure(array(
				"tpl_dir" => "",
				"cache_dir" => $app['path.storage']."/views",
				"tpl_ext" => "rain.php",
			));

			$view->addExtension('rain.php', 'rain', function()
			{
				return new Engine('rain.php');
			});
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}