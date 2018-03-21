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
        'transitionLineItemState' => Types\Order\OrderTransitionLineItemStateAction::class,
        'setCustomType' => Types\Order\OrderSetCustomTypeAction::class,
        'setLineItemCustomType' => Types\Order\OrderSetLineItemCustomTypeAction::class,
        'removeDelivery' => Types\Order\OrderRemoveDeliveryAction::class,
        'changePaymentState' => Types\Order\OrderChangePaymentStateAction::class,
        'setLocale' => Types\Order\OrderSetLocaleAction::class,
        'addDelivery' => Types\Order\OrderAddDeliveryAction::class,
        'transitionCustomLineItemState' => Types\Order\OrderTransitionCustomLineItemStateAction::class,
        'setCustomLineItemCustomType' => Types\Order\OrderSetCustomLineItemCustomTypeAction::class,
        'setOrderNumber' => Types\Order\OrderSetOrderNumberAction::class,
        'setLineItemCustomField' => Types\Order\OrderSetLineItemCustomFieldAction::class,
        'importLineItemState' => Types\Order\OrderImportLineItemStateAction::class,
        'removePayment' => Types\Order\OrderRemovePaymentAction::class,
        'setCustomField' => Types\Order\OrderSetCustomFieldAction::class,
        'addPayment' => Types\Order\OrderAddPaymentAction::class,
        'setParcelTrackingData' => Types\Order\OrderSetParcelTrackingDataAction::class,
        'setReturnShipmentState' => Types\Order\OrderSetReturnShipmentStateAction::class,
        'setBillingAddress' => Types\Order\OrderSetBillingAddressAction::class,
        'setParcelItems' => Types\Order\OrderSetParcelItemsAction::class,
        'importCustomLineItemState' => Types\Order\OrderImportCustomLineItemStateAction::class,
        'changeShipmentState' => Types\Order\OrderChangeShipmentStateAction::class,
        'changeOrderState' => Types\Order\OrderChangeOrderStateAction::class,
        'removeParcelFromDelivery' => Types\Order\OrderRemoveParcelFromDeliveryAction::class,
        'addReturnInfo' => Types\Order\OrderAddReturnInfoAction::class,
        'setReturnPaymentState' => Types\Order\OrderSetReturnPaymentStateAction::class,
        'setShippingAddress' => Types\Order\OrderSetShippingAddressAction::class,
        'setDeliveryItems' => Types\Order\OrderSetDeliveryItemsAction::class,
        'addParcelToDelivery' => Types\Order\OrderAddParcelToDeliveryAction::class,
        'setCustomLineItemCustomField' => Types\Order\OrderSetCustomLineItemCustomFieldAction::class,
        'setDeliveryAddress' => Types\Order\OrderSetDeliveryAddressAction::class,
        'transitionState' => Types\Order\OrderTransitionStateAction::class,
        'setCustomerEmail' => Types\Order\OrderSetCustomerEmailAction::class,
        'setParcelMeasurements' => Types\Order\OrderSetParcelMeasurementsAction::class,

    ];

}
