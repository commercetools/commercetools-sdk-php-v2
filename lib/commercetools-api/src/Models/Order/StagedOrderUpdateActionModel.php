<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\OrderEdit\StagedOrderAddCustomLineItemAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddCustomLineItemActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddDeliveryAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddDeliveryActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddDiscountCodeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddDiscountCodeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddItemShippingAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddItemShippingAddressActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddLineItemAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddLineItemActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddParcelToDeliveryAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddParcelToDeliveryActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddPaymentAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddPaymentActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddReturnInfoAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddReturnInfoActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddShoppingListAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddShoppingListActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeCustomLineItemMoneyAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeCustomLineItemMoneyActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeCustomLineItemQuantityAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeCustomLineItemQuantityActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeLineItemQuantityAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeLineItemQuantityActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeOrderStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeOrderStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangePaymentStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangePaymentStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeShipmentStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeShipmentStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxCalculationModeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxCalculationModeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxModeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxModeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxRoundingModeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxRoundingModeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderImportCustomLineItemStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderImportCustomLineItemStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderImportLineItemStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderImportLineItemStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveCustomLineItemAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveCustomLineItemActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveDeliveryAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveDeliveryActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveDiscountCodeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveDiscountCodeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveItemShippingAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveItemShippingAddressActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveLineItemAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveLineItemActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveParcelFromDeliveryAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveParcelFromDeliveryActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemovePaymentAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemovePaymentActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetBillingAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetBillingAddressActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetBillingAddressCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetBillingAddressCustomFieldActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetBillingAddressCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetBillingAddressCustomTypeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCountryAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCountryActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerEmailAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerEmailActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerGroupAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerGroupActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerIdAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerIdActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomFieldActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemCustomFieldActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemCustomTypeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemShippingDetailsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemShippingDetailsActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemTaxAmountAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemTaxAmountActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemTaxRateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemTaxRateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomShippingMethodAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomShippingMethodActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomTypeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryAddressActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryAddressCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryAddressCustomFieldActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryAddressCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryAddressCustomTypeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryCustomFieldActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryCustomTypeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryItemsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryItemsActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetItemShippingAddressCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetItemShippingAddressCustomFieldActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetItemShippingAddressCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetItemShippingAddressCustomTypeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemCustomFieldActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemCustomTypeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemDistributionChannelAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemDistributionChannelActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemPriceAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemPriceActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemShippingDetailsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemShippingDetailsActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTaxAmountAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTaxAmountActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTaxRateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTaxRateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTotalPriceAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTotalPriceActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLocaleAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLocaleActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetOrderNumberAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetOrderNumberActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetOrderTotalTaxAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetOrderTotalTaxActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelItemsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelItemsActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelMeasurementsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelMeasurementsActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelTrackingDataAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelTrackingDataActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnInfoAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnInfoActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnPaymentStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnPaymentStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnShipmentStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnShipmentStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressAndCustomShippingMethodAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressAndCustomShippingMethodActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressAndShippingMethodAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressAndShippingMethodActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressCustomFieldActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressCustomTypeActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodTaxAmountAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodTaxAmountActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodTaxRateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodTaxRateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingRateInputAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingRateInputActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionCustomLineItemStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionCustomLineItemStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionLineItemStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionLineItemStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionStateActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderUpdateItemShippingAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderUpdateItemShippingAddressActionModel;
use Commercetools\Api\Models\OrderEdit\StagedOrderUpdateSyncInfoAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderUpdateSyncInfoActionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedOrderUpdateActionModel extends JsonObjectModel implements StagedOrderUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
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
       'setBillingAddressCustomField' => StagedOrderSetBillingAddressCustomFieldActionModel::class,
       'setBillingAddressCustomType' => StagedOrderSetBillingAddressCustomTypeActionModel::class,
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
       'setDeliveryAddressCustomField' => StagedOrderSetDeliveryAddressCustomFieldActionModel::class,
       'setDeliveryAddressCustomType' => StagedOrderSetDeliveryAddressCustomTypeActionModel::class,
       'setDeliveryCustomField' => StagedOrderSetDeliveryCustomFieldActionModel::class,
       'setDeliveryCustomType' => StagedOrderSetDeliveryCustomTypeActionModel::class,
       'setDeliveryItems' => StagedOrderSetDeliveryItemsActionModel::class,
       'setItemShippingAddressCustomField' => StagedOrderSetItemShippingAddressCustomFieldActionModel::class,
       'setItemShippingAddressCustomType' => StagedOrderSetItemShippingAddressCustomTypeActionModel::class,
       'setLineItemCustomField' => StagedOrderSetLineItemCustomFieldActionModel::class,
       'setLineItemCustomType' => StagedOrderSetLineItemCustomTypeActionModel::class,
       'setLineItemDistributionChannel' => StagedOrderSetLineItemDistributionChannelActionModel::class,
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
       'setReturnInfo' => StagedOrderSetReturnInfoActionModel::class,
       'setReturnPaymentState' => StagedOrderSetReturnPaymentStateActionModel::class,
       'setReturnShipmentState' => StagedOrderSetReturnShipmentStateActionModel::class,
       'setShippingAddress' => StagedOrderSetShippingAddressActionModel::class,
       'setShippingAddressAndCustomShippingMethod' => StagedOrderSetShippingAddressAndCustomShippingMethodActionModel::class,
       'setShippingAddressAndShippingMethod' => StagedOrderSetShippingAddressAndShippingMethodActionModel::class,
       'setShippingAddressCustomField' => StagedOrderSetShippingAddressCustomFieldActionModel::class,
       'setShippingAddressCustomType' => StagedOrderSetShippingAddressCustomTypeActionModel::class,
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

    /**
     * @psalm-suppress MissingParamType
     */
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
            $data = $this->raw(self::FIELD_ACTION);
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
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = StagedOrderUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->$fieldName)) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->$fieldName;
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<StagedOrderUpdateAction> */
        $type = StagedOrderUpdateActionModel::class;
        return $type;
    }
}
