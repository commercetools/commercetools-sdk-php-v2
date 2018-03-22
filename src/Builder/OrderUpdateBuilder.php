<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
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
     * @param callable $callback builder function <code>
     *   function (OrderAddDeliveryAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addDelivery(callable $callback = null)
    {
        $action = $this->mapData(OrderAddDeliveryAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderAddParcelToDeliveryAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addParcelToDelivery(callable $callback = null)
    {
        $action = $this->mapData(OrderAddParcelToDeliveryAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderAddPaymentAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addPayment(callable $callback = null)
    {
        $action = $this->mapData(OrderAddPaymentAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderAddReturnInfoAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addReturnInfo(callable $callback = null)
    {
        $action = $this->mapData(OrderAddReturnInfoAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderChangeOrderStateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeOrderState(callable $callback = null)
    {
        $action = $this->mapData(OrderChangeOrderStateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderChangePaymentStateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changePaymentState(callable $callback = null)
    {
        $action = $this->mapData(OrderChangePaymentStateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderChangeShipmentStateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeShipmentState(callable $callback = null)
    {
        $action = $this->mapData(OrderChangeShipmentStateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderImportCustomLineItemStateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function importCustomLineItemState(callable $callback = null)
    {
        $action = $this->mapData(OrderImportCustomLineItemStateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderImportLineItemStateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function importLineItemState(callable $callback = null)
    {
        $action = $this->mapData(OrderImportLineItemStateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderRemoveDeliveryAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeDelivery(callable $callback = null)
    {
        $action = $this->mapData(OrderRemoveDeliveryAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderRemoveParcelFromDeliveryAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeParcelFromDelivery(callable $callback = null)
    {
        $action = $this->mapData(OrderRemoveParcelFromDeliveryAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderRemovePaymentAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removePayment(callable $callback = null)
    {
        $action = $this->mapData(OrderRemovePaymentAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetBillingAddressAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setBillingAddress(callable $callback = null)
    {
        $action = $this->mapData(OrderSetBillingAddressAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField(callable $callback = null)
    {
        $action = $this->mapData(OrderSetCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetCustomLineItemCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemCustomField(callable $callback = null)
    {
        $action = $this->mapData(OrderSetCustomLineItemCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetCustomLineItemCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemCustomType(callable $callback = null)
    {
        $action = $this->mapData(OrderSetCustomLineItemCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType(callable $callback = null)
    {
        $action = $this->mapData(OrderSetCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetCustomerEmailAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomerEmail(callable $callback = null)
    {
        $action = $this->mapData(OrderSetCustomerEmailAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetDeliveryAddressAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDeliveryAddress(callable $callback = null)
    {
        $action = $this->mapData(OrderSetDeliveryAddressAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetDeliveryItemsAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDeliveryItems(callable $callback = null)
    {
        $action = $this->mapData(OrderSetDeliveryItemsAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetLineItemCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemCustomField(callable $callback = null)
    {
        $action = $this->mapData(OrderSetLineItemCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetLineItemCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemCustomType(callable $callback = null)
    {
        $action = $this->mapData(OrderSetLineItemCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetLocaleAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLocale(callable $callback = null)
    {
        $action = $this->mapData(OrderSetLocaleAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetOrderNumberAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setOrderNumber(callable $callback = null)
    {
        $action = $this->mapData(OrderSetOrderNumberAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetParcelItemsAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setParcelItems(callable $callback = null)
    {
        $action = $this->mapData(OrderSetParcelItemsAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetParcelMeasurementsAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setParcelMeasurements(callable $callback = null)
    {
        $action = $this->mapData(OrderSetParcelMeasurementsAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetParcelTrackingDataAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setParcelTrackingData(callable $callback = null)
    {
        $action = $this->mapData(OrderSetParcelTrackingDataAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetReturnPaymentStateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setReturnPaymentState(callable $callback = null)
    {
        $action = $this->mapData(OrderSetReturnPaymentStateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetReturnShipmentStateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setReturnShipmentState(callable $callback = null)
    {
        $action = $this->mapData(OrderSetReturnShipmentStateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderSetShippingAddressAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingAddress(callable $callback = null)
    {
        $action = $this->mapData(OrderSetShippingAddressAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderTransitionCustomLineItemStateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function transitionCustomLineItemState(callable $callback = null)
    {
        $action = $this->mapData(OrderTransitionCustomLineItemStateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderTransitionLineItemStateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function transitionLineItemState(callable $callback = null)
    {
        $action = $this->mapData(OrderTransitionLineItemStateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderTransitionStateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function transitionState(callable $callback = null)
    {
        $action = $this->mapData(OrderTransitionStateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (OrderUpdateSyncInfoAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function updateSyncInfo(callable $callback = null)
    {
        $action = $this->mapData(OrderUpdateSyncInfoAction::class, null);
        $this->callback($action, $callback);
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
