<?php namespace Flavio378\Datetime;

use Illuminate\Support\ServiceProvider;


class DatetimeServiceProvider extends ServiceProvider {

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
        $this->app['datetimef'] = $this->app->share(function($app)
        {
            return new DataTimeF();
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
        return array('datetimef');
	}

}
