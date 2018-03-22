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
        'setShippingMethodTaxAmount' => Types\Cart\CartSetShippingMethodTaxAmountAction::class,
        'changeTaxCalculationMode' => Types\Cart\CartChangeTaxCalculationModeAction::class,
        'setCustomShippingMethod' => Types\Cart\CartSetCustomShippingMethodAction::class,
        'setCustomLineItemCustomType' => Types\Cart\CartSetCustomLineItemCustomTypeAction::class,
        'removeDiscountCode' => Types\Cart\CartRemoveDiscountCodeAction::class,
        'changeCustomLineItemQuantity' => Types\Cart\CartChangeCustomLineItemQuantityAction::class,
        'setCustomField' => Types\Cart\CartSetCustomFieldAction::class,
        'changeLineItemQuantity' => Types\Cart\CartChangeLineItemQuantityAction::class,
        'setLineItemTotalPrice' => Types\Cart\CartSetLineItemTotalPriceAction::class,
        'setCustomLineItemCustomField' => Types\Cart\CartSetCustomLineItemCustomFieldAction::class,
        'setDeleteDaysAfterLastModification' => Types\Cart\CartSetDeleteDaysAfterLastModificationAction::class,
        'setShippingMethodTaxRate' => Types\Cart\CartSetShippingMethodTaxRateAction::class,
        'setLineItemTaxRate' => Types\Cart\CartSetLineItemTaxRateAction::class,
        'addDiscountCode' => Types\Cart\CartAddDiscountCodeAction::class,
        'setCustomLineItemTaxRate' => Types\Cart\CartSetCustomLineItemTaxRateAction::class,
        'changeTaxRoundingMode' => Types\Cart\CartChangeTaxRoundingModeAction::class,
        'setCustomType' => Types\Cart\CartSetCustomTypeAction::class,
        'addPayment' => Types\Cart\CartAddPaymentAction::class,
        'setShippingMethod' => Types\Cart\CartSetShippingMethodAction::class,
        'setLineItemTaxAmount' => Types\Cart\CartSetLineItemTaxAmountAction::class,
        'setCartTotalTax' => Types\Cart\CartSetCartTotalTaxAction::class,
        'addCustomLineItem' => Types\Cart\CartAddCustomLineItemAction::class,
        'setShippingRateInput' => Types\Cart\CartSetShippingRateInputAction::class,
        'removePayment' => Types\Cart\CartRemovePaymentAction::class,
        'setBillingAddress' => Types\Cart\CartSetBillingAddressAction::class,
        'addLineItem' => Types\Cart\CartAddLineItemAction::class,
        'setCustomerGroup' => Types\Cart\CartSetCustomerGroupAction::class,
        'setCustomerEmail' => Types\Cart\CartSetCustomerEmailAction::class,
        'addShoppingList' => Types\Cart\CartAddShoppingListAction::class,
        'setLineItemPrice' => Types\Cart\CartSetLineItemPriceAction::class,
        'setCountry' => Types\Cart\CartSetCountryAction::class,
        'removeLineItem' => Types\Cart\CartRemoveLineItemAction::class,
        'changeCustomLineItemMoney' => Types\Cart\CartChangeCustomLineItemMoneyAction::class,
        'changeTaxMode' => Types\Cart\CartChangeTaxModeAction::class,
        'setLineItemCustomField' => Types\Cart\CartSetLineItemCustomFieldAction::class,
        'setAnonymousId' => Types\Cart\CartSetAnonymousIdAction::class,
        'removeCustomLineItem' => Types\Cart\CartRemoveCustomLineItemAction::class,
        'setLineItemCustomType' => Types\Cart\CartSetLineItemCustomTypeAction::class,
        'setShippingAddress' => Types\Cart\CartSetShippingAddressAction::class,
        'recalculate' => Types\Cart\CartRecalculateAction::class,
        'setCustomLineItemTaxAmount' => Types\Cart\CartSetCustomLineItemTaxAmountAction::class,
        'setLocale' => Types\Cart\CartSetLocaleAction::class,
        'setCustomerId' => Types\Cart\CartSetCustomerIdAction::class,

    ];

}
