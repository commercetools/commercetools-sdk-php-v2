<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class OrderUpdateActionModel extends JsonObjectModel implements OrderUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<OrderUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'addDelivery' => OrderAddDeliveryActionModel::class,
       'addItemShippingAddress' => OrderAddItemShippingAddressActionModel::class,
       'addParcelToDelivery' => OrderAddParcelToDeliveryActionModel::class,
       'addPayment' => OrderAddPaymentActionModel::class,
       'addReturnInfo' => OrderAddReturnInfoActionModel::class,
       'changeOrderState' => OrderChangeOrderStateActionModel::class,
       'changePaymentState' => OrderChangePaymentStateActionModel::class,
       'changeShipmentState' => OrderChangeShipmentStateActionModel::class,
       'importCustomLineItemState' => OrderImportCustomLineItemStateActionModel::class,
       'importLineItemState' => OrderImportLineItemStateActionModel::class,
       'removeDelivery' => OrderRemoveDeliveryActionModel::class,
       'removeItemShippingAddress' => OrderRemoveItemShippingAddressActionModel::class,
       'removeParcelFromDelivery' => OrderRemoveParcelFromDeliveryActionModel::class,
       'removePayment' => OrderRemovePaymentActionModel::class,
       'setBillingAddress' => OrderSetBillingAddressActionModel::class,
       'setCustomField' => OrderSetCustomFieldActionModel::class,
       'setCustomLineItemCustomField' => OrderSetCustomLineItemCustomFieldActionModel::class,
       'setCustomLineItemCustomType' => OrderSetCustomLineItemCustomTypeActionModel::class,
       'setCustomLineItemShippingDetails' => OrderSetCustomLineItemShippingDetailsActionModel::class,
       'setCustomType' => OrderSetCustomTypeActionModel::class,
       'setCustomerEmail' => OrderSetCustomerEmailActionModel::class,
       'setCustomerId' => OrderSetCustomerIdActionModel::class,
       'setDeliveryAddress' => OrderSetDeliveryAddressActionModel::class,
       'setDeliveryItems' => OrderSetDeliveryItemsActionModel::class,
       'setLineItemCustomField' => OrderSetLineItemCustomFieldActionModel::class,
       'setLineItemCustomType' => OrderSetLineItemCustomTypeActionModel::class,
       'setLineItemShippingDetails' => OrderSetLineItemShippingDetailsActionModel::class,
       'setLocale' => OrderSetLocaleActionModel::class,
       'setOrderNumber' => OrderSetOrderNumberActionModel::class,
       'setParcelItems' => OrderSetParcelItemsActionModel::class,
       'setParcelMeasurements' => OrderSetParcelMeasurementsActionModel::class,
       'setParcelTrackingData' => OrderSetParcelTrackingDataActionModel::class,
       'setReturnPaymentState' => OrderSetReturnPaymentStateActionModel::class,
       'setReturnShipmentState' => OrderSetReturnShipmentStateActionModel::class,
       'setShippingAddress' => OrderSetShippingAddressActionModel::class,
       'transitionCustomLineItemState' => OrderTransitionCustomLineItemStateActionModel::class,
       'transitionLineItemState' => OrderTransitionLineItemStateActionModel::class,
       'transitionState' => OrderTransitionStateActionModel::class,
       'updateItemShippingAddress' => OrderUpdateItemShippingAddressActionModel::class,
       'updateSyncInfo' => OrderUpdateSyncInfoActionModel::class,
    ];

    public function __construct(
    ) {
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }




    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<OrderUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = OrderUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->$fieldName)) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->$fieldName;
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<OrderUpdateAction> */
        $type = OrderUpdateActionModel::class;
        return $type;
    }
}
