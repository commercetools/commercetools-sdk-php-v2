<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\Category\CategoryUpdateAction;

use Commercetools\Types\Category\CategoryAddAssetAction;
use Commercetools\Types\Category\CategoryChangeAssetNameAction;
use Commercetools\Types\Category\CategoryChangeAssetOrderAction;
use Commercetools\Types\Category\CategoryChangeNameAction;
use Commercetools\Types\Category\CategoryChangeOrderHintAction;
use Commercetools\Types\Category\CategoryChangeParentAction;
use Commercetools\Types\Category\CategoryChangeSlugAction;
use Commercetools\Types\Category\CategoryRemoveAssetAction;
use Commercetools\Types\Category\CategorySetAssetCustomFieldAction;
use Commercetools\Types\Category\CategorySetAssetCustomTypeAction;
use Commercetools\Types\Category\CategorySetAssetDescriptionAction;
use Commercetools\Types\Category\CategorySetAssetKeyAction;
use Commercetools\Types\Category\CategorySetAssetSourcesAction;
use Commercetools\Types\Category\CategorySetAssetTagsAction;
use Commercetools\Types\Category\CategorySetCustomFieldAction;
use Commercetools\Types\Category\CategorySetCustomTypeAction;
use Commercetools\Types\Category\CategorySetDescriptionAction;
use Commercetools\Types\Category\CategorySetExternalIdAction;
use Commercetools\Types\Category\CategorySetKeyAction;
use Commercetools\Types\Category\CategorySetMetaDescriptionAction;
use Commercetools\Types\Category\CategorySetMetaKeywordsAction;
use Commercetools\Types\Category\CategorySetMetaTitleAction;
use Commercetools\Types\Category\Category;
use Commercetools\Types\Category\CategoryUpdate;
use Commercetools\Request\ByProjectKeyCategoriesByIDPost;


