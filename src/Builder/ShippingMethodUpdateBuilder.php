<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Types\ShippingMethod\ShippingMethodUpdateAction;

use Commercetools\Types\ShippingMethod\ShippingMethodChangeNameAction;
use Commercetools\Types\ShippingMethod\ShippingMethodAddShippingRateAction;
use Commercetools\Types\ShippingMethod\ShippingMethodRemoveShippingRateAction;
use Commercetools\Types\ShippingMethod\ShippingMethodChangeIsDefaultAction;
use Commercetools\Types\ShippingMethod\ShippingMethodSetKeyAction;
use Commercetools\Types\ShippingMethod\ShippingMethodChangeTaxCategoryAction;
use Commercetools\Types\ShippingMethod\ShippingMethodSetPredicateAction;
use Commercetools\Types\ShippingMethod\ShippingMethodAddZoneAction;
use Commercetools\Types\ShippingMethod\ShippingMethodRemoveZoneAction;
use Commercetools\Types\ShippingMethod\ShippingMethodSetDescriptionAction;
use Commercetools\Types\ShippingMethod\ShippingMethod;
use Commercetools\Types\ShippingMethod\ShippingMethodUpdate;


class ShippingMethodUpdateBuilder extends BaseBuilder {
    /**
     * @var ShippingMethod
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    /**
     * @param callable $callback builder function <code>
     *   function (ShippingMethodChangeNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName(callable $callback = null)
    {
        $action = $this->mapData(ShippingMethodChangeNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShippingMethodAddShippingRateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addShippingRate(callable $callback = null)
    {
        $action = $this->mapData(ShippingMethodAddShippingRateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShippingMethodRemoveShippingRateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeShippingRate(callable $callback = null)
    {
        $action = $this->mapData(ShippingMethodRemoveShippingRateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShippingMethodChangeIsDefaultAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeIsDefault(callable $callback = null)
    {
        $action = $this->mapData(ShippingMethodChangeIsDefaultAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShippingMethodSetKeyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey(callable $callback = null)
    {
        $action = $this->mapData(ShippingMethodSetKeyAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShippingMethodChangeTaxCategoryAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTaxCategory(callable $callback = null)
    {
        $action = $this->mapData(ShippingMethodChangeTaxCategoryAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShippingMethodSetPredicateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setPredicate(callable $callback = null)
    {
        $action = $this->mapData(ShippingMethodSetPredicateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShippingMethodAddZoneAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addZone(callable $callback = null)
    {
        $action = $this->mapData(ShippingMethodAddZoneAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShippingMethodRemoveZoneAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeZone(callable $callback = null)
    {
        $action = $this->mapData(ShippingMethodRemoveZoneAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShippingMethodSetDescriptionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription(callable $callback = null)
    {
        $action = $this->mapData(ShippingMethodSetDescriptionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }

    /**
     * @param ShippingMethodUpdateAction $action
     * @return $this;
     */
    public function addAction(ShippingMethodUpdateAction $action)
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
     * @param ShippingMethod $shippingMethod
     * @return $this
     */
    public function with(ShippingMethod $shippingMethod)
    {
        $this->resource = $shippingMethod;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    /**
     * Build ShippingMethodUpdate and delete internal state
     * @return ShippingMethodUpdate
     */
    public function build(): ShippingMethodUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(ShippingMethodUpdate::class, $data);
        if ($update instanceof ShippingMethodUpdate &&
            $this->resource instanceof ShippingMethod
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }
}
