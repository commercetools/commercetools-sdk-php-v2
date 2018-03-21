<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Types\Category\CategoryUpdateAction;

use Commercetools\Types\Category\CategoryChangeSlugAction;
use Commercetools\Types\Category\CategorySetCustomTypeAction;
use Commercetools\Types\Category\CategorySetKeyAction;
use Commercetools\Types\Category\CategoryChangeNameAction;
use Commercetools\Types\Category\CategorySetAssetSourcesAction;
use Commercetools\Types\Category\CategorySetMetaTitleAction;
use Commercetools\Types\Category\CategorySetCustomFieldAction;
use Commercetools\Types\Category\CategorySetAssetKeyAction;
use Commercetools\Types\Category\CategoryRemoveAssetAction;
use Commercetools\Types\Category\CategorySetDescriptionAction;
use Commercetools\Types\Category\CategoryChangeParentAction;
use Commercetools\Types\Category\CategorySetAssetCustomFieldAction;
use Commercetools\Types\Category\CategorySetMetaDescriptionAction;
use Commercetools\Types\Category\CategorySetAssetTagsAction;
use Commercetools\Types\Category\CategoryChangeOrderHintAction;
use Commercetools\Types\Category\CategoryChangeAssetOrderAction;
use Commercetools\Types\Category\CategorySetAssetCustomTypeAction;
use Commercetools\Types\Category\CategoryChangeAssetNameAction;
use Commercetools\Types\Category\CategoryAddAssetAction;
use Commercetools\Types\Category\CategorySetMetaKeywordsAction;
use Commercetools\Types\Category\CategorySetExternalIdAction;
use Commercetools\Types\Category\CategorySetAssetDescriptionAction;
use Commercetools\Types\Category\Category;
use Commercetools\Types\Category\CategoryUpdate;


class CategoryUpdateBuilder extends BaseBuilder {
    /**
     * @var Category
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    /**
     * @param callable $callback builder function <code>
     *   function (CategoryChangeSlugAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeSlug(callable $callback = null)
    {
        $action = $this->mapData(CategoryChangeSlugAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategorySetCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType(callable $callback = null)
    {
        $action = $this->mapData(CategorySetCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategorySetKeyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey(callable $callback = null)
    {
        $action = $this->mapData(CategorySetKeyAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategoryChangeNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName(callable $callback = null)
    {
        $action = $this->mapData(CategoryChangeNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategorySetAssetSourcesAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetSources(callable $callback = null)
    {
        $action = $this->mapData(CategorySetAssetSourcesAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategorySetMetaTitleAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMetaTitle(callable $callback = null)
    {
        $action = $this->mapData(CategorySetMetaTitleAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategorySetCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField(callable $callback = null)
    {
        $action = $this->mapData(CategorySetCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategorySetAssetKeyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetKey(callable $callback = null)
    {
        $action = $this->mapData(CategorySetAssetKeyAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategoryRemoveAssetAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeAsset(callable $callback = null)
    {
        $action = $this->mapData(CategoryRemoveAssetAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategorySetDescriptionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription(callable $callback = null)
    {
        $action = $this->mapData(CategorySetDescriptionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategoryChangeParentAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeParent(callable $callback = null)
    {
        $action = $this->mapData(CategoryChangeParentAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategorySetAssetCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetCustomField(callable $callback = null)
    {
        $action = $this->mapData(CategorySetAssetCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategorySetMetaDescriptionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMetaDescription(callable $callback = null)
    {
        $action = $this->mapData(CategorySetMetaDescriptionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategorySetAssetTagsAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetTags(callable $callback = null)
    {
        $action = $this->mapData(CategorySetAssetTagsAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategoryChangeOrderHintAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeOrderHint(callable $callback = null)
    {
        $action = $this->mapData(CategoryChangeOrderHintAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategoryChangeAssetOrderAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeAssetOrder(callable $callback = null)
    {
        $action = $this->mapData(CategoryChangeAssetOrderAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategorySetAssetCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetCustomType(callable $callback = null)
    {
        $action = $this->mapData(CategorySetAssetCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategoryChangeAssetNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeAssetName(callable $callback = null)
    {
        $action = $this->mapData(CategoryChangeAssetNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategoryAddAssetAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addAsset(callable $callback = null)
    {
        $action = $this->mapData(CategoryAddAssetAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategorySetMetaKeywordsAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMetaKeywords(callable $callback = null)
    {
        $action = $this->mapData(CategorySetMetaKeywordsAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategorySetExternalIdAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setExternalId(callable $callback = null)
    {
        $action = $this->mapData(CategorySetExternalIdAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CategorySetAssetDescriptionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAssetDescription(callable $callback = null)
    {
        $action = $this->mapData(CategorySetAssetDescriptionAction::class, null);
        $this->callback($action, $callback);
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
        $this->actions[] = $action;
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

    /**
     * Build CategoryUpdate and delete internal state
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
}
