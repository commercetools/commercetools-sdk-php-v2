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
## `withProjectKeyValue("projectKey")->categories()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates import request for creating new categories or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->categories()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->categories()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->get()`

Retrieves all category import operations of an import sink key.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->categories()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->get();
```
## `withProjectKeyValue("projectKey")->categories()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->withIdValue("id")->get()`

Retrieves the ImportOperation of a given ID.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->categories()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->withIdValue("id")
                ->get();
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
## `withProjectKeyValue("projectKey")->customers()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates import request for creating new customers or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->customers()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->customers()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->get()`

Retrieves all customer import operations of an import sink key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->customers()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->get();
```
## `withProjectKeyValue("projectKey")->customers()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->withIdValue("id")->get()`

Retrieves the import operation with the given id.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->customers()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->withIdValue("id")
                ->get();
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
## `withProjectKeyValue("projectKey")->importSinks()->post(null)`

Creates a new import sink.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importSinks()
                ->post(null);
```
## `withProjectKeyValue("projectKey")->importSinks()->get()`

Retrieves all import sinks of a project key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importSinks()
                ->get();
```
## `withProjectKeyValue("projectKey")->importSinks()->withImportSinkKeyValue("importSinkKey")->put(null)`

Updates the import sink given by the key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
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
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
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
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importSinks()
                ->withImportSinkKeyValue("importSinkKey")
                ->delete();
```
## `withProjectKeyValue("projectKey")->importSummaries()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->get()`

Retrieves an import summary for the given import sink.

The import summary is calculated on demand.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->importSummaries()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
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
## `withProjectKeyValue("projectKey")->inventories()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates import request for creating new inventories or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->inventories()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->inventories()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->get()`

Retrieves all inventory import operations of an import sink key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->inventories()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->get();
```
## `withProjectKeyValue("projectKey")->inventories()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->withIdValue("id")->get()`

Retrieves the import operation with the given id.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->inventories()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->withIdValue("id")
                ->get();
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
## `withProjectKeyValue("projectKey")->orderPatches()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates a new import request for order patches

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->orderPatches()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->orderPatches()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->get()`

Retrieves all order-patches import operations of an import sink key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->orderPatches()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->get();
```
## `withProjectKeyValue("projectKey")->orderPatches()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->withIdValue("id")->get()`

Retrieves the import operation with the given id.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->orderPatches()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->withIdValue("id")
                ->get();
```
## `withProjectKeyValue("projectKey")->orders()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates a request for creating new Orders or updating existing ones.

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
## `withProjectKeyValue("projectKey")->orders()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates import request for creating new orders or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->orders()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->orders()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->get()`

Retrieves all order import operations of an import sink key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->orders()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->get();
```
## `withProjectKeyValue("projectKey")->orders()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->withIdValue("id")->get()`

Retrieves the import operation with the given id.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->orders()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->withIdValue("id")
                ->get();
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
## `withProjectKeyValue("projectKey")->prices()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates import request for creating new prices or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->prices()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->prices()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->get()`

Retrieves all price import operations of an import sink key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->prices()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->get();
```
## `withProjectKeyValue("projectKey")->prices()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->withIdValue("id")->get()`

Retrieves the import operation with the given id.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->prices()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->withIdValue("id")
                ->get();
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
## `withProjectKeyValue("projectKey")->productDrafts()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates import request for creating new product drafts or updating existing ones.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productDrafts()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->productDrafts()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->get()`

Retrieves all import operations of an import sink key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productDrafts()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->get();
```
## `withProjectKeyValue("projectKey")->productDrafts()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->withIdValue("id")->get()`

Retrieves the import operation with the given id.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productDrafts()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->withIdValue("id")
                ->get();
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
## `withProjectKeyValue("projectKey")->productTypes()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates import request for creating new product types or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productTypes()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->productTypes()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->get()`

Retrieves all import operations of an import sink key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productTypes()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->get();
```
## `withProjectKeyValue("projectKey")->productTypes()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->withIdValue("id")->get()`

Retrieves the import operation with the given id.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productTypes()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->withIdValue("id")
                ->get();
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
## `withProjectKeyValue("projectKey")->productVariantPatches()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates a new import request for product variant patches

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productVariantPatches()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->productVariantPatches()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->get()`

Retrieves all product-variant-patches import operations of an import sink key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productVariantPatches()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->get();
```
## `withProjectKeyValue("projectKey")->productVariantPatches()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->withIdValue("id")->get()`

Retrieves the import operation with the given id.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productVariantPatches()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->withIdValue("id")
                ->get();
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
## `withProjectKeyValue("projectKey")->productVariants()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates import request for creating new product variants or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productVariants()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->productVariants()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->get()`

Retrieves all product-variant import operations of an import sink key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productVariants()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->get();
```
## `withProjectKeyValue("projectKey")->productVariants()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->withIdValue("id")->get()`

Retrieves the import operation with the given id.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productVariants()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->withIdValue("id")
                ->get();
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
## `withProjectKeyValue("projectKey")->products()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->post(null)`

Creates import request for creating new products or updating existing ones.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->products()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->products()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->get()`

Retrieves all product import operations of an import sink key.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->products()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->get();
```
## `withProjectKeyValue("projectKey")->products()->importSinkKeyWithImportSinkKeyValue("importSinkKey")->importOperations()->withIdValue("id")->get()`

Retrieves the import operation with the given id.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->products()
                ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                ->importOperations()
                ->withIdValue("id")
                ->get();
```
