<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Exception\InvalidArgumentException;
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
     *   function(CategoryAddAssetAction $action): CategoryAddAssetAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function addAsset($action = null)
    {
        $this->addAction($this->resolveAction(CategoryAddAssetAction::class, $action));
        return $this;
    }
    /**
     * @param CategoryChangeAssetNameAction|callable $action builder function <code>
     *   function(CategoryChangeAssetNameAction $action): CategoryChangeAssetNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeAssetName($action = null)
    {
        $this->addAction($this->resolveAction(CategoryChangeAssetNameAction::class, $action));
        return $this;
    }
    /**
     * @param CategoryChangeAssetOrderAction|callable $action builder function <code>
     *   function(CategoryChangeAssetOrderAction $action): CategoryChangeAssetOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeAssetOrder($action = null)
    {
        $this->addAction($this->resolveAction(CategoryChangeAssetOrderAction::class, $action));
        return $this;
    }
    /**
     * @param CategoryChangeNameAction|callable $action builder function <code>
     *   function(CategoryChangeNameAction $action): CategoryChangeNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeName($action = null)
    {
        $this->addAction($this->resolveAction(CategoryChangeNameAction::class, $action));
        return $this;
    }
    /**
     * @param CategoryChangeOrderHintAction|callable $action builder function <code>
     *   function(CategoryChangeOrderHintAction $action): CategoryChangeOrderHintAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeOrderHint($action = null)
    {
        $this->addAction($this->resolveAction(CategoryChangeOrderHintAction::class, $action));
        return $this;
    }
    /**
     * @param CategoryChangeParentAction|callable $action builder function <code>
     *   function(CategoryChangeParentAction $action): CategoryChangeParentAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeParent($action = null)
    {
        $this->addAction($this->resolveAction(CategoryChangeParentAction::class, $action));
        return $this;
    }
    /**
     * @param CategoryChangeSlugAction|callable $action builder function <code>
     *   function(CategoryChangeSlugAction $action): CategoryChangeSlugAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeSlug($action = null)
    {
        $this->addAction($this->resolveAction(CategoryChangeSlugAction::class, $action));
        return $this;
    }
    /**
     * @param CategoryRemoveAssetAction|callable $action builder function <code>
     *   function(CategoryRemoveAssetAction $action): CategoryRemoveAssetAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function removeAsset($action = null)
    {
        $this->addAction($this->resolveAction(CategoryRemoveAssetAction::class, $action));
        return $this;
    }
    /**
     * @param CategorySetAssetCustomFieldAction|callable $action builder function <code>
     *   function(CategorySetAssetCustomFieldAction $action): CategorySetAssetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setAssetCustomField($action = null)
    {
        $this->addAction($this->resolveAction(CategorySetAssetCustomFieldAction::class, $action));
        return $this;
    }
    /**
     * @param CategorySetAssetCustomTypeAction|callable $action builder function <code>
     *   function(CategorySetAssetCustomTypeAction $action): CategorySetAssetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setAssetCustomType($action = null)
    {
        $this->addAction($this->resolveAction(CategorySetAssetCustomTypeAction::class, $action));
        return $this;
    }
    /**
     * @param CategorySetAssetDescriptionAction|callable $action builder function <code>
     *   function(CategorySetAssetDescriptionAction $action): CategorySetAssetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setAssetDescription($action = null)
    {
        $this->addAction($this->resolveAction(CategorySetAssetDescriptionAction::class, $action));
        return $this;
    }
    /**
     * @param CategorySetAssetKeyAction|callable $action builder function <code>
     *   function(CategorySetAssetKeyAction $action): CategorySetAssetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setAssetKey($action = null)
    {
        $this->addAction($this->resolveAction(CategorySetAssetKeyAction::class, $action));
        return $this;
    }
    /**
     * @param CategorySetAssetSourcesAction|callable $action builder function <code>
     *   function(CategorySetAssetSourcesAction $action): CategorySetAssetSourcesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setAssetSources($action = null)
    {
        $this->addAction($this->resolveAction(CategorySetAssetSourcesAction::class, $action));
        return $this;
    }
    /**
     * @param CategorySetAssetTagsAction|callable $action builder function <code>
     *   function(CategorySetAssetTagsAction $action): CategorySetAssetTagsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setAssetTags($action = null)
    {
        $this->addAction($this->resolveAction(CategorySetAssetTagsAction::class, $action));
        return $this;
    }
    /**
     * @param CategorySetCustomFieldAction|callable $action builder function <code>
     *   function(CategorySetCustomFieldAction $action): CategorySetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setCustomField($action = null)
    {
        $this->addAction($this->resolveAction(CategorySetCustomFieldAction::class, $action));
        return $this;
    }
    /**
     * @param CategorySetCustomTypeAction|callable $action builder function <code>
     *   function(CategorySetCustomTypeAction $action): CategorySetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setCustomType($action = null)
    {
        $this->addAction($this->resolveAction(CategorySetCustomTypeAction::class, $action));
        return $this;
    }
    /**
     * @param CategorySetDescriptionAction|callable $action builder function <code>
     *   function(CategorySetDescriptionAction $action): CategorySetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setDescription($action = null)
    {
        $this->addAction($this->resolveAction(CategorySetDescriptionAction::class, $action));
        return $this;
    }
    /**
     * @param CategorySetExternalIdAction|callable $action builder function <code>
     *   function(CategorySetExternalIdAction $action): CategorySetExternalIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setExternalId($action = null)
    {
        $this->addAction($this->resolveAction(CategorySetExternalIdAction::class, $action));
        return $this;
    }
    /**
     * @param CategorySetKeyAction|callable $action builder function <code>
     *   function(CategorySetKeyAction $action): CategorySetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setKey($action = null)
    {
        $this->addAction($this->resolveAction(CategorySetKeyAction::class, $action));
        return $this;
    }
    /**
     * @param CategorySetMetaDescriptionAction|callable $action builder function <code>
     *   function(CategorySetMetaDescriptionAction $action): CategorySetMetaDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setMetaDescription($action = null)
    {
        $this->addAction($this->resolveAction(CategorySetMetaDescriptionAction::class, $action));
        return $this;
    }
    /**
     * @param CategorySetMetaKeywordsAction|callable $action builder function <code>
     *   function(CategorySetMetaKeywordsAction $action): CategorySetMetaKeywordsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setMetaKeywords($action = null)
    {
        $this->addAction($this->resolveAction(CategorySetMetaKeywordsAction::class, $action));
        return $this;
    }
    /**
     * @param CategorySetMetaTitleAction|callable $action builder function <code>
     *   function(CategorySetMetaTitleAction $action): CategorySetMetaTitleAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setMetaTitle($action = null)
    {
        $this->addAction($this->resolveAction(CategorySetMetaTitleAction::class, $action));
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

    /**
     * @param $class
     * @param $action
     * @return CategoryUpdateAction
     * @throws InvalidArgumentException
     */
    private function resolveAction($class, $action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData($class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if ($action instanceof $class) {
            return $action;
        }

        throw new InvalidArgumentException(
            sprintf('Expected method to be called with or callable to return %s', $class)
        );
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
