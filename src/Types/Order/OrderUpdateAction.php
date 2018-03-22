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
        'transitionCustomLineItemState' => Types\Order\OrderTransitionCustomLineItemStateAction::class,
        'setCustomLineItemCustomType' => Types\Order\OrderSetCustomLineItemCustomTypeAction::class,
        'setLineItemCustomField' => Types\Order\OrderSetLineItemCustomFieldAction::class,
        'changeOrderState' => Types\Order\OrderChangeOrderStateAction::class,
        'setLineItemCustomType' => Types\Order\OrderSetLineItemCustomTypeAction::class,
        'setCustomLineItemCustomField' => Types\Order\OrderSetCustomLineItemCustomFieldAction::class,
        'setLocale' => Types\Order\OrderSetLocaleAction::class,
        'setDeliveryItems' => Types\Order\OrderSetDeliveryItemsAction::class,
        'removeParcelFromDelivery' => Types\Order\OrderRemoveParcelFromDeliveryAction::class,
        'transitionState' => Types\Order\OrderTransitionStateAction::class,
        'setBillingAddress' => Types\Order\OrderSetBillingAddressAction::class,
        'addParcelToDelivery' => Types\Order\OrderAddParcelToDeliveryAction::class,
        'setParcelMeasurements' => Types\Order\OrderSetParcelMeasurementsAction::class,
        'setReturnPaymentState' => Types\Order\OrderSetReturnPaymentStateAction::class,
        'removePayment' => Types\Order\OrderRemovePaymentAction::class,
        'setShippingAddress' => Types\Order\OrderSetShippingAddressAction::class,
        'setOrderNumber' => Types\Order\OrderSetOrderNumberAction::class,
        'changePaymentState' => Types\Order\OrderChangePaymentStateAction::class,
        'addReturnInfo' => Types\Order\OrderAddReturnInfoAction::class,
        'removeDelivery' => Types\Order\OrderRemoveDeliveryAction::class,
        'addPayment' => Types\Order\OrderAddPaymentAction::class,
        'setParcelTrackingData' => Types\Order\OrderSetParcelTrackingDataAction::class,
        'setReturnShipmentState' => Types\Order\OrderSetReturnShipmentStateAction::class,
        'importLineItemState' => Types\Order\OrderImportLineItemStateAction::class,
        'importCustomLineItemState' => Types\Order\OrderImportCustomLineItemStateAction::class,
        'setDeliveryAddress' => Types\Order\OrderSetDeliveryAddressAction::class,
        'addDelivery' => Types\Order\OrderAddDeliveryAction::class,
        'setCustomField' => Types\Order\OrderSetCustomFieldAction::class,
        'setCustomerEmail' => Types\Order\OrderSetCustomerEmailAction::class,
        'transitionLineItemState' => Types\Order\OrderTransitionLineItemStateAction::class,
        'setCustomType' => Types\Order\OrderSetCustomTypeAction::class,
        'setParcelItems' => Types\Order\OrderSetParcelItemsAction::class,
        'changeShipmentState' => Types\Order\OrderChangeShipmentStateAction::class,

    ];

}
