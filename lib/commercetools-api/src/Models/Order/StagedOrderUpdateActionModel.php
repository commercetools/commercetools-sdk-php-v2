<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\OrderEdit\StagedOrderAddCustomLineItemActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddDeliveryActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddDiscountCodeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddItemShippingAddressActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddLineItemActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddParcelToDeliveryActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddPaymentActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddReturnInfoActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddShoppingListActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeCustomLineItemMoneyActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeCustomLineItemQuantityActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeLineItemQuantityActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeOrderStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangePaymentStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeShipmentStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxCalculationModeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxModeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxRoundingModeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderImportCustomLineItemStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderImportLineItemStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveCustomLineItemActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveDeliveryActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveDiscountCodeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveItemShippingAddressActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveLineItemActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveParcelFromDeliveryActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemovePaymentActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetBillingAddressActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCountryActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerEmailActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerGroupActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerIdActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomFieldActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemCustomFieldActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemCustomTypeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemShippingDetailsActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemTaxAmountActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemTaxRateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomShippingMethodActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomTypeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryAddressActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryItemsActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemCustomFieldActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemCustomTypeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemPriceActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemShippingDetailsActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTaxAmountActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTaxRateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTotalPriceActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLocaleActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetOrderNumberActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetOrderTotalTaxActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelItemsActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelMeasurementsActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelTrackingDataActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnPaymentStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnShipmentStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressAndCustomShippingMethodActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressAndShippingMethodActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodTaxAmountActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodTaxRateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingRateInputActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionCustomLineItemStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionLineItemStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderUpdateItemShippingAddressActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderUpdateSyncInfoActionModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class StagedOrderUpdateActionModel extends JsonObjectModel implements StagedOrderUpdateAction
{
    const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<StagedOrderUpdateAction> >
     * @psalm-suppress InvalidPropertyAssignmentValue
     */
    private static $discriminatorClasses = [
        'addCustomLineItem' => StagedOrderAddCustomLineItemActionModel::class,
        'addDelivery' => StagedOrderAddDeliveryActionModel::class,
        'addDiscountCode' => StagedOrderAddDiscountCodeActionModel::class,
        'addItemShippingAddress' => StagedOrderAddItemShippingAddressActionModel::class,
        'addLineItem' => StagedOrderAddLineItemActionModel::class,
        'addParcelToDelivery' => StagedOrderAddParcelToDeliveryActionModel::class,
        'addPayment' => StagedOrderAddPaymentActionModel::class,
        'addReturnInfo' => StagedOrderAddReturnInfoActionModel::class,
        'addShoppingList' => StagedOrderAddShoppingListActionModel::class,
        'changeCustomLineItemMoney' => StagedOrderChangeCustomLineItemMoneyActionModel::class,
        'changeCustomLineItemQuantity' => StagedOrderChangeCustomLineItemQuantityActionModel::class,
        'changeLineItemQuantity' => StagedOrderChangeLineItemQuantityActionModel::class,
        'changeOrderState' => StagedOrderChangeOrderStateActionModel::class,
        'changePaymentState' => StagedOrderChangePaymentStateActionModel::class,
        'changeShipmentState' => StagedOrderChangeShipmentStateActionModel::class,
        'changeTaxCalculationMode' => StagedOrderChangeTaxCalculationModeActionModel::class,
        'changeTaxMode' => StagedOrderChangeTaxModeActionModel::class,
        'changeTaxRoundingMode' => StagedOrderChangeTaxRoundingModeActionModel::class,
        'importCustomLineItemState' => StagedOrderImportCustomLineItemStateActionModel::class,
        'importLineItemState' => StagedOrderImportLineItemStateActionModel::class,
        'removeCustomLineItem' => StagedOrderRemoveCustomLineItemActionModel::class,
        'removeDelivery' => StagedOrderRemoveDeliveryActionModel::class,
        'removeDiscountCode' => StagedOrderRemoveDiscountCodeActionModel::class,
        'removeItemShippingAddress' => StagedOrderRemoveItemShippingAddressActionModel::class,
        'removeLineItem' => StagedOrderRemoveLineItemActionModel::class,
        'removeParcelFromDelivery' => StagedOrderRemoveParcelFromDeliveryActionModel::class,
        'removePayment' => StagedOrderRemovePaymentActionModel::class,
        'setBillingAddress' => StagedOrderSetBillingAddressActionModel::class,
        'setCountry' => StagedOrderSetCountryActionModel::class,
        'setCustomField' => StagedOrderSetCustomFieldActionModel::class,
        'setCustomLineItemCustomField' => StagedOrderSetCustomLineItemCustomFieldActionModel::class,
        'setCustomLineItemCustomType' => StagedOrderSetCustomLineItemCustomTypeActionModel::class,
        'setCustomLineItemShippingDetails' => StagedOrderSetCustomLineItemShippingDetailsActionModel::class,
        'setCustomLineItemTaxAmount' => StagedOrderSetCustomLineItemTaxAmountActionModel::class,
        'setCustomLineItemTaxRate' => StagedOrderSetCustomLineItemTaxRateActionModel::class,
        'setCustomShippingMethod' => StagedOrderSetCustomShippingMethodActionModel::class,
        'setCustomType' => StagedOrderSetCustomTypeActionModel::class,
        'setCustomerEmail' => StagedOrderSetCustomerEmailActionModel::class,
        'setCustomerGroup' => StagedOrderSetCustomerGroupActionModel::class,
        'setCustomerId' => StagedOrderSetCustomerIdActionModel::class,
        'setDeliveryAddress' => StagedOrderSetDeliveryAddressActionModel::class,
        'setDeliveryItems' => StagedOrderSetDeliveryItemsActionModel::class,
        'setLineItemCustomField' => StagedOrderSetLineItemCustomFieldActionModel::class,
        'setLineItemCustomType' => StagedOrderSetLineItemCustomTypeActionModel::class,
        'setLineItemPrice' => StagedOrderSetLineItemPriceActionModel::class,
        'setLineItemShippingDetails' => StagedOrderSetLineItemShippingDetailsActionModel::class,
        'setLineItemTaxAmount' => StagedOrderSetLineItemTaxAmountActionModel::class,
        'setLineItemTaxRate' => StagedOrderSetLineItemTaxRateActionModel::class,
        'setLineItemTotalPrice' => StagedOrderSetLineItemTotalPriceActionModel::class,
        'setLocale' => StagedOrderSetLocaleActionModel::class,
        'setOrderNumber' => StagedOrderSetOrderNumberActionModel::class,
        'setOrderTotalTax' => StagedOrderSetOrderTotalTaxActionModel::class,
        'setParcelItems' => StagedOrderSetParcelItemsActionModel::class,
        'setParcelMeasurements' => StagedOrderSetParcelMeasurementsActionModel::class,
        'setParcelTrackingData' => StagedOrderSetParcelTrackingDataActionModel::class,
        'setReturnPaymentState' => StagedOrderSetReturnPaymentStateActionModel::class,
        'setReturnShipmentState' => StagedOrderSetReturnShipmentStateActionModel::class,
        'setShippingAddress' => StagedOrderSetShippingAddressActionModel::class,
        'setShippingAddressAndCustomShippingMethod' => StagedOrderSetShippingAddressAndCustomShippingMethodActionModel::class,
        'setShippingAddressAndShippingMethod' => StagedOrderSetShippingAddressAndShippingMethodActionModel::class,
        'setShippingMethod' => StagedOrderSetShippingMethodActionModel::class,
        'setShippingMethodTaxAmount' => StagedOrderSetShippingMethodTaxAmountActionModel::class,
        'setShippingMethodTaxRate' => StagedOrderSetShippingMethodTaxRateActionModel::class,
        'setShippingRateInput' => StagedOrderSetShippingRateInputActionModel::class,
        'transitionCustomLineItemState' => StagedOrderTransitionCustomLineItemStateActionModel::class,
        'transitionLineItemState' => StagedOrderTransitionLineItemStateActionModel::class,
        'transitionState' => StagedOrderTransitionStateActionModel::class,
        'updateItemShippingAddress' => StagedOrderUpdateItemShippingAddressActionModel::class,
        'updateSyncInfo' => StagedOrderUpdateSyncInfoActionModel::class,
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
            $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<StagedOrderUpdateAction>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = StagedOrderUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
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

        /** @psalm-var class-string<StagedOrderUpdateAction> */
        $type = StagedOrderUpdateActionModel::class;

        return $type;
    }
}
