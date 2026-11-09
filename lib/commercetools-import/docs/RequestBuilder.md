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

When updating existing Categories, `assets` and `custom` omitted from a [CategoryImport](ctp:import:type:CategoryImport) are removed. Include all existing values you want to keep.


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

When updating existing Customers, `addresses`, `customerGroup`, and `custom` omitted from a [CustomerImport](ctp:import:type:CustomerImport) are removed. Include all existing values you want to keep.


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

Generates the [ImportContainerCreated](ctp:api:type:ImportContainerCreatedEvent) Event.


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

Generates the [ImportContainerDeleted](ctp:api:type:ImportContainerDeletedEvent) Event.


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

Retrieves an [ImportSummary](ctp:import:type:ImportSummary) for the [ImportContainer](ctp:import:type:ImportContainer) with the provided `importContainerKey`. The returned values are [eventually consistent](/general-concepts#eventual-consistency).


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

When updating existing InventoryEntries, `supplyChannel` and `custom` omitted from an [InventoryImport](ctp:import:type:InventoryImport) are removed. Include all existing values you want to keep.


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

Creates an Import Request for Embedded Prices.

When updating an existing Embedded Price, optional values omitted from a [PriceImport](ctp:import:type:PriceImport), such as `country`, `channel`, `customerGroup`, `validFrom`, `validUntil`, `tiers`, `discounted`, and `custom`, are removed. Include all existing values you want to keep. Other Prices of the ProductVariant are not changed.


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

When updating existing Products, ProductVariants, Embedded Prices, images, Assets, Attributes of the Product and its ProductVariants, `categories`, and `taxCategory` omitted from a [ProductDraftImport](ctp:import:type:ProductDraftImport) are removed. Omitting the product-level `attributes` field removes all product-level Attributes, and a partial list removes every Attribute that is not in the list. Include all existing values you want to keep.


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

When updating existing Product Selections, an `assignments` list in a [ProductSelectionImport](ctp:import:type:ProductSelectionImport) becomes the complete set of assignments, and Products omitted from the list are removed from the Product Selection.


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
## `withProjectKeyValue("projectKey")->productTailorings()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates an Import Request for Product Tailoring.

### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->productTailorings()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
## `withProjectKeyValue("projectKey")->productTypes()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates an Import Request for ProductTypes.

When updating existing ProductTypes, AttributeDefinitions omitted from a [ProductTypeImport](ctp:import:type:ProductTypeImport) are removed, and the corresponding Attribute values are deleted from all Products with this ProductType. Omitting the `attributes` field removes all AttributeDefinitions. This data cannot be recovered.


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
Only the Attributes included in the patch are changed. All other Attributes, images, Assets, and Prices of the Product Variant remain unchanged.
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

When updating existing ProductVariants, `sku`, `attributes`, `images`, and `assets` omitted from a [ProductVariantImport](ctp:import:type:ProductVariantImport) are removed. Include all existing values you want to keep. To update only some Attributes, use the [Product Variant Patches](ctp:import:endpoint:/{projectKey}/product-variant-patches/import-containers/{importContainerKey}:POST) endpoint.

ProductVariantImport does not change the Embedded Prices of an existing ProductVariant. A new ProductVariant created by this import has no Embedded Prices. Import them separately with the [Embedded Prices](ctp:import:endpoint:/{projectKey}/prices/import-containers/{importContainerKey}:POST) endpoint. StandalonePrices are not affected.


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

When updating existing Products, `categories`, `taxCategory`, and product-level `attributes` omitted from a [ProductImport](ctp:import:type:ProductImport) are removed. Omitting `attributes` removes all product-level Attributes, and a partial list removes every Attribute that is not in the list. Include all existing values you want to keep. ProductVariants and Prices are not changed.


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

When updating existing Standalone Prices, optional values omitted from a [StandalonePriceImport](ctp:import:type:StandalonePriceImport), such as `validFrom`, `validUntil`, `tiers`, `discounted`, and `custom`, are removed. Include all existing values you want to keep.

StandalonePriceImport has no `staged` field. If the existing StandalonePrice has staged changes, every update through the Import API discards them, even if the imported `value` is the same. To keep the staged changes, first apply them with the [Apply Staged Changes](ctp:api:type:StandalonePriceApplyStagedChangesAction) update action.


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
## `withProjectKeyValue("projectKey")->variants()->importContainers()->withImportContainerKeyValue("importContainerKey")->post(null)`

Creates an Import Request for Variants.

This endpoint is only available for Projects with `productCatalogModel` set to `Modular`.

When updating existing Variants, `images`, `attributes`, and `assets` omitted from a [VariantImport](ctp:import:type:VariantImport) are removed. Include all existing values you want to keep.


### Example
```php
use Commercetools\Import\Client\ImportRequestBuilder;

$builder =  new ImportRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->variants()
                ->importContainers()
                ->withImportContainerKeyValue("importContainerKey")
                ->post(null);
```
