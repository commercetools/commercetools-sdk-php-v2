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
## `withProjectKeyValue("projectKey")->discountCodes()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates a request for creating new Discount Codes or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->discountCodes()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->importContainers()->post(null)`

Creates a new Import Container.

Generates the [ImportContainerCreated](/projects/events#import-container-created-event) Event.


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

Retrieves all Import Containers of a given project key.

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

Updates the Import Container given by the key.

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

Retrieves the Import Container given by the key.

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

Deletes the Import Container specified by the `importContainerKey`.

Generates the [ImportContainerDeleted](/projects/events#import-container-deleted-event) Event.


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

Retrieves an [ImportSummary](ctp:import:type:ImportSummary) for the given Import Container. An [ImportSummary](ctp:import:type:ImportSummary) is calculated on demand.


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

Creates a new import request for Product Variant Patches.
Returns an [InvalidField](ctp:import:type:InvalidFieldError) error if the [ProductVariantPatchRequest](ctp:import:type:ProductVariantPatchRequest) contains patches with and without the `product` field set.


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
## `withProjectKeyValue("projectKey")->types()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates a request for creating new Type or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->types()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
