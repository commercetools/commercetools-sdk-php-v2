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
        'addCustomLineItem' => Types\Cart\CartAddCustomLineItemAction::class,
        'addDiscountCode' => Types\Cart\CartAddDiscountCodeAction::class,
        'addLineItem' => Types\Cart\CartAddLineItemAction::class,
        'addPayment' => Types\Cart\CartAddPaymentAction::class,
        'addShoppingList' => Types\Cart\CartAddShoppingListAction::class,
        'changeCustomLineItemMoney' => Types\Cart\CartChangeCustomLineItemMoneyAction::class,
        'changeCustomLineItemQuantity' => Types\Cart\CartChangeCustomLineItemQuantityAction::class,
        'changeLineItemQuantity' => Types\Cart\CartChangeLineItemQuantityAction::class,
        'changeTaxCalculationMode' => Types\Cart\CartChangeTaxCalculationModeAction::class,
        'changeTaxMode' => Types\Cart\CartChangeTaxModeAction::class,
        'changeTaxRoundingMode' => Types\Cart\CartChangeTaxRoundingModeAction::class,
        'recalculate' => Types\Cart\CartRecalculateAction::class,
        'removeCustomLineItem' => Types\Cart\CartRemoveCustomLineItemAction::class,
        'removeDiscountCode' => Types\Cart\CartRemoveDiscountCodeAction::class,
        'removeLineItem' => Types\Cart\CartRemoveLineItemAction::class,
        'removePayment' => Types\Cart\CartRemovePaymentAction::class,
        'setAnonymousId' => Types\Cart\CartSetAnonymousIdAction::class,
        'setBillingAddress' => Types\Cart\CartSetBillingAddressAction::class,
        'setCartTotalTax' => Types\Cart\CartSetCartTotalTaxAction::class,
        'setCountry' => Types\Cart\CartSetCountryAction::class,
        'setCustomField' => Types\Cart\CartSetCustomFieldAction::class,
        'setCustomLineItemCustomField' => Types\Cart\CartSetCustomLineItemCustomFieldAction::class,
        'setCustomLineItemCustomType' => Types\Cart\CartSetCustomLineItemCustomTypeAction::class,
        'setCustomLineItemTaxAmount' => Types\Cart\CartSetCustomLineItemTaxAmountAction::class,
        'setCustomLineItemTaxRate' => Types\Cart\CartSetCustomLineItemTaxRateAction::class,
        'setCustomShippingMethod' => Types\Cart\CartSetCustomShippingMethodAction::class,
        'setCustomType' => Types\Cart\CartSetCustomTypeAction::class,
        'setCustomerEmail' => Types\Cart\CartSetCustomerEmailAction::class,
        'setCustomerGroup' => Types\Cart\CartSetCustomerGroupAction::class,
        'setCustomerId' => Types\Cart\CartSetCustomerIdAction::class,
        'setDeleteDaysAfterLastModification' => Types\Cart\CartSetDeleteDaysAfterLastModificationAction::class,
        'setLineItemCustomField' => Types\Cart\CartSetLineItemCustomFieldAction::class,
        'setLineItemCustomType' => Types\Cart\CartSetLineItemCustomTypeAction::class,
        'setLineItemPrice' => Types\Cart\CartSetLineItemPriceAction::class,
        'setLineItemTaxAmount' => Types\Cart\CartSetLineItemTaxAmountAction::class,
        'setLineItemTaxRate' => Types\Cart\CartSetLineItemTaxRateAction::class,
        'setLineItemTotalPrice' => Types\Cart\CartSetLineItemTotalPriceAction::class,
        'setLocale' => Types\Cart\CartSetLocaleAction::class,
        'setShippingAddress' => Types\Cart\CartSetShippingAddressAction::class,
        'setShippingMethod' => Types\Cart\CartSetShippingMethodAction::class,
        'setShippingMethodTaxAmount' => Types\Cart\CartSetShippingMethodTaxAmountAction::class,
        'setShippingMethodTaxRate' => Types\Cart\CartSetShippingMethodTaxRateAction::class,
        'setShippingRateInput' => Types\Cart\CartSetShippingRateInputAction::class,

    ];

}
