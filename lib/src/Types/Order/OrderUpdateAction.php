<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface OrderUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'updateSyncInfo' => Types\Order\OrderUpdateSyncInfoAction::class,
        'setShippingAddress' => Types\Order\OrderSetShippingAddressAction::class,
        'setCustomField' => Types\Order\OrderSetCustomFieldAction::class,
        'setDeliveryAddress' => Types\Order\OrderSetDeliveryAddressAction::class,
        'importLineItemState' => Types\Order\OrderImportLineItemStateAction::class,
        'addPayment' => Types\Order\OrderAddPaymentAction::class,
        'setDeliveryItems' => Types\Order\OrderSetDeliveryItemsAction::class,
        'setReturnShipmentState' => Types\Order\OrderSetReturnShipmentStateAction::class,
        'setBillingAddress' => Types\Order\OrderSetBillingAddressAction::class,
        'setLineItemCustomField' => Types\Order\OrderSetLineItemCustomFieldAction::class,
        'setCustomerEmail' => Types\Order\OrderSetCustomerEmailAction::class,
        'transitionCustomLineItemState' => Types\Order\OrderTransitionCustomLineItemStateAction::class,
        'transitionState' => Types\Order\OrderTransitionStateAction::class,
        'removeParcelFromDelivery' => Types\Order\OrderRemoveParcelFromDeliveryAction::class,
        'setOrderNumber' => Types\Order\OrderSetOrderNumberAction::class,
        'setParcelMeasurements' => Types\Order\OrderSetParcelMeasurementsAction::class,
        'removeDelivery' => Types\Order\OrderRemoveDeliveryAction::class,
        'setReturnPaymentState' => Types\Order\OrderSetReturnPaymentStateAction::class,
        'setLineItemCustomType' => Types\Order\OrderSetLineItemCustomTypeAction::class,
        'changePaymentState' => Types\Order\OrderChangePaymentStateAction::class,
        'addReturnInfo' => Types\Order\OrderAddReturnInfoAction::class,
        'addParcelToDelivery' => Types\Order\OrderAddParcelToDeliveryAction::class,
        'addDelivery' => Types\Order\OrderAddDeliveryAction::class,
        'setParcelItems' => Types\Order\OrderSetParcelItemsAction::class,
        'setParcelTrackingData' => Types\Order\OrderSetParcelTrackingDataAction::class,
        'transitionLineItemState' => Types\Order\OrderTransitionLineItemStateAction::class,
        'importCustomLineItemState' => Types\Order\OrderImportCustomLineItemStateAction::class,
        'changeShipmentState' => Types\Order\OrderChangeShipmentStateAction::class,
        'setCustomType' => Types\Order\OrderSetCustomTypeAction::class,
        'removePayment' => Types\Order\OrderRemovePaymentAction::class,
        'setCustomLineItemCustomType' => Types\Order\OrderSetCustomLineItemCustomTypeAction::class,
        'setCustomLineItemCustomField' => Types\Order\OrderSetCustomLineItemCustomFieldAction::class,
        'setLocale' => Types\Order\OrderSetLocaleAction::class,
        'changeOrderState' => Types\Order\OrderChangeOrderStateAction::class,

    ];

}
