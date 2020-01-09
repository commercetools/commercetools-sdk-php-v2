# RequestBuilder

In order to be able to build request objects you can use the RequestBuilder. The following methods return a HTTP request instance of Guzzle [PSR-7](https://github.com/guzzle/psr7).

```php
use CommercetoolsImportClientClientImportRoot;

$root = new ImportRoot();
```

## `withProjectKeyValue("projectKey")->categories()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates a new import request for a catgory

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->categories()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->categories()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importItems()->get()`

Retrieves all import items of an import sink key.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->categories()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importItems()
                ->get();
```
## `withProjectKeyValue("projectKey")->categories()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importItems()->resourceKeyWithResourceKeyValue("resourceKey")->get()`

Retrieves inidividual import items for the given resource and import sink.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->categories()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importItems()
                ->resourceKeyWithResourceKeyValue("resourceKey")
                ->get();
```
## `withProjectKeyValue("projectKey")->categories()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->resourceKeyWithResourceKeyValue("resourceKey")->delete()`

Deletes the category given by the resource key.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->categories()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->resourceKeyWithResourceKeyValue("resourceKey")
                ->delete();
```
## `withProjectKeyValue("projectKey")->importSinks()->post(null)`

Creates a new import sink.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importSinks()
                ->post(null);
```
## `withProjectKeyValue("projectKey")->importSinks()->withImportSinkKeyValue("importSinkKey")->put(null)`

Updates the import sink given by the key.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importSinks()
                ->withImportSinkKeyValue("importSinkKey")
                ->put(null);
```
## `withProjectKeyValue("projectKey")->importSinks()->withImportSinkKeyValue("importSinkKey")->get()`

Retrieves the import sink given by the key.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importSinks()
                ->withImportSinkKeyValue("importSinkKey")
                ->get();
```
## `withProjectKeyValue("projectKey")->importSinks()->withImportSinkKeyValue("importSinkKey")->delete()`

Deletes the import sink given by the key.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importSinks()
                ->withImportSinkKeyValue("importSinkKey")
                ->delete();
```
## `withProjectKeyValue("projectKey")->prices()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates a new import request for a catgory

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->prices()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->prices()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importItems()->get()`

Retrieves all import items of an import sink key.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->prices()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importItems()
                ->get();
```
## `withProjectKeyValue("projectKey")->prices()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importItems()->resourceKeyWithResourceKeyValue("resourceKey")->get()`

Retrieves inidividual import items for the given resource and import sink.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->prices()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importItems()
                ->resourceKeyWithResourceKeyValue("resourceKey")
                ->get();
```
## `withProjectKeyValue("projectKey")->prices()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->resourceKeyWithResourceKeyValue("resourceKey")->delete()`

Deletes the price given by the resource key.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->prices()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->resourceKeyWithResourceKeyValue("resourceKey")
                ->delete();
```
## `withProjectKeyValue("projectKey")->productTypes()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates a new import request for a catgory

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productTypes()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->productTypes()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importItems()->get()`

Retrieves all import items of an import sink key.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productTypes()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importItems()
                ->get();
```
## `withProjectKeyValue("projectKey")->productTypes()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importItems()->resourceKeyWithResourceKeyValue("resourceKey")->get()`

Retrieves inidividual import items for the given resource and import sink.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productTypes()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importItems()
                ->resourceKeyWithResourceKeyValue("resourceKey")
                ->get();
```
## `withProjectKeyValue("projectKey")->productTypes()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->resourceKeyWithResourceKeyValue("resourceKey")->delete()`

Deletes the product type given by the resource key.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productTypes()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->resourceKeyWithResourceKeyValue("resourceKey")
                ->delete();
```
## `withProjectKeyValue("projectKey")->productVariantPatches()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates a new import request for a catgory

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productVariantPatches()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->productVariantPatches()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importItems()->get()`

Retrieves all import items of an import sink key.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productVariantPatches()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importItems()
                ->get();
```
## `withProjectKeyValue("projectKey")->productVariantPatches()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importItems()->resourceKeyWithResourceKeyValue("resourceKey")->get()`

Retrieves inidividual import items for the given resource and import sink.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productVariantPatches()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importItems()
                ->resourceKeyWithResourceKeyValue("resourceKey")
                ->get();
```
## `withProjectKeyValue("projectKey")->productVariants()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates a new import request for a catgory

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productVariants()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->productVariants()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importItems()->get()`

Retrieves all import items of an import sink key.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productVariants()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importItems()
                ->get();
```
## `withProjectKeyValue("projectKey")->productVariants()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importItems()->resourceKeyWithResourceKeyValue("resourceKey")->get()`

Retrieves inidividual import items for the given resource and import sink.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productVariants()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importItems()
                ->resourceKeyWithResourceKeyValue("resourceKey")
                ->get();
```
## `withProjectKeyValue("projectKey")->productVariants()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->resourceKeyWithResourceKeyValue("resourceKey")->delete()`

Deletes the product variant given by the resource key.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productVariants()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->resourceKeyWithResourceKeyValue("resourceKey")
                ->delete();
```
## `withProjectKeyValue("projectKey")->products()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates a new import request for a catgory

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->products()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->products()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importItems()->get()`

Retrieves all import items of an import sink key.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->products()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importItems()
                ->get();
```
## `withProjectKeyValue("projectKey")->products()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importItems()->resourceKeyWithResourceKeyValue("resourceKey")->get()`

Retrieves inidividual import items for the given resource and import sink.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->products()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importItems()
                ->resourceKeyWithResourceKeyValue("resourceKey")
                ->get();
```
## `withProjectKeyValue("projectKey")->products()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->resourceKeyWithResourceKeyValue("resourceKey")->delete()`

Deletes the product given by the resource key.

### Example
```php
$builder =  new ImportRoot();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->products()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->resourceKeyWithResourceKeyValue("resourceKey")
                ->delete();
```