class CategoryUpdateBuilder extends BaseBuilder {
    /**
     * @var Category
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
     * @param CategoryAddAssetAction|callable $action builder function <code>
     *   function (CategoryAddAssetAction $action): CategoryAddAssetAction {
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
            $emptyAction = $this->mapData(CategoryAddAssetAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategoryAddAssetAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategoryChangeAssetNameAction|callable $action builder function <code>
     *   function (CategoryChangeAssetNameAction $action): CategoryChangeAssetNameAction {
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
            $emptyAction = $this->mapData(CategoryChangeAssetNameAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategoryChangeAssetNameAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategoryChangeAssetOrderAction|callable $action builder function <code>
     *   function (CategoryChangeAssetOrderAction $action): CategoryChangeAssetOrderAction {
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
            $emptyAction = $this->mapData(CategoryChangeAssetOrderAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategoryChangeAssetOrderAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategoryChangeNameAction|callable $action builder function <code>
     *   function (CategoryChangeNameAction $action): CategoryChangeNameAction {
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
            $emptyAction = $this->mapData(CategoryChangeNameAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategoryChangeNameAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategoryChangeOrderHintAction|callable $action builder function <code>
     *   function (CategoryChangeOrderHintAction $action): CategoryChangeOrderHintAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeOrderHint($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CategoryChangeOrderHintAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategoryChangeOrderHintAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategoryChangeParentAction|callable $action builder function <code>
     *   function (CategoryChangeParentAction $action): CategoryChangeParentAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeParent($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CategoryChangeParentAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategoryChangeParentAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategoryChangeSlugAction|callable $action builder function <code>
     *   function (CategoryChangeSlugAction $action): CategoryChangeSlugAction {
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
            $emptyAction = $this->mapData(CategoryChangeSlugAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategoryChangeSlugAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategoryRemoveAssetAction|callable $action builder function <code>
     *   function (CategoryRemoveAssetAction $action): CategoryRemoveAssetAction {
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
            $emptyAction = $this->mapData(CategoryRemoveAssetAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategoryRemoveAssetAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategorySetAssetCustomFieldAction|callable $action builder function <code>
     *   function (CategorySetAssetCustomFieldAction $action): CategorySetAssetCustomFieldAction {
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
            $emptyAction = $this->mapData(CategorySetAssetCustomFieldAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategorySetAssetCustomFieldAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategorySetAssetCustomTypeAction|callable $action builder function <code>
     *   function (CategorySetAssetCustomTypeAction $action): CategorySetAssetCustomTypeAction {
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
            $emptyAction = $this->mapData(CategorySetAssetCustomTypeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategorySetAssetCustomTypeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategorySetAssetDescriptionAction|callable $action builder function <code>
     *   function (CategorySetAssetDescriptionAction $action): CategorySetAssetDescriptionAction {
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
            $emptyAction = $this->mapData(CategorySetAssetDescriptionAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategorySetAssetDescriptionAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategorySetAssetKeyAction|callable $action builder function <code>
     *   function (CategorySetAssetKeyAction $action): CategorySetAssetKeyAction {
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
            $emptyAction = $this->mapData(CategorySetAssetKeyAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategorySetAssetKeyAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategorySetAssetSourcesAction|callable $action builder function <code>
     *   function (CategorySetAssetSourcesAction $action): CategorySetAssetSourcesAction {
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
            $emptyAction = $this->mapData(CategorySetAssetSourcesAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategorySetAssetSourcesAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategorySetAssetTagsAction|callable $action builder function <code>
     *   function (CategorySetAssetTagsAction $action): CategorySetAssetTagsAction {
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
            $emptyAction = $this->mapData(CategorySetAssetTagsAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategorySetAssetTagsAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategorySetCustomFieldAction|callable $action builder function <code>
     *   function (CategorySetCustomFieldAction $action): CategorySetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CategorySetCustomFieldAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategorySetCustomFieldAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategorySetCustomTypeAction|callable $action builder function <code>
     *   function (CategorySetCustomTypeAction $action): CategorySetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CategorySetCustomTypeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategorySetCustomTypeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategorySetDescriptionAction|callable $action builder function <code>
     *   function (CategorySetDescriptionAction $action): CategorySetDescriptionAction {
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
            $emptyAction = $this->mapData(CategorySetDescriptionAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategorySetDescriptionAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategorySetExternalIdAction|callable $action builder function <code>
     *   function (CategorySetExternalIdAction $action): CategorySetExternalIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setExternalId($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CategorySetExternalIdAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategorySetExternalIdAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategorySetKeyAction|callable $action builder function <code>
     *   function (CategorySetKeyAction $action): CategorySetKeyAction {
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
            $emptyAction = $this->mapData(CategorySetKeyAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategorySetKeyAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategorySetMetaDescriptionAction|callable $action builder function <code>
     *   function (CategorySetMetaDescriptionAction $action): CategorySetMetaDescriptionAction {
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
            $emptyAction = $this->mapData(CategorySetMetaDescriptionAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategorySetMetaDescriptionAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategorySetMetaKeywordsAction|callable $action builder function <code>
     *   function (CategorySetMetaKeywordsAction $action): CategorySetMetaKeywordsAction {
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
            $emptyAction = $this->mapData(CategorySetMetaKeywordsAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategorySetMetaKeywordsAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CategorySetMetaTitleAction|callable $action builder function <code>
     *   function (CategorySetMetaTitleAction $action): CategorySetMetaTitleAction {
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
            $emptyAction = $this->mapData(CategorySetMetaTitleAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CategorySetMetaTitleAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }

    /**
     * @param CategoryUpdateAction $action
     * @return $this;
     */
    public function addAction(CategoryUpdateAction $action)
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
     * @param Category $category
     * @return $this
     */
    public function with(Category $category)
    {
        $this->resource = $category;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?Category
    {
        return $this->resource;
    }

    /**
     * Build CategoryUpdate
     * @return CategoryUpdate
     */
    public function build(): CategoryUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(CategoryUpdate::class, $data);
        if ($update instanceof CategoryUpdate &&
            $this->resource instanceof Category
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyCategoriesByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
