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
     *   function (ProductAddAssetAction $action): ProductAddAssetAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addAsset($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductAddAssetAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductAddAssetAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductAddExternalImageAction|callable $action builder function <code>
     *   function (ProductAddExternalImageAction $action): ProductAddExternalImageAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addExternalImage($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductAddExternalImageAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductAddExternalImageAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductAddPriceAction|callable $action builder function <code>
     *   function (ProductAddPriceAction $action): ProductAddPriceAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addPrice($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductAddPriceAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductAddPriceAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductAddToCategoryAction|callable $action builder function <code>
     *   function (ProductAddToCategoryAction $action): ProductAddToCategoryAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addToCategory($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductAddToCategoryAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductAddToCategoryAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductAddVariantAction|callable $action builder function <code>
     *   function (ProductAddVariantAction $action): ProductAddVariantAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addVariant($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductAddVariantAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductAddVariantAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductChangeAssetNameAction|callable $action builder function <code>
     *   function (ProductChangeAssetNameAction $action): ProductChangeAssetNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeAssetName($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductChangeAssetNameAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductChangeAssetNameAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductChangeAssetOrderAction|callable $action builder function <code>
     *   function (ProductChangeAssetOrderAction $action): ProductChangeAssetOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeAssetOrder($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductChangeAssetOrderAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductChangeAssetOrderAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductChangeMasterVariantAction|callable $action builder function <code>
     *   function (ProductChangeMasterVariantAction $action): ProductChangeMasterVariantAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeMasterVariant($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductChangeMasterVariantAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductChangeMasterVariantAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductChangeNameAction|callable $action builder function <code>
     *   function (ProductChangeNameAction $action): ProductChangeNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductChangeNameAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductChangeNameAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductChangePriceAction|callable $action builder function <code>
     *   function (ProductChangePriceAction $action): ProductChangePriceAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changePrice($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductChangePriceAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductChangePriceAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductChangeSlugAction|callable $action builder function <code>
     *   function (ProductChangeSlugAction $action): ProductChangeSlugAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeSlug($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductChangeSlugAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductChangeSlugAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductLegacySetSkuAction|callable $action builder function <code>
     *   function (ProductLegacySetSkuAction $action): ProductLegacySetSkuAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function legacySetSku($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductLegacySetSkuAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductLegacySetSkuAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductMoveImageToPositionAction|callable $action builder function <code>
     *   function (ProductMoveImageToPositionAction $action): ProductMoveImageToPositionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function moveImageToPosition($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductMoveImageToPositionAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductMoveImageToPositionAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductPublishAction|callable $action builder function <code>
     *   function (ProductPublishAction $action): ProductPublishAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function publish($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductPublishAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductPublishAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductRemoveAssetAction|callable $action builder function <code>
     *   function (ProductRemoveAssetAction $action): ProductRemoveAssetAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeAsset($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductRemoveAssetAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductRemoveAssetAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductRemoveFromCategoryAction|callable $action builder function <code>
     *   function (ProductRemoveFromCategoryAction $action): ProductRemoveFromCategoryAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeFromCategory($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductRemoveFromCategoryAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductRemoveFromCategoryAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductRemoveImageAction|callable $action builder function <code>
     *   function (ProductRemoveImageAction $action): ProductRemoveImageAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeImage($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductRemoveImageAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductRemoveImageAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductRemovePriceAction|callable $action builder function <code>
     *   function (ProductRemovePriceAction $action): ProductRemovePriceAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removePrice($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductRemovePriceAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductRemovePriceAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductRemoveVariantAction|callable $action builder function <code>
     *   function (ProductRemoveVariantAction $action): ProductRemoveVariantAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeVariant($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductRemoveVariantAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductRemoveVariantAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductRevertStagedChangesAction|callable $action builder function <code>
     *   function (ProductRevertStagedChangesAction $action): ProductRevertStagedChangesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function revertStagedChanges($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductRevertStagedChangesAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductRevertStagedChangesAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductRevertStagedVariantChangesAction|callable $action builder function <code>
     *   function (ProductRevertStagedVariantChangesAction $action): ProductRevertStagedVariantChangesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function revertStagedVariantChanges($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductRevertStagedVariantChangesAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductRevertStagedVariantChangesAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetAssetCustomFieldAction|callable $action builder function <code>
     *   function (ProductSetAssetCustomFieldAction $action): ProductSetAssetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetCustomField($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetAssetCustomFieldAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetAssetCustomFieldAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetAssetCustomTypeAction|callable $action builder function <code>
     *   function (ProductSetAssetCustomTypeAction $action): ProductSetAssetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetCustomType($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetAssetCustomTypeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetAssetCustomTypeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetAssetDescriptionAction|callable $action builder function <code>
     *   function (ProductSetAssetDescriptionAction $action): ProductSetAssetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetDescription($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetAssetDescriptionAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetAssetDescriptionAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetAssetKeyAction|callable $action builder function <code>
     *   function (ProductSetAssetKeyAction $action): ProductSetAssetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetKey($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetAssetKeyAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetAssetKeyAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetAssetSourcesAction|callable $action builder function <code>
     *   function (ProductSetAssetSourcesAction $action): ProductSetAssetSourcesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetSources($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetAssetSourcesAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetAssetSourcesAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetAssetTagsAction|callable $action builder function <code>
     *   function (ProductSetAssetTagsAction $action): ProductSetAssetTagsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetTags($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetAssetTagsAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetAssetTagsAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetAttributeAction|callable $action builder function <code>
     *   function (ProductSetAttributeAction $action): ProductSetAttributeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAttribute($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetAttributeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetAttributeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetAttributeInAllVariantsAction|callable $action builder function <code>
     *   function (ProductSetAttributeInAllVariantsAction $action): ProductSetAttributeInAllVariantsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAttributeInAllVariants($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetAttributeInAllVariantsAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetAttributeInAllVariantsAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetCategoryOrderHintAction|callable $action builder function <code>
     *   function (ProductSetCategoryOrderHintAction $action): ProductSetCategoryOrderHintAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCategoryOrderHint($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetCategoryOrderHintAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetCategoryOrderHintAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetDescriptionAction|callable $action builder function <code>
     *   function (ProductSetDescriptionAction $action): ProductSetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetDescriptionAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetDescriptionAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetDiscountedPriceAction|callable $action builder function <code>
     *   function (ProductSetDiscountedPriceAction $action): ProductSetDiscountedPriceAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDiscountedPrice($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetDiscountedPriceAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetDiscountedPriceAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetKeyAction|callable $action builder function <code>
     *   function (ProductSetKeyAction $action): ProductSetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetKeyAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetKeyAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetMetaDescriptionAction|callable $action builder function <code>
     *   function (ProductSetMetaDescriptionAction $action): ProductSetMetaDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMetaDescription($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetMetaDescriptionAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetMetaDescriptionAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetMetaKeywordsAction|callable $action builder function <code>
     *   function (ProductSetMetaKeywordsAction $action): ProductSetMetaKeywordsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMetaKeywords($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetMetaKeywordsAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetMetaKeywordsAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetMetaTitleAction|callable $action builder function <code>
     *   function (ProductSetMetaTitleAction $action): ProductSetMetaTitleAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMetaTitle($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetMetaTitleAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetMetaTitleAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetPricesAction|callable $action builder function <code>
     *   function (ProductSetPricesAction $action): ProductSetPricesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setPrices($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetPricesAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetPricesAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetProductPriceCustomFieldAction|callable $action builder function <code>
     *   function (ProductSetProductPriceCustomFieldAction $action): ProductSetProductPriceCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setProductPriceCustomField($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetProductPriceCustomFieldAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetProductPriceCustomFieldAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetProductPriceCustomTypeAction|callable $action builder function <code>
     *   function (ProductSetProductPriceCustomTypeAction $action): ProductSetProductPriceCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setProductPriceCustomType($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetProductPriceCustomTypeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetProductPriceCustomTypeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetProductVariantKeyAction|callable $action builder function <code>
     *   function (ProductSetProductVariantKeyAction $action): ProductSetProductVariantKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setProductVariantKey($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetProductVariantKeyAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetProductVariantKeyAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetSearchKeywordsAction|callable $action builder function <code>
     *   function (ProductSetSearchKeywordsAction $action): ProductSetSearchKeywordsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setSearchKeywords($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetSearchKeywordsAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetSearchKeywordsAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetSkuAction|callable $action builder function <code>
     *   function (ProductSetSkuAction $action): ProductSetSkuAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setSku($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetSkuAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetSkuAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductSetTaxCategoryAction|callable $action builder function <code>
     *   function (ProductSetTaxCategoryAction $action): ProductSetTaxCategoryAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setTaxCategory($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductSetTaxCategoryAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductSetTaxCategoryAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductTransitionStateAction|callable $action builder function <code>
     *   function (ProductTransitionStateAction $action): ProductTransitionStateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function transitionState($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductTransitionStateAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductTransitionStateAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProductUnpublishAction|callable $action builder function <code>
     *   function (ProductUnpublishAction $action): ProductUnpublishAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function unpublish($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ProductUnpublishAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ProductUnpublishAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
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
