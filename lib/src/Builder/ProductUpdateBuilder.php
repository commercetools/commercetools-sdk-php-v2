<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\Product\ProductUpdateAction;

use Commercetools\Types\Product\ProductAddAssetAction;
use Commercetools\Types\Product\ProductAddExternalImageAction;
use Commercetools\Types\Product\ProductAddPriceAction;
use Commercetools\Types\Product\ProductAddToCategoryAction;
use Commercetools\Types\Product\ProductAddVariantAction;
use Commercetools\Types\Product\ProductChangeAssetNameAction;
use Commercetools\Types\Product\ProductChangeAssetOrderAction;
use Commercetools\Types\Product\ProductChangeMasterVariantAction;
use Commercetools\Types\Product\ProductChangeNameAction;
use Commercetools\Types\Product\ProductChangePriceAction;
use Commercetools\Types\Product\ProductChangeSlugAction;
use Commercetools\Types\Product\ProductLegacySetSkuAction;
use Commercetools\Types\Product\ProductMoveImageToPositionAction;
use Commercetools\Types\Product\ProductPublishAction;
use Commercetools\Types\Product\ProductRemoveAssetAction;
use Commercetools\Types\Product\ProductRemoveFromCategoryAction;
use Commercetools\Types\Product\ProductRemoveImageAction;
use Commercetools\Types\Product\ProductRemovePriceAction;
use Commercetools\Types\Product\ProductRemoveVariantAction;
use Commercetools\Types\Product\ProductRevertStagedChangesAction;
use Commercetools\Types\Product\ProductRevertStagedVariantChangesAction;
use Commercetools\Types\Product\ProductSetAssetCustomFieldAction;
use Commercetools\Types\Product\ProductSetAssetCustomTypeAction;
use Commercetools\Types\Product\ProductSetAssetDescriptionAction;
use Commercetools\Types\Product\ProductSetAssetKeyAction;
use Commercetools\Types\Product\ProductSetAssetSourcesAction;
use Commercetools\Types\Product\ProductSetAssetTagsAction;
use Commercetools\Types\Product\ProductSetAttributeAction;
use Commercetools\Types\Product\ProductSetAttributeInAllVariantsAction;
use Commercetools\Types\Product\ProductSetCategoryOrderHintAction;
use Commercetools\Types\Product\ProductSetDescriptionAction;
use Commercetools\Types\Product\ProductSetDiscountedPriceAction;
use Commercetools\Types\Product\ProductSetKeyAction;
use Commercetools\Types\Product\ProductSetMetaDescriptionAction;
use Commercetools\Types\Product\ProductSetMetaKeywordsAction;
use Commercetools\Types\Product\ProductSetMetaTitleAction;
use Commercetools\Types\Product\ProductSetPricesAction;
use Commercetools\Types\Product\ProductSetProductPriceCustomFieldAction;
use Commercetools\Types\Product\ProductSetProductPriceCustomTypeAction;
use Commercetools\Types\Product\ProductSetProductVariantKeyAction;
use Commercetools\Types\Product\ProductSetSearchKeywordsAction;
use Commercetools\Types\Product\ProductSetSkuAction;
use Commercetools\Types\Product\ProductSetTaxCategoryAction;
use Commercetools\Types\Product\ProductTransitionStateAction;
use Commercetools\Types\Product\ProductUnpublishAction;
use Commercetools\Types\Product\Product;
use Commercetools\Types\Product\ProductUpdate;
use Commercetools\Request\ByProjectKeyProductsByIDPost;


