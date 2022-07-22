<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartUpdateActionModel extends JsonObjectModel implements CartUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**

     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<CartUpdateAction> >
     * @psalm-suppress InvalidPropertyAssignmentValue
     */
    private static $discriminatorClasses = [
       'addCustomLineItem' => CartAddCustomLineItemActionModel::class,
       'addDiscountCode' => CartAddDiscountCodeActionModel::class,
       'addItemShippingAddress' => CartAddItemShippingAddressActionModel::class,
       'addLineItem' => CartAddLineItemActionModel::class,
       'addPayment' => CartAddPaymentActionModel::class,
       'addShoppingList' => CartAddShoppingListActionModel::class,
       'applyDeltaToCustomLineItemShippingDetailsTargets' => CartApplyDeltaToCustomLineItemShippingDetailsTargetsActionModel::class,
       'applyDeltaToLineItemShippingDetailsTargets' => CartApplyDeltaToLineItemShippingDetailsTargetsActionModel::class,
       'changeCustomLineItemMoney' => CartChangeCustomLineItemMoneyActionModel::class,
       'changeCustomLineItemPriceMode' => CartChangeCustomLineItemPriceModeActionModel::class,
       'changeCustomLineItemQuantity' => CartChangeCustomLineItemQuantityActionModel::class,
       'changeLineItemQuantity' => CartChangeLineItemQuantityActionModel::class,
       'changeTaxCalculationMode' => CartChangeTaxCalculationModeActionModel::class,
       'changeTaxMode' => CartChangeTaxModeActionModel::class,
       'changeTaxRoundingMode' => CartChangeTaxRoundingModeActionModel::class,
       'recalculate' => CartRecalculateActionModel::class,
       'removeCustomLineItem' => CartRemoveCustomLineItemActionModel::class,
       'removeDiscountCode' => CartRemoveDiscountCodeActionModel::class,
       'removeItemShippingAddress' => CartRemoveItemShippingAddressActionModel::class,
       'removeLineItem' => CartRemoveLineItemActionModel::class,
       'removePayment' => CartRemovePaymentActionModel::class,
       'setAnonymousId' => CartSetAnonymousIdActionModel::class,
       'setBillingAddress' => CartSetBillingAddressActionModel::class,
       'setBillingAddressCustomField' => CartSetBillingAddressCustomFieldActionModel::class,
       'setBillingAddressCustomType' => CartSetBillingAddressCustomTypeActionModel::class,
       'setCartTotalTax' => CartSetCartTotalTaxActionModel::class,
       'setCountry' => CartSetCountryActionModel::class,
       'setCustomField' => CartSetCustomFieldActionModel::class,
       'setCustomLineItemCustomField' => CartSetCustomLineItemCustomFieldActionModel::class,
       'setCustomLineItemCustomType' => CartSetCustomLineItemCustomTypeActionModel::class,
       'setCustomLineItemShippingDetails' => CartSetCustomLineItemShippingDetailsActionModel::class,
       'setCustomLineItemTaxAmount' => CartSetCustomLineItemTaxAmountActionModel::class,
       'setCustomLineItemTaxRate' => CartSetCustomLineItemTaxRateActionModel::class,
       'setCustomShippingMethod' => CartSetCustomShippingMethodActionModel::class,
       'setCustomType' => CartSetCustomTypeActionModel::class,
       'setCustomerEmail' => CartSetCustomerEmailActionModel::class,
       'setCustomerGroup' => CartSetCustomerGroupActionModel::class,
       'setCustomerId' => CartSetCustomerIdActionModel::class,
       'setDeleteDaysAfterLastModification' => CartSetDeleteDaysAfterLastModificationActionModel::class,
       'setDeliveryAddressCustomField' => CartSetDeliveryAddressCustomFieldActionModel::class,
       'setDeliveryAddressCustomType' => CartSetDeliveryAddressCustomTypeActionModel::class,
       'setDirectDiscounts' => CartSetDirectDiscountsActionModel::class,
       'setItemShippingAddressCustomField' => CartSetItemShippingAddressCustomFieldActionModel::class,
       'setItemShippingAddressCustomType' => CartSetItemShippingAddressCustomTypeActionModel::class,
       'setKey' => CartSetKeyActionModel::class,
       'setLineItemCustomField' => CartSetLineItemCustomFieldActionModel::class,
       'setLineItemCustomType' => CartSetLineItemCustomTypeActionModel::class,
       'setLineItemDistributionChannel' => CartSetLineItemDistributionChannelActionModel::class,
       'setLineItemPrice' => CartSetLineItemPriceActionModel::class,
       'setLineItemShippingDetails' => CartSetLineItemShippingDetailsActionModel::class,
       'setLineItemSupplyChannel' => CartSetLineItemSupplyChannelActionModel::class,
       'setLineItemTaxAmount' => CartSetLineItemTaxAmountActionModel::class,
       'setLineItemTaxRate' => CartSetLineItemTaxRateActionModel::class,
       'setLineItemTotalPrice' => CartSetLineItemTotalPriceActionModel::class,
       'setLocale' => CartSetLocaleActionModel::class,
       'setShippingAddress' => CartSetShippingAddressActionModel::class,
       'setShippingAddressCustomField' => CartSetShippingAddressCustomFieldActionModel::class,
       'setShippingAddressCustomType' => CartSetShippingAddressCustomTypeActionModel::class,
       'setShippingMethod' => CartSetShippingMethodActionModel::class,
       'setShippingMethodTaxAmount' => CartSetShippingMethodTaxAmountActionModel::class,
       'setShippingMethodTaxRate' => CartSetShippingMethodTaxRateActionModel::class,
       'setShippingRateInput' => CartSetShippingRateInputActionModel::class,
       'updateItemShippingAddress' => CartUpdateItemShippingAddressActionModel::class,
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
     * @psalm-return class-string<CartUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = CartUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<CartUpdateAction> */
        $type = CartUpdateActionModel::class;
        return $type;
    }
}
