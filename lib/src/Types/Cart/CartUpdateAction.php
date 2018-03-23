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
        'setShippingAddress' => Types\Cart\CartSetShippingAddressAction::class,
        'setShippingMethodTaxRate' => Types\Cart\CartSetShippingMethodTaxRateAction::class,
        'changeCustomLineItemQuantity' => Types\Cart\CartChangeCustomLineItemQuantityAction::class,
        'setCustomLineItemTaxAmount' => Types\Cart\CartSetCustomLineItemTaxAmountAction::class,
        'setCustomField' => Types\Cart\CartSetCustomFieldAction::class,
        'addShoppingList' => Types\Cart\CartAddShoppingListAction::class,
        'setCartTotalTax' => Types\Cart\CartSetCartTotalTaxAction::class,
        'changeCustomLineItemMoney' => Types\Cart\CartChangeCustomLineItemMoneyAction::class,
        'setLineItemTaxAmount' => Types\Cart\CartSetLineItemTaxAmountAction::class,
        'setCountry' => Types\Cart\CartSetCountryAction::class,
        'setShippingRateInput' => Types\Cart\CartSetShippingRateInputAction::class,
        'setCustomerGroup' => Types\Cart\CartSetCustomerGroupAction::class,
        'setShippingMethod' => Types\Cart\CartSetShippingMethodAction::class,
        'setLineItemPrice' => Types\Cart\CartSetLineItemPriceAction::class,
        'changeTaxRoundingMode' => Types\Cart\CartChangeTaxRoundingModeAction::class,
        'setCustomLineItemCustomType' => Types\Cart\CartSetCustomLineItemCustomTypeAction::class,
        'changeTaxCalculationMode' => Types\Cart\CartChangeTaxCalculationModeAction::class,
        'changeTaxMode' => Types\Cart\CartChangeTaxModeAction::class,
        'setCustomLineItemTaxRate' => Types\Cart\CartSetCustomLineItemTaxRateAction::class,
        'addDiscountCode' => Types\Cart\CartAddDiscountCodeAction::class,
        'setLocale' => Types\Cart\CartSetLocaleAction::class,
        'setLineItemCustomType' => Types\Cart\CartSetLineItemCustomTypeAction::class,
        'setAnonymousId' => Types\Cart\CartSetAnonymousIdAction::class,
        'setShippingMethodTaxAmount' => Types\Cart\CartSetShippingMethodTaxAmountAction::class,
        'removeDiscountCode' => Types\Cart\CartRemoveDiscountCodeAction::class,
        'removePayment' => Types\Cart\CartRemovePaymentAction::class,
        'addCustomLineItem' => Types\Cart\CartAddCustomLineItemAction::class,
        'setCustomType' => Types\Cart\CartSetCustomTypeAction::class,
        'setCustomShippingMethod' => Types\Cart\CartSetCustomShippingMethodAction::class,
        'addLineItem' => Types\Cart\CartAddLineItemAction::class,
        'setLineItemCustomField' => Types\Cart\CartSetLineItemCustomFieldAction::class,
        'setBillingAddress' => Types\Cart\CartSetBillingAddressAction::class,
        'removeCustomLineItem' => Types\Cart\CartRemoveCustomLineItemAction::class,
        'addPayment' => Types\Cart\CartAddPaymentAction::class,
        'changeLineItemQuantity' => Types\Cart\CartChangeLineItemQuantityAction::class,
        'setCustomerId' => Types\Cart\CartSetCustomerIdAction::class,
        'removeLineItem' => Types\Cart\CartRemoveLineItemAction::class,
        'recalculate' => Types\Cart\CartRecalculateAction::class,
        'setDeleteDaysAfterLastModification' => Types\Cart\CartSetDeleteDaysAfterLastModificationAction::class,
        'setLineItemTotalPrice' => Types\Cart\CartSetLineItemTotalPriceAction::class,
        'setCustomLineItemCustomField' => Types\Cart\CartSetCustomLineItemCustomFieldAction::class,
        'setLineItemTaxRate' => Types\Cart\CartSetLineItemTaxRateAction::class,
        'setCustomerEmail' => Types\Cart\CartSetCustomerEmailAction::class,

    ];

}
