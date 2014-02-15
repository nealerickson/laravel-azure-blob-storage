<?php namespace Heedworks\LaravelAzureBlobStorage;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Beberlei\AzureBlobStorage\BlobClient;

class LaravelAzureBlobStorageServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('heedworks/laravel-azure-blob-storage');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['blob-storage'] = $this->app->share(function($app)
		{
			return new BlobClient(
				Config::get('laravel-azure-blob-storage::accountUrl'),
				Config::get('laravel-azure-blob-storage::accountName'),
				Config::get('laravel-azure-blob-storage::accountKey')
			);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('blob-storage');
	}

}