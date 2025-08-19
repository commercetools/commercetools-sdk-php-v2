# RequestBuilder

In order to be able to build request objects you can use the RequestBuilder. The following methods return a HTTP request instance of Guzzle [PSR-7](https://github.com/guzzle/psr7).

```php
use Commercetools\Import\Client\ImportRequestBuilder;

$root = new ImportRequestBuilder();
```

## `withProjectKeyValue("projectKey")->businessUnits()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates an Import Request for Business Units.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->businessUnits()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->categories()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates an Import Request for Categories.

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

Creates an Import Request for Customers.

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

Creates an Import Request for Discount Codes.

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

Creates an Import Container in the Project.

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

Retrieves all ImportContainers in the Project.

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

Updates an [ImportContainer](ctp:import:type:ImportContainer) in the Project.

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

Retrieves an [ImportContainer](ctp:import:type:ImportContainer) with the provided `importContainerKey`.

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

Deletes an Import Container in the Project.

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

Retrieves all ImportOperations within an [ImportContainer](ctp:import:type:ImportContainer).


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

Retrieves an [ImportSummary](ctp:import:type:ImportSummary) for the [ImportContainer](ctp:import:type:ImportContainer) with the provided `importContainerKey`.


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

Retrieves an ImportOperation with the provided `id`.


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

Creates an Import Request for InventoryEntries.

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

Creates an Import Request for updating Orders.

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

Creates an Import Request for creating Orders.

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

Creates an Import Request for Prices.

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

Creates an Import Request for Products.


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
## `withProjectKeyValue("projectKey")->productSelections()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates an Import Request for Product Selections.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productSelections()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->productTypes()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates an Import Request for ProductTypes.

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

Creates an Import Request for updating Product Variants.
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

Creates an Import Request for ProductVariants.

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

Creates an Import Request for Products.

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

Creates an Import Request for Standalone Prices.

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

Creates an Import Request for Types.

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
