<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartUpdateActionModel extends JsonObjectModel implements CartUpdateAction
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<CartUpdateAction> >
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
        'setLineItemCustomField' => CartSetLineItemCustomFieldActionModel::class,
        'setLineItemCustomType' => CartSetLineItemCustomTypeActionModel::class,
        'setLineItemPrice' => CartSetLineItemPriceActionModel::class,
        'setLineItemShippingDetails' => CartSetLineItemShippingDetailsActionModel::class,
        'setLineItemTaxAmount' => CartSetLineItemTaxAmountActionModel::class,
        'setLineItemTaxRate' => CartSetLineItemTaxRateActionModel::class,
        'setLineItemTotalPrice' => CartSetLineItemTotalPriceActionModel::class,
        'setLocale' => CartSetLocaleActionModel::class,
        'setShippingAddress' => CartSetShippingAddressActionModel::class,
        'setShippingMethod' => CartSetShippingMethodActionModel::class,
        'setShippingMethodTaxAmount' => CartSetShippingMethodTaxAmountActionModel::class,
        'setShippingMethodTaxRate' => CartSetShippingMethodTaxRateActionModel::class,
        'setShippingRateInput' => CartSetShippingRateInputActionModel::class,
        'updateItemShippingAddress' => CartUpdateItemShippingAddressActionModel::class,
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
            $data = $this->raw(CartUpdateAction::FIELD_ACTION);
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
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = CartUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<CartUpdateAction> */
        $type = CartUpdateActionModel::class;

        return $type;
    }
}
