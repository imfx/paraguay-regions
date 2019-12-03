<?php

namespace Paraguay\Regions;


class RegionsServiceProvider extends ServiceProvider
{
	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot()
	{
		if ($this->app->runningInConsole()) {
			$this->publishResources();
		}
	}

	public function publishResources()
	{
		$this->publishes([
			__DIR__ . '/../database/migrations' => database_path('migrations')
		], 'regions-migrations');
	}
}