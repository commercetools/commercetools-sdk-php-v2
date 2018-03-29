<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Exception\BuilderInvalidArgumentException;
use Commercetools\Types\Order\OrderUpdateAction;

use Commercetools\Types\Order\OrderAddDeliveryAction;
use Commercetools\Types\Order\OrderAddParcelToDeliveryAction;
use Commercetools\Types\Order\OrderAddPaymentAction;
use Commercetools\Types\Order\OrderAddReturnInfoAction;
use Commercetools\Types\Order\OrderChangeOrderStateAction;
use Commercetools\Types\Order\OrderChangePaymentStateAction;
use Commercetools\Types\Order\OrderChangeShipmentStateAction;
use Commercetools\Types\Order\OrderImportCustomLineItemStateAction;
use Commercetools\Types\Order\OrderImportLineItemStateAction;
use Commercetools\Types\Order\OrderRemoveDeliveryAction;
use Commercetools\Types\Order\OrderRemoveParcelFromDeliveryAction;
use Commercetools\Types\Order\OrderRemovePaymentAction;
use Commercetools\Types\Order\OrderSetBillingAddressAction;
use Commercetools\Types\Order\OrderSetCustomFieldAction;
use Commercetools\Types\Order\OrderSetCustomLineItemCustomFieldAction;
use Commercetools\Types\Order\OrderSetCustomLineItemCustomTypeAction;
use Commercetools\Types\Order\OrderSetCustomTypeAction;
use Commercetools\Types\Order\OrderSetCustomerEmailAction;
use Commercetools\Types\Order\OrderSetDeliveryAddressAction;
use Commercetools\Types\Order\OrderSetDeliveryItemsAction;
use Commercetools\Types\Order\OrderSetLineItemCustomFieldAction;
use Commercetools\Types\Order\OrderSetLineItemCustomTypeAction;
use Commercetools\Types\Order\OrderSetLocaleAction;
use Commercetools\Types\Order\OrderSetOrderNumberAction;
use Commercetools\Types\Order\OrderSetParcelItemsAction;
use Commercetools\Types\Order\OrderSetParcelMeasurementsAction;
use Commercetools\Types\Order\OrderSetParcelTrackingDataAction;
use Commercetools\Types\Order\OrderSetReturnPaymentStateAction;
use Commercetools\Types\Order\OrderSetReturnShipmentStateAction;
use Commercetools\Types\Order\OrderSetShippingAddressAction;
use Commercetools\Types\Order\OrderTransitionCustomLineItemStateAction;
use Commercetools\Types\Order\OrderTransitionLineItemStateAction;
use Commercetools\Types\Order\OrderTransitionStateAction;
use Commercetools\Types\Order\OrderUpdateSyncInfoAction;
use Commercetools\Types\Order\Order;
use Commercetools\Types\Order\OrderUpdate;
use Commercetools\Request\ByProjectKeyOrdersByIDPost;


class OrderUpdateBuilder extends BaseBuilder {
    /**
     * @var Order
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
     * @param OrderAddDeliveryAction|callable $action builder function <code>
     *   function(OrderAddDeliveryAction $action): OrderAddDeliveryAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addDelivery($action = null)
    {
        $this->addAction($this->resolveAction(OrderAddDeliveryAction::class, $action));
        return $this;
    }
    /**
     * @param OrderAddParcelToDeliveryAction|callable $action builder function <code>
     *   function(OrderAddParcelToDeliveryAction $action): OrderAddParcelToDeliveryAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addParcelToDelivery($action = null)
    {
        $this->addAction($this->resolveAction(OrderAddParcelToDeliveryAction::class, $action));
        return $this;
    }
    /**
     * @param OrderAddPaymentAction|callable $action builder function <code>
     *   function(OrderAddPaymentAction $action): OrderAddPaymentAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addPayment($action = null)
    {
        $this->addAction($this->resolveAction(OrderAddPaymentAction::class, $action));
        return $this;
    }
    /**
     * @param OrderAddReturnInfoAction|callable $action builder function <code>
     *   function(OrderAddReturnInfoAction $action): OrderAddReturnInfoAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addReturnInfo($action = null)
    {
        $this->addAction($this->resolveAction(OrderAddReturnInfoAction::class, $action));
        return $this;
    }
    /**
     * @param OrderChangeOrderStateAction|callable $action builder function <code>
     *   function(OrderChangeOrderStateAction $action): OrderChangeOrderStateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeOrderState($action = null)
    {
        $this->addAction($this->resolveAction(OrderChangeOrderStateAction::class, $action));
        return $this;
    }
    /**
     * @param OrderChangePaymentStateAction|callable $action builder function <code>
     *   function(OrderChangePaymentStateAction $action): OrderChangePaymentStateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changePaymentState($action = null)
    {
        $this->addAction($this->resolveAction(OrderChangePaymentStateAction::class, $action));
        return $this;
    }
    /**
     * @param OrderChangeShipmentStateAction|callable $action builder function <code>
     *   function(OrderChangeShipmentStateAction $action): OrderChangeShipmentStateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeShipmentState($action = null)
    {
        $this->addAction($this->resolveAction(OrderChangeShipmentStateAction::class, $action));
        return $this;
    }
    /**
     * @param OrderImportCustomLineItemStateAction|callable $action builder function <code>
     *   function(OrderImportCustomLineItemStateAction $action): OrderImportCustomLineItemStateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function importCustomLineItemState($action = null)
    {
        $this->addAction($this->resolveAction(OrderImportCustomLineItemStateAction::class, $action));
        return $this;
    }
    /**
     * @param OrderImportLineItemStateAction|callable $action builder function <code>
     *   function(OrderImportLineItemStateAction $action): OrderImportLineItemStateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function importLineItemState($action = null)
    {
        $this->addAction($this->resolveAction(OrderImportLineItemStateAction::class, $action));
        return $this;
    }
    /**
     * @param OrderRemoveDeliveryAction|callable $action builder function <code>
     *   function(OrderRemoveDeliveryAction $action): OrderRemoveDeliveryAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeDelivery($action = null)
    {
        $this->addAction($this->resolveAction(OrderRemoveDeliveryAction::class, $action));
        return $this;
    }
    /**
     * @param OrderRemoveParcelFromDeliveryAction|callable $action builder function <code>
     *   function(OrderRemoveParcelFromDeliveryAction $action): OrderRemoveParcelFromDeliveryAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeParcelFromDelivery($action = null)
    {
        $this->addAction($this->resolveAction(OrderRemoveParcelFromDeliveryAction::class, $action));
        return $this;
    }
    /**
     * @param OrderRemovePaymentAction|callable $action builder function <code>
     *   function(OrderRemovePaymentAction $action): OrderRemovePaymentAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removePayment($action = null)
    {
        $this->addAction($this->resolveAction(OrderRemovePaymentAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetBillingAddressAction|callable $action builder function <code>
     *   function(OrderSetBillingAddressAction $action): OrderSetBillingAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setBillingAddress($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetBillingAddressAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetCustomFieldAction|callable $action builder function <code>
     *   function(OrderSetCustomFieldAction $action): OrderSetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetCustomFieldAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetCustomLineItemCustomFieldAction|callable $action builder function <code>
     *   function(OrderSetCustomLineItemCustomFieldAction $action): OrderSetCustomLineItemCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemCustomField($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetCustomLineItemCustomFieldAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetCustomLineItemCustomTypeAction|callable $action builder function <code>
     *   function(OrderSetCustomLineItemCustomTypeAction $action): OrderSetCustomLineItemCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemCustomType($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetCustomLineItemCustomTypeAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetCustomTypeAction|callable $action builder function <code>
     *   function(OrderSetCustomTypeAction $action): OrderSetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetCustomTypeAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetCustomerEmailAction|callable $action builder function <code>
     *   function(OrderSetCustomerEmailAction $action): OrderSetCustomerEmailAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomerEmail($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetCustomerEmailAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetDeliveryAddressAction|callable $action builder function <code>
     *   function(OrderSetDeliveryAddressAction $action): OrderSetDeliveryAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDeliveryAddress($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetDeliveryAddressAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetDeliveryItemsAction|callable $action builder function <code>
     *   function(OrderSetDeliveryItemsAction $action): OrderSetDeliveryItemsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDeliveryItems($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetDeliveryItemsAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetLineItemCustomFieldAction|callable $action builder function <code>
     *   function(OrderSetLineItemCustomFieldAction $action): OrderSetLineItemCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemCustomField($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetLineItemCustomFieldAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetLineItemCustomTypeAction|callable $action builder function <code>
     *   function(OrderSetLineItemCustomTypeAction $action): OrderSetLineItemCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemCustomType($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetLineItemCustomTypeAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetLocaleAction|callable $action builder function <code>
     *   function(OrderSetLocaleAction $action): OrderSetLocaleAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLocale($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetLocaleAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetOrderNumberAction|callable $action builder function <code>
     *   function(OrderSetOrderNumberAction $action): OrderSetOrderNumberAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setOrderNumber($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetOrderNumberAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetParcelItemsAction|callable $action builder function <code>
     *   function(OrderSetParcelItemsAction $action): OrderSetParcelItemsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setParcelItems($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetParcelItemsAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetParcelMeasurementsAction|callable $action builder function <code>
     *   function(OrderSetParcelMeasurementsAction $action): OrderSetParcelMeasurementsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setParcelMeasurements($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetParcelMeasurementsAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetParcelTrackingDataAction|callable $action builder function <code>
     *   function(OrderSetParcelTrackingDataAction $action): OrderSetParcelTrackingDataAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setParcelTrackingData($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetParcelTrackingDataAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetReturnPaymentStateAction|callable $action builder function <code>
     *   function(OrderSetReturnPaymentStateAction $action): OrderSetReturnPaymentStateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setReturnPaymentState($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetReturnPaymentStateAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetReturnShipmentStateAction|callable $action builder function <code>
     *   function(OrderSetReturnShipmentStateAction $action): OrderSetReturnShipmentStateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setReturnShipmentState($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetReturnShipmentStateAction::class, $action));
        return $this;
    }
    /**
     * @param OrderSetShippingAddressAction|callable $action builder function <code>
     *   function(OrderSetShippingAddressAction $action): OrderSetShippingAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingAddress($action = null)
    {
        $this->addAction($this->resolveAction(OrderSetShippingAddressAction::class, $action));
        return $this;
    }
    /**
     * @param OrderTransitionCustomLineItemStateAction|callable $action builder function <code>
     *   function(OrderTransitionCustomLineItemStateAction $action): OrderTransitionCustomLineItemStateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function transitionCustomLineItemState($action = null)
    {
        $this->addAction($this->resolveAction(OrderTransitionCustomLineItemStateAction::class, $action));
        return $this;
    }
    /**
     * @param OrderTransitionLineItemStateAction|callable $action builder function <code>
     *   function(OrderTransitionLineItemStateAction $action): OrderTransitionLineItemStateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function transitionLineItemState($action = null)
    {
        $this->addAction($this->resolveAction(OrderTransitionLineItemStateAction::class, $action));
        return $this;
    }
    /**
     * @param OrderTransitionStateAction|callable $action builder function <code>
     *   function(OrderTransitionStateAction $action): OrderTransitionStateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function transitionState($action = null)
    {
        $this->addAction($this->resolveAction(OrderTransitionStateAction::class, $action));
        return $this;
    }
    /**
     * @param OrderUpdateSyncInfoAction|callable $action builder function <code>
     *   function(OrderUpdateSyncInfoAction $action): OrderUpdateSyncInfoAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function updateSyncInfo($action = null)
    {
        $this->addAction($this->resolveAction(OrderUpdateSyncInfoAction::class, $action));
        return $this;
    }

    /**
     * @param OrderUpdateAction $action
     * @return $this;
     */
    public function addAction(OrderUpdateAction $action)
    {
        $this->actions[] = $action;
        return $this;
    }

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

        throw new BuilderInvalidArgumentException(sprintf('Expected method to be called with or callable to return %s', $class));
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
     * @param Order $order
     * @return $this
     */
    public function with(Order $order)
    {
        $this->resource = $order;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?Order
    {
        return $this->resource;
    }

    /**
     * Build OrderUpdate
     * @return OrderUpdate
     */
    public function build(): OrderUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(OrderUpdate::class, $data);
        if ($update instanceof OrderUpdate &&
            $this->resource instanceof Order
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyOrdersByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
