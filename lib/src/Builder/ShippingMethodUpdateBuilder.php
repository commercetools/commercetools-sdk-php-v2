<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\ShippingMethod\ShippingMethodUpdateAction;

use Commercetools\Types\ShippingMethod\ShippingMethodAddShippingRateAction;
use Commercetools\Types\ShippingMethod\ShippingMethodAddZoneAction;
use Commercetools\Types\ShippingMethod\ShippingMethodChangeIsDefaultAction;
use Commercetools\Types\ShippingMethod\ShippingMethodChangeNameAction;
use Commercetools\Types\ShippingMethod\ShippingMethodChangeTaxCategoryAction;
use Commercetools\Types\ShippingMethod\ShippingMethodRemoveShippingRateAction;
use Commercetools\Types\ShippingMethod\ShippingMethodRemoveZoneAction;
use Commercetools\Types\ShippingMethod\ShippingMethodSetDescriptionAction;
use Commercetools\Types\ShippingMethod\ShippingMethodSetKeyAction;
use Commercetools\Types\ShippingMethod\ShippingMethodSetPredicateAction;
use Commercetools\Types\ShippingMethod\ShippingMethod;
use Commercetools\Types\ShippingMethod\ShippingMethodUpdate;
use Commercetools\Request\ByProjectKeyShippingMethodsByIDPost;


class ShippingMethodUpdateBuilder extends BaseBuilder {
    /**
     * @var ShippingMethod
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
     * @param ShippingMethodAddShippingRateAction|callable $action builder function <code>
     *   function (ShippingMethodAddShippingRateAction $action): ShippingMethodAddShippingRateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addShippingRate($action = null)
    {
        $action = $this->resolveAction(ShippingMethodAddShippingRateAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShippingMethodAddZoneAction|callable $action builder function <code>
     *   function (ShippingMethodAddZoneAction $action): ShippingMethodAddZoneAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addZone($action = null)
    {
        $action = $this->resolveAction(ShippingMethodAddZoneAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShippingMethodChangeIsDefaultAction|callable $action builder function <code>
     *   function (ShippingMethodChangeIsDefaultAction $action): ShippingMethodChangeIsDefaultAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeIsDefault($action = null)
    {
        $action = $this->resolveAction(ShippingMethodChangeIsDefaultAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShippingMethodChangeNameAction|callable $action builder function <code>
     *   function (ShippingMethodChangeNameAction $action): ShippingMethodChangeNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName($action = null)
    {
        $action = $this->resolveAction(ShippingMethodChangeNameAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShippingMethodChangeTaxCategoryAction|callable $action builder function <code>
     *   function (ShippingMethodChangeTaxCategoryAction $action): ShippingMethodChangeTaxCategoryAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTaxCategory($action = null)
    {
        $action = $this->resolveAction(ShippingMethodChangeTaxCategoryAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShippingMethodRemoveShippingRateAction|callable $action builder function <code>
     *   function (ShippingMethodRemoveShippingRateAction $action): ShippingMethodRemoveShippingRateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeShippingRate($action = null)
    {
        $action = $this->resolveAction(ShippingMethodRemoveShippingRateAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShippingMethodRemoveZoneAction|callable $action builder function <code>
     *   function (ShippingMethodRemoveZoneAction $action): ShippingMethodRemoveZoneAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeZone($action = null)
    {
        $action = $this->resolveAction(ShippingMethodRemoveZoneAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShippingMethodSetDescriptionAction|callable $action builder function <code>
     *   function (ShippingMethodSetDescriptionAction $action): ShippingMethodSetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription($action = null)
    {
        $action = $this->resolveAction(ShippingMethodSetDescriptionAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShippingMethodSetKeyAction|callable $action builder function <code>
     *   function (ShippingMethodSetKeyAction $action): ShippingMethodSetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey($action = null)
    {
        $action = $this->resolveAction(ShippingMethodSetKeyAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShippingMethodSetPredicateAction|callable $action builder function <code>
     *   function (ShippingMethodSetPredicateAction $action): ShippingMethodSetPredicateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setPredicate($action = null)
    {
        $action = $this->resolveAction(ShippingMethodSetPredicateAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
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

    private function resolveAction($class, $action = null) {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData($class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof $class) {
            throw new \InvalidArgumentException();
        }

        return $action;
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

    public function getResource(): ?ShippingMethod
    {
        return $this->resource;
    }

    /**
     * Build ShippingMethodUpdate
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

    public function buildRequest(): ?ByProjectKeyShippingMethodsByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