class ProductUpdateBuilder extends BaseBuilder {
    /**
     * @var Product
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    private $requestBuilderCallback;

    public function __construct(callable $requestBuilderCallback = null)
    {
        $this->requestBuilderCallback = $requestBuilderCallback;
    }

    /**
     * @param ProductAddAssetAction|callable $action builder function <code>
     *   function(ProductAddAssetAction $action): ProductAddAssetAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addAsset($action = null)
    {
        $action = $this->resolveAction(ProductAddAssetAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductAddExternalImageAction|callable $action builder function <code>
     *   function(ProductAddExternalImageAction $action): ProductAddExternalImageAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addExternalImage($action = null)
    {
        $action = $this->resolveAction(ProductAddExternalImageAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductAddPriceAction|callable $action builder function <code>
     *   function(ProductAddPriceAction $action): ProductAddPriceAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addPrice($action = null)
    {
        $action = $this->resolveAction(ProductAddPriceAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductAddToCategoryAction|callable $action builder function <code>
     *   function(ProductAddToCategoryAction $action): ProductAddToCategoryAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addToCategory($action = null)
    {
        $action = $this->resolveAction(ProductAddToCategoryAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductAddVariantAction|callable $action builder function <code>
     *   function(ProductAddVariantAction $action): ProductAddVariantAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addVariant($action = null)
    {
        $action = $this->resolveAction(ProductAddVariantAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductChangeAssetNameAction|callable $action builder function <code>
     *   function(ProductChangeAssetNameAction $action): ProductChangeAssetNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeAssetName($action = null)
    {
        $action = $this->resolveAction(ProductChangeAssetNameAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductChangeAssetOrderAction|callable $action builder function <code>
     *   function(ProductChangeAssetOrderAction $action): ProductChangeAssetOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeAssetOrder($action = null)
    {
        $action = $this->resolveAction(ProductChangeAssetOrderAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductChangeMasterVariantAction|callable $action builder function <code>
     *   function(ProductChangeMasterVariantAction $action): ProductChangeMasterVariantAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeMasterVariant($action = null)
    {
        $action = $this->resolveAction(ProductChangeMasterVariantAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductChangeNameAction|callable $action builder function <code>
     *   function(ProductChangeNameAction $action): ProductChangeNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName($action = null)
    {
        $action = $this->resolveAction(ProductChangeNameAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductChangePriceAction|callable $action builder function <code>
     *   function(ProductChangePriceAction $action): ProductChangePriceAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changePrice($action = null)
    {
        $action = $this->resolveAction(ProductChangePriceAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductChangeSlugAction|callable $action builder function <code>
     *   function(ProductChangeSlugAction $action): ProductChangeSlugAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeSlug($action = null)
    {
        $action = $this->resolveAction(ProductChangeSlugAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductLegacySetSkuAction|callable $action builder function <code>
     *   function(ProductLegacySetSkuAction $action): ProductLegacySetSkuAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function legacySetSku($action = null)
    {
        $action = $this->resolveAction(ProductLegacySetSkuAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductMoveImageToPositionAction|callable $action builder function <code>
     *   function(ProductMoveImageToPositionAction $action): ProductMoveImageToPositionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function moveImageToPosition($action = null)
    {
        $action = $this->resolveAction(ProductMoveImageToPositionAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductPublishAction|callable $action builder function <code>
     *   function(ProductPublishAction $action): ProductPublishAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function publish($action = null)
    {
        $action = $this->resolveAction(ProductPublishAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductRemoveAssetAction|callable $action builder function <code>
     *   function(ProductRemoveAssetAction $action): ProductRemoveAssetAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeAsset($action = null)
    {
        $action = $this->resolveAction(ProductRemoveAssetAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductRemoveFromCategoryAction|callable $action builder function <code>
     *   function(ProductRemoveFromCategoryAction $action): ProductRemoveFromCategoryAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeFromCategory($action = null)
    {
        $action = $this->resolveAction(ProductRemoveFromCategoryAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductRemoveImageAction|callable $action builder function <code>
     *   function(ProductRemoveImageAction $action): ProductRemoveImageAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeImage($action = null)
    {
        $action = $this->resolveAction(ProductRemoveImageAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductRemovePriceAction|callable $action builder function <code>
     *   function(ProductRemovePriceAction $action): ProductRemovePriceAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removePrice($action = null)
    {
        $action = $this->resolveAction(ProductRemovePriceAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductRemoveVariantAction|callable $action builder function <code>
     *   function(ProductRemoveVariantAction $action): ProductRemoveVariantAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeVariant($action = null)
    {
        $action = $this->resolveAction(ProductRemoveVariantAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductRevertStagedChangesAction|callable $action builder function <code>
     *   function(ProductRevertStagedChangesAction $action): ProductRevertStagedChangesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function revertStagedChanges($action = null)
    {
        $action = $this->resolveAction(ProductRevertStagedChangesAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductRevertStagedVariantChangesAction|callable $action builder function <code>
     *   function(ProductRevertStagedVariantChangesAction $action): ProductRevertStagedVariantChangesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function revertStagedVariantChanges($action = null)
    {
        $action = $this->resolveAction(ProductRevertStagedVariantChangesAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetAssetCustomFieldAction|callable $action builder function <code>
     *   function(ProductSetAssetCustomFieldAction $action): ProductSetAssetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetCustomField($action = null)
    {
        $action = $this->resolveAction(ProductSetAssetCustomFieldAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetAssetCustomTypeAction|callable $action builder function <code>
     *   function(ProductSetAssetCustomTypeAction $action): ProductSetAssetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetCustomType($action = null)
    {
        $action = $this->resolveAction(ProductSetAssetCustomTypeAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetAssetDescriptionAction|callable $action builder function <code>
     *   function(ProductSetAssetDescriptionAction $action): ProductSetAssetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetDescription($action = null)
    {
        $action = $this->resolveAction(ProductSetAssetDescriptionAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetAssetKeyAction|callable $action builder function <code>
     *   function(ProductSetAssetKeyAction $action): ProductSetAssetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetKey($action = null)
    {
        $action = $this->resolveAction(ProductSetAssetKeyAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetAssetSourcesAction|callable $action builder function <code>
     *   function(ProductSetAssetSourcesAction $action): ProductSetAssetSourcesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetSources($action = null)
    {
        $action = $this->resolveAction(ProductSetAssetSourcesAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetAssetTagsAction|callable $action builder function <code>
     *   function(ProductSetAssetTagsAction $action): ProductSetAssetTagsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetTags($action = null)
    {
        $action = $this->resolveAction(ProductSetAssetTagsAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetAttributeAction|callable $action builder function <code>
     *   function(ProductSetAttributeAction $action): ProductSetAttributeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAttribute($action = null)
    {
        $action = $this->resolveAction(ProductSetAttributeAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetAttributeInAllVariantsAction|callable $action builder function <code>
     *   function(ProductSetAttributeInAllVariantsAction $action): ProductSetAttributeInAllVariantsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAttributeInAllVariants($action = null)
    {
        $action = $this->resolveAction(ProductSetAttributeInAllVariantsAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetCategoryOrderHintAction|callable $action builder function <code>
     *   function(ProductSetCategoryOrderHintAction $action): ProductSetCategoryOrderHintAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCategoryOrderHint($action = null)
    {
        $action = $this->resolveAction(ProductSetCategoryOrderHintAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetDescriptionAction|callable $action builder function <code>
     *   function(ProductSetDescriptionAction $action): ProductSetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription($action = null)
    {
        $action = $this->resolveAction(ProductSetDescriptionAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetDiscountedPriceAction|callable $action builder function <code>
     *   function(ProductSetDiscountedPriceAction $action): ProductSetDiscountedPriceAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDiscountedPrice($action = null)
    {
        $action = $this->resolveAction(ProductSetDiscountedPriceAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetKeyAction|callable $action builder function <code>
     *   function(ProductSetKeyAction $action): ProductSetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey($action = null)
    {
        $action = $this->resolveAction(ProductSetKeyAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetMetaDescriptionAction|callable $action builder function <code>
     *   function(ProductSetMetaDescriptionAction $action): ProductSetMetaDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMetaDescription($action = null)
    {
        $action = $this->resolveAction(ProductSetMetaDescriptionAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetMetaKeywordsAction|callable $action builder function <code>
     *   function(ProductSetMetaKeywordsAction $action): ProductSetMetaKeywordsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMetaKeywords($action = null)
    {
        $action = $this->resolveAction(ProductSetMetaKeywordsAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetMetaTitleAction|callable $action builder function <code>
     *   function(ProductSetMetaTitleAction $action): ProductSetMetaTitleAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMetaTitle($action = null)
    {
        $action = $this->resolveAction(ProductSetMetaTitleAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetPricesAction|callable $action builder function <code>
     *   function(ProductSetPricesAction $action): ProductSetPricesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setPrices($action = null)
    {
        $action = $this->resolveAction(ProductSetPricesAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetProductPriceCustomFieldAction|callable $action builder function <code>
     *   function(ProductSetProductPriceCustomFieldAction $action): ProductSetProductPriceCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setProductPriceCustomField($action = null)
    {
        $action = $this->resolveAction(ProductSetProductPriceCustomFieldAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetProductPriceCustomTypeAction|callable $action builder function <code>
     *   function(ProductSetProductPriceCustomTypeAction $action): ProductSetProductPriceCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setProductPriceCustomType($action = null)
    {
        $action = $this->resolveAction(ProductSetProductPriceCustomTypeAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetProductVariantKeyAction|callable $action builder function <code>
     *   function(ProductSetProductVariantKeyAction $action): ProductSetProductVariantKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setProductVariantKey($action = null)
    {
        $action = $this->resolveAction(ProductSetProductVariantKeyAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetSearchKeywordsAction|callable $action builder function <code>
     *   function(ProductSetSearchKeywordsAction $action): ProductSetSearchKeywordsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setSearchKeywords($action = null)
    {
        $action = $this->resolveAction(ProductSetSearchKeywordsAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetSkuAction|callable $action builder function <code>
     *   function(ProductSetSkuAction $action): ProductSetSkuAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setSku($action = null)
    {
        $action = $this->resolveAction(ProductSetSkuAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductSetTaxCategoryAction|callable $action builder function <code>
     *   function(ProductSetTaxCategoryAction $action): ProductSetTaxCategoryAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setTaxCategory($action = null)
    {
        $action = $this->resolveAction(ProductSetTaxCategoryAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductTransitionStateAction|callable $action builder function <code>
     *   function(ProductTransitionStateAction $action): ProductTransitionStateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function transitionState($action = null)
    {
        $action = $this->resolveAction(ProductTransitionStateAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }
    /**
     * @param ProductUnpublishAction|callable $action builder function <code>
     *   function(ProductUnpublishAction $action): ProductUnpublishAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function unpublish($action = null)
    {
        $action = $this->resolveAction(ProductUnpublishAction::class, $action);
        $this->tryAddAction($action);

        return $this;
    }

    /**
     * @param ProductUpdateAction $action
     * @return $this;
     */
    public function addAction(ProductUpdateAction $action)
    {
        $this->actions[] = $action;
        return $this;
    }

    private function addAndResolveAction($class, $action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData($class, null);
            $action = $this->callback($emptyAction, $callback);
        }

        return $action;
    }

    private function tryAddAction(ProductUpdateAction $action = null)
    {
        if (!is_null($action)) {
            $this->addAction($action);
        }
        return $this;
    }

    /*
     * @param $action
     * @param callable $callback
     */
    private function callback($action, callable $callback = null) {
        if (!is_null($callback)) {
            $action = $callback($action);
        }
        return $action;
    }

    /**
     * @param Product $product
     * @return $this
     */
    public function with(Product $product)
    {
        $this->resource = $product;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?Product
    {
        return $this->resource;
    }

    /**
     * Build ProductUpdate
     * @return ProductUpdate
     */
    public function build(): ProductUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(ProductUpdate::class, $data);
        if ($update instanceof ProductUpdate &&
            $this->resource instanceof Product
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyProductsByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
