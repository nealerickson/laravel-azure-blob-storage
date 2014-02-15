<?php namespace Heedworks\LaravelAzureBlobStorage\Facades;

use Illuminate\Support\Facades\Facade;

class BlobStorage extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'blob-storage'; }

}