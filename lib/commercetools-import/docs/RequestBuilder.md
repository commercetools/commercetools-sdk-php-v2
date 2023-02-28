# RequestBuilder

In order to be able to build request objects you can use the RequestBuilder. The following methods return a HTTP request instance of Guzzle [PSR-7](https://github.com/guzzle/psr7).

```php
use Commercetools\Import\Client\ImportRequestBuilder;

$root = new ImportRequestBuilder();
```

## `withProjectKeyValue("projectKey")->categories()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates a request for creating new Categories or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->categories()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->customers()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates a request for creating new Customers or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->customers()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->importContainers()->post(null)`

Creates a new import container.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importContainers()
                ->post(null);
```
## `withProjectKeyValue("projectKey")->importContainers()->get()`

Retrieves all import containers of a given project key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importContainers()
                ->get();
```
## `withProjectKeyValue("projectKey")->importContainers()->withImportContainerKeyValue("importContainerKey")->put(null)`

Updates the import container given by the key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->put(null);
```
## `withProjectKeyValue("projectKey")->importContainers()->withImportContainerKeyValue("importContainerKey")->get()`

Retrieves the import container given by the key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->get();
```
## `withProjectKeyValue("projectKey")->importContainers()->withImportContainerKeyValue("importContainerKey")->delete()`

Deletes the import container given by the key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->delete();
```
## `withProjectKeyValue("projectKey")->importContainers()->withImportContainerKeyValue("importContainerKey")->importOperations()->get()`

Retrieves all [ImportOperations](ctp:import:type:ImportOperation) of a given ImportContainer key.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->importOperations()
                ->get();
```
## `withProjectKeyValue("projectKey")->importContainers()->withImportContainerKeyValue("importContainerKey")->importSummaries()->get()`

Retrieves an [ImportSummary](ctp:import:type:ImportSummary) for the given import container. An [ImportSummary](ctp:import:type:ImportSummary) is calculated on demand.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->importSummaries()
                ->get();
```
## `withProjectKeyValue("projectKey")->importOperations()->withIdValue("id")->get()`

Retrieves the [ImportOperation](ctp:import:type:ImportOperation) of a given ID.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importOperations()
                ->withIdValue("id")
                ->get();
```
## `withProjectKeyValue("projectKey")->inventories()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates a request for creating new Inventories or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->inventories()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->orderPatches()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates a new import request for order patches

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->orderPatches()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->orders()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates a request for creating new Orders.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->orders()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->prices()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates a request for creating new Prices or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->prices()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->productDrafts()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates a request for creating new ProductDrafts or updating existing ones.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productDrafts()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->productTypes()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates a request for creating new ProductTypes or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productTypes()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->productVariantPatches()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates a new import request for product variant patches

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productVariantPatches()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->productVariants()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates a request for creating new ProductVariants or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productVariants()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->products()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates a request for creating new Products or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->products()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->standalonePrices()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates a request for creating new Standalone Prices or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->standalonePrices()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
