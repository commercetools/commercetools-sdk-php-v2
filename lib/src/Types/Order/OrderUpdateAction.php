<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface OrderUpdateAction extends UpdateAction
{
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'addDelivery' => Types\Order\OrderAddDeliveryAction::class,
        'addParcelToDelivery' => Types\Order\OrderAddParcelToDeliveryAction::class,
        'addPayment' => Types\Order\OrderAddPaymentAction::class,
        'addReturnInfo' => Types\Order\OrderAddReturnInfoAction::class,
        'changeOrderState' => Types\Order\OrderChangeOrderStateAction::class,
        'changePaymentState' => Types\Order\OrderChangePaymentStateAction::class,
        'changeShipmentState' => Types\Order\OrderChangeShipmentStateAction::class,
        'importCustomLineItemState' => Types\Order\OrderImportCustomLineItemStateAction::class,
        'importLineItemState' => Types\Order\OrderImportLineItemStateAction::class,
        'removeDelivery' => Types\Order\OrderRemoveDeliveryAction::class,
        'removeParcelFromDelivery' => Types\Order\OrderRemoveParcelFromDeliveryAction::class,
        'removePayment' => Types\Order\OrderRemovePaymentAction::class,
        'setBillingAddress' => Types\Order\OrderSetBillingAddressAction::class,
        'setCustomField' => Types\Order\OrderSetCustomFieldAction::class,
        'setCustomLineItemCustomField' => Types\Order\OrderSetCustomLineItemCustomFieldAction::class,
        'setCustomLineItemCustomType' => Types\Order\OrderSetCustomLineItemCustomTypeAction::class,
        'setCustomType' => Types\Order\OrderSetCustomTypeAction::class,
        'setCustomerEmail' => Types\Order\OrderSetCustomerEmailAction::class,
        'setDeliveryAddress' => Types\Order\OrderSetDeliveryAddressAction::class,
        'setDeliveryItems' => Types\Order\OrderSetDeliveryItemsAction::class,
        'setLineItemCustomField' => Types\Order\OrderSetLineItemCustomFieldAction::class,
        'setLineItemCustomType' => Types\Order\OrderSetLineItemCustomTypeAction::class,
        'setLocale' => Types\Order\OrderSetLocaleAction::class,
        'setOrderNumber' => Types\Order\OrderSetOrderNumberAction::class,
        'setParcelItems' => Types\Order\OrderSetParcelItemsAction::class,
        'setParcelMeasurements' => Types\Order\OrderSetParcelMeasurementsAction::class,
        'setParcelTrackingData' => Types\Order\OrderSetParcelTrackingDataAction::class,
        'setReturnPaymentState' => Types\Order\OrderSetReturnPaymentStateAction::class,
        'setReturnShipmentState' => Types\Order\OrderSetReturnShipmentStateAction::class,
        'setShippingAddress' => Types\Order\OrderSetShippingAddressAction::class,
        'transitionCustomLineItemState' => Types\Order\OrderTransitionCustomLineItemStateAction::class,
        'transitionLineItemState' => Types\Order\OrderTransitionLineItemStateAction::class,
        'transitionState' => Types\Order\OrderTransitionStateAction::class,
        'updateSyncInfo' => Types\Order\OrderUpdateSyncInfoAction::class,

    ];

}
