# Installation

Update your `composer.json` file to include this package as a dependency
```json
"heedworks/laravel-azure-blob-storage": "dev-master"
```

Register the Loggr service provider by adding it to the providers array in the `app/config/app.php` file.
```
Heedworks\LaravelAzureBlobStorage\LaravelAzureBlobStorageServiceProvider
```

Alias the Azure Blob Storage facade by adding it to the aliases array in the `app/config/app.php` file.
```php
'aliases' => array(
	'BlobStorage' => 'Heedworks\LaravelAzureBlobStorage\Facades\BlobStorage'
)
```

# Configuration

Copy the config file into your project by running
```
php artisan config:publish heedworks/laravel-azure-blob-storage
```

Edit the config file to include your Azure Blob Storage credentials.

# Usage

This package leverages the Azure Blob Storage library from [beberlei](http://github.com/beberlei). Please see http://github.com/beberlei/azure-blob-storage for details.