# ProductUpdateBuilder

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
```

## addAsset

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->addAsset(new ProductAddAssetAction())->build()
//or
$productUpdate = $builder->addAsset(
    function (ProductAddAssetAction $action): ProductAddAssetAction {
        // modify action as needed
        return $action;
    })->build();
```
## addExternalImage

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->addExternalImage(new ProductAddExternalImageAction())->build()
//or
$productUpdate = $builder->addExternalImage(
    function (ProductAddExternalImageAction $action): ProductAddExternalImageAction {
        // modify action as needed
        return $action;
    })->build();
```
## addPrice

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->addPrice(new ProductAddPriceAction())->build()
//or
$productUpdate = $builder->addPrice(
    function (ProductAddPriceAction $action): ProductAddPriceAction {
        // modify action as needed
        return $action;
    })->build();
```
## addToCategory

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->addToCategory(new ProductAddToCategoryAction())->build()
//or
$productUpdate = $builder->addToCategory(
    function (ProductAddToCategoryAction $action): ProductAddToCategoryAction {
        // modify action as needed
        return $action;
    })->build();
```
## addVariant

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->addVariant(new ProductAddVariantAction())->build()
//or
$productUpdate = $builder->addVariant(
    function (ProductAddVariantAction $action): ProductAddVariantAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeAssetName

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->changeAssetName(new ProductChangeAssetNameAction())->build()
//or
$productUpdate = $builder->changeAssetName(
    function (ProductChangeAssetNameAction $action): ProductChangeAssetNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeAssetOrder

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->changeAssetOrder(new ProductChangeAssetOrderAction())->build()
//or
$productUpdate = $builder->changeAssetOrder(
    function (ProductChangeAssetOrderAction $action): ProductChangeAssetOrderAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeMasterVariant

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->changeMasterVariant(new ProductChangeMasterVariantAction())->build()
//or
$productUpdate = $builder->changeMasterVariant(
    function (ProductChangeMasterVariantAction $action): ProductChangeMasterVariantAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeName

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->changeName(new ProductChangeNameAction())->build()
//or
$productUpdate = $builder->changeName(
    function (ProductChangeNameAction $action): ProductChangeNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## changePrice

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->changePrice(new ProductChangePriceAction())->build()
//or
$productUpdate = $builder->changePrice(
    function (ProductChangePriceAction $action): ProductChangePriceAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeSlug

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->changeSlug(new ProductChangeSlugAction())->build()
//or
$productUpdate = $builder->changeSlug(
    function (ProductChangeSlugAction $action): ProductChangeSlugAction {
        // modify action as needed
        return $action;
    })->build();
```
## legacySetSku

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->legacySetSku(new ProductLegacySetSkuAction())->build()
//or
$productUpdate = $builder->legacySetSku(
    function (ProductLegacySetSkuAction $action): ProductLegacySetSkuAction {
        // modify action as needed
        return $action;
    })->build();
```
## moveImageToPosition

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->moveImageToPosition(new ProductMoveImageToPositionAction())->build()
//or
$productUpdate = $builder->moveImageToPosition(
    function (ProductMoveImageToPositionAction $action): ProductMoveImageToPositionAction {
        // modify action as needed
        return $action;
    })->build();
```
## publish

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->publish(new ProductPublishAction())->build()
//or
$productUpdate = $builder->publish(
    function (ProductPublishAction $action): ProductPublishAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeAsset

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->removeAsset(new ProductRemoveAssetAction())->build()
//or
$productUpdate = $builder->removeAsset(
    function (ProductRemoveAssetAction $action): ProductRemoveAssetAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeFromCategory

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->removeFromCategory(new ProductRemoveFromCategoryAction())->build()
//or
$productUpdate = $builder->removeFromCategory(
    function (ProductRemoveFromCategoryAction $action): ProductRemoveFromCategoryAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeImage

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->removeImage(new ProductRemoveImageAction())->build()
//or
$productUpdate = $builder->removeImage(
    function (ProductRemoveImageAction $action): ProductRemoveImageAction {
        // modify action as needed
        return $action;
    })->build();
```
## removePrice

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->removePrice(new ProductRemovePriceAction())->build()
//or
$productUpdate = $builder->removePrice(
    function (ProductRemovePriceAction $action): ProductRemovePriceAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeVariant

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->removeVariant(new ProductRemoveVariantAction())->build()
//or
$productUpdate = $builder->removeVariant(
    function (ProductRemoveVariantAction $action): ProductRemoveVariantAction {
        // modify action as needed
        return $action;
    })->build();
```
## revertStagedChanges

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->revertStagedChanges(new ProductRevertStagedChangesAction())->build()
//or
$productUpdate = $builder->revertStagedChanges(
    function (ProductRevertStagedChangesAction $action): ProductRevertStagedChangesAction {
        // modify action as needed
        return $action;
    })->build();
```
## revertStagedVariantChanges

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->revertStagedVariantChanges(new ProductRevertStagedVariantChangesAction())->build()
//or
$productUpdate = $builder->revertStagedVariantChanges(
    function (ProductRevertStagedVariantChangesAction $action): ProductRevertStagedVariantChangesAction {
        // modify action as needed
        return $action;
    })->build();
```
## setAssetCustomField

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setAssetCustomField(new ProductSetAssetCustomFieldAction())->build()
//or
$productUpdate = $builder->setAssetCustomField(
    function (ProductSetAssetCustomFieldAction $action): ProductSetAssetCustomFieldAction {
        // modify action as needed
        return $action;
    })->build();
```
## setAssetCustomType

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setAssetCustomType(new ProductSetAssetCustomTypeAction())->build()
//or
$productUpdate = $builder->setAssetCustomType(
    function (ProductSetAssetCustomTypeAction $action): ProductSetAssetCustomTypeAction {
        // modify action as needed
        return $action;
    })->build();
```
## setAssetDescription

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setAssetDescription(new ProductSetAssetDescriptionAction())->build()
//or
$productUpdate = $builder->setAssetDescription(
    function (ProductSetAssetDescriptionAction $action): ProductSetAssetDescriptionAction {
        // modify action as needed
        return $action;
    })->build();
```
## setAssetKey

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setAssetKey(new ProductSetAssetKeyAction())->build()
//or
$productUpdate = $builder->setAssetKey(
    function (ProductSetAssetKeyAction $action): ProductSetAssetKeyAction {
        // modify action as needed
        return $action;
    })->build();
```
## setAssetSources

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setAssetSources(new ProductSetAssetSourcesAction())->build()
//or
$productUpdate = $builder->setAssetSources(
    function (ProductSetAssetSourcesAction $action): ProductSetAssetSourcesAction {
        // modify action as needed
        return $action;
    })->build();
```
## setAssetTags

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setAssetTags(new ProductSetAssetTagsAction())->build()
//or
$productUpdate = $builder->setAssetTags(
    function (ProductSetAssetTagsAction $action): ProductSetAssetTagsAction {
        // modify action as needed
        return $action;
    })->build();
```
## setAttribute

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setAttribute(new ProductSetAttributeAction())->build()
//or
$productUpdate = $builder->setAttribute(
    function (ProductSetAttributeAction $action): ProductSetAttributeAction {
        // modify action as needed
        return $action;
    })->build();
```
## setAttributeInAllVariants

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setAttributeInAllVariants(new ProductSetAttributeInAllVariantsAction())->build()
//or
$productUpdate = $builder->setAttributeInAllVariants(
    function (ProductSetAttributeInAllVariantsAction $action): ProductSetAttributeInAllVariantsAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCategoryOrderHint

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setCategoryOrderHint(new ProductSetCategoryOrderHintAction())->build()
//or
$productUpdate = $builder->setCategoryOrderHint(
    function (ProductSetCategoryOrderHintAction $action): ProductSetCategoryOrderHintAction {
        // modify action as needed
        return $action;
    })->build();
```
## setDescription

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setDescription(new ProductSetDescriptionAction())->build()
//or
$productUpdate = $builder->setDescription(
    function (ProductSetDescriptionAction $action): ProductSetDescriptionAction {
        // modify action as needed
        return $action;
    })->build();
```
## setDiscountedPrice

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setDiscountedPrice(new ProductSetDiscountedPriceAction())->build()
//or
$productUpdate = $builder->setDiscountedPrice(
    function (ProductSetDiscountedPriceAction $action): ProductSetDiscountedPriceAction {
        // modify action as needed
        return $action;
    })->build();
```
## setKey

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setKey(new ProductSetKeyAction())->build()
//or
$productUpdate = $builder->setKey(
    function (ProductSetKeyAction $action): ProductSetKeyAction {
        // modify action as needed
        return $action;
    })->build();
```
## setMetaDescription

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setMetaDescription(new ProductSetMetaDescriptionAction())->build()
//or
$productUpdate = $builder->setMetaDescription(
    function (ProductSetMetaDescriptionAction $action): ProductSetMetaDescriptionAction {
        // modify action as needed
        return $action;
    })->build();
```
## setMetaKeywords

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setMetaKeywords(new ProductSetMetaKeywordsAction())->build()
//or
$productUpdate = $builder->setMetaKeywords(
    function (ProductSetMetaKeywordsAction $action): ProductSetMetaKeywordsAction {
        // modify action as needed
        return $action;
    })->build();
```
## setMetaTitle

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setMetaTitle(new ProductSetMetaTitleAction())->build()
//or
$productUpdate = $builder->setMetaTitle(
    function (ProductSetMetaTitleAction $action): ProductSetMetaTitleAction {
        // modify action as needed
        return $action;
    })->build();
```
## setPrices

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setPrices(new ProductSetPricesAction())->build()
//or
$productUpdate = $builder->setPrices(
    function (ProductSetPricesAction $action): ProductSetPricesAction {
        // modify action as needed
        return $action;
    })->build();
```
## setProductPriceCustomField

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setProductPriceCustomField(new ProductSetProductPriceCustomFieldAction())->build()
//or
$productUpdate = $builder->setProductPriceCustomField(
    function (ProductSetProductPriceCustomFieldAction $action): ProductSetProductPriceCustomFieldAction {
        // modify action as needed
        return $action;
    })->build();
```
## setProductPriceCustomType

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setProductPriceCustomType(new ProductSetProductPriceCustomTypeAction())->build()
//or
$productUpdate = $builder->setProductPriceCustomType(
    function (ProductSetProductPriceCustomTypeAction $action): ProductSetProductPriceCustomTypeAction {
        // modify action as needed
        return $action;
    })->build();
```
## setProductVariantKey

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setProductVariantKey(new ProductSetProductVariantKeyAction())->build()
//or
$productUpdate = $builder->setProductVariantKey(
    function (ProductSetProductVariantKeyAction $action): ProductSetProductVariantKeyAction {
        // modify action as needed
        return $action;
    })->build();
```
## setSearchKeywords

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setSearchKeywords(new ProductSetSearchKeywordsAction())->build()
//or
$productUpdate = $builder->setSearchKeywords(
    function (ProductSetSearchKeywordsAction $action): ProductSetSearchKeywordsAction {
        // modify action as needed
        return $action;
    })->build();
```
## setSku

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setSku(new ProductSetSkuAction())->build()
//or
$productUpdate = $builder->setSku(
    function (ProductSetSkuAction $action): ProductSetSkuAction {
        // modify action as needed
        return $action;
    })->build();
```
## setTaxCategory

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->setTaxCategory(new ProductSetTaxCategoryAction())->build()
//or
$productUpdate = $builder->setTaxCategory(
    function (ProductSetTaxCategoryAction $action): ProductSetTaxCategoryAction {
        // modify action as needed
        return $action;
    })->build();
```
## transitionState

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->transitionState(new ProductTransitionStateAction())->build()
//or
$productUpdate = $builder->transitionState(
    function (ProductTransitionStateAction $action): ProductTransitionStateAction {
        // modify action as needed
        return $action;
    })->build();
```
## unpublish

```php
use Commercetools\Builder\ProductUpdateBuilder;

$builder = new ProductUpdateBuilder();
$productUpdate = $builder->unpublish(new ProductUnpublishAction())->build()
//or
$productUpdate = $builder->unpublish(
    function (ProductUnpublishAction $action): ProductUnpublishAction {
        // modify action as needed
        return $action;
    })->build();
```
