<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface CartUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'setShippingMethodTaxRate' => Types\Cart\CartSetShippingMethodTaxRateAction::class,
        'changeTaxMode' => Types\Cart\CartChangeTaxModeAction::class,
        'setCustomType' => Types\Cart\CartSetCustomTypeAction::class,
        'setCustomLineItemTaxAmount' => Types\Cart\CartSetCustomLineItemTaxAmountAction::class,
        'removeLineItem' => Types\Cart\CartRemoveLineItemAction::class,
        'recalculate' => Types\Cart\CartRecalculateAction::class,
        'changeLineItemQuantity' => Types\Cart\CartChangeLineItemQuantityAction::class,
        'setCustomLineItemCustomField' => Types\Cart\CartSetCustomLineItemCustomFieldAction::class,
        'changeTaxCalculationMode' => Types\Cart\CartChangeTaxCalculationModeAction::class,
        'setLocale' => Types\Cart\CartSetLocaleAction::class,
        'setCustomLineItemCustomType' => Types\Cart\CartSetCustomLineItemCustomTypeAction::class,
        'setLineItemCustomField' => Types\Cart\CartSetLineItemCustomFieldAction::class,
        'setShippingRateInput' => Types\Cart\CartSetShippingRateInputAction::class,
        'setLineItemTotalPrice' => Types\Cart\CartSetLineItemTotalPriceAction::class,
        'addLineItem' => Types\Cart\CartAddLineItemAction::class,
        'setCustomShippingMethod' => Types\Cart\CartSetCustomShippingMethodAction::class,
        'setCustomerEmail' => Types\Cart\CartSetCustomerEmailAction::class,
        'addShoppingList' => Types\Cart\CartAddShoppingListAction::class,
        'setShippingMethodTaxAmount' => Types\Cart\CartSetShippingMethodTaxAmountAction::class,
        'setLineItemTaxRate' => Types\Cart\CartSetLineItemTaxRateAction::class,
        'setCountry' => Types\Cart\CartSetCountryAction::class,
        'addDiscountCode' => Types\Cart\CartAddDiscountCodeAction::class,
        'setAnonymousId' => Types\Cart\CartSetAnonymousIdAction::class,
        'setCartTotalTax' => Types\Cart\CartSetCartTotalTaxAction::class,
        'addPayment' => Types\Cart\CartAddPaymentAction::class,
        'removeCustomLineItem' => Types\Cart\CartRemoveCustomLineItemAction::class,
        'setCustomerId' => Types\Cart\CartSetCustomerIdAction::class,
        'setCustomerGroup' => Types\Cart\CartSetCustomerGroupAction::class,
        'changeCustomLineItemMoney' => Types\Cart\CartChangeCustomLineItemMoneyAction::class,
        'setLineItemTaxAmount' => Types\Cart\CartSetLineItemTaxAmountAction::class,
        'setCustomField' => Types\Cart\CartSetCustomFieldAction::class,
        'removePayment' => Types\Cart\CartRemovePaymentAction::class,
        'changeCustomLineItemQuantity' => Types\Cart\CartChangeCustomLineItemQuantityAction::class,
        'changeTaxRoundingMode' => Types\Cart\CartChangeTaxRoundingModeAction::class,
        'setLineItemCustomType' => Types\Cart\CartSetLineItemCustomTypeAction::class,
        'setBillingAddress' => Types\Cart\CartSetBillingAddressAction::class,
        'removeDiscountCode' => Types\Cart\CartRemoveDiscountCodeAction::class,
        'addCustomLineItem' => Types\Cart\CartAddCustomLineItemAction::class,
        'setLineItemPrice' => Types\Cart\CartSetLineItemPriceAction::class,
        'setShippingMethod' => Types\Cart\CartSetShippingMethodAction::class,
        'setCustomLineItemTaxRate' => Types\Cart\CartSetCustomLineItemTaxRateAction::class,
        'setShippingAddress' => Types\Cart\CartSetShippingAddressAction::class,
        'setDeleteDaysAfterLastModification' => Types\Cart\CartSetDeleteDaysAfterLastModificationAction::class,

    ];

}
