<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\CartUpdateBuilder;
use Commercetools\Types\Cart\CartAddCustomLineItemAction;
use Commercetools\Types\Cart\CartAddDiscountCodeAction;
use Commercetools\Types\Cart\CartAddLineItemAction;
use Commercetools\Types\Cart\CartAddPaymentAction;
use Commercetools\Types\Cart\CartAddShoppingListAction;
use Commercetools\Types\Cart\CartChangeCustomLineItemMoneyAction;
use Commercetools\Types\Cart\CartChangeCustomLineItemQuantityAction;
use Commercetools\Types\Cart\CartChangeLineItemQuantityAction;
use Commercetools\Types\Cart\CartChangeTaxCalculationModeAction;
use Commercetools\Types\Cart\CartChangeTaxModeAction;
use Commercetools\Types\Cart\CartChangeTaxRoundingModeAction;
use Commercetools\Types\Cart\CartRecalculateAction;
use Commercetools\Types\Cart\CartRemoveCustomLineItemAction;
use Commercetools\Types\Cart\CartRemoveDiscountCodeAction;
use Commercetools\Types\Cart\CartRemoveLineItemAction;
use Commercetools\Types\Cart\CartRemovePaymentAction;
use Commercetools\Types\Cart\CartSetAnonymousIdAction;
use Commercetools\Types\Cart\CartSetBillingAddressAction;
use Commercetools\Types\Cart\CartSetCartTotalTaxAction;
use Commercetools\Types\Cart\CartSetCountryAction;
use Commercetools\Types\Cart\CartSetCustomFieldAction;
use Commercetools\Types\Cart\CartSetCustomLineItemCustomFieldAction;
use Commercetools\Types\Cart\CartSetCustomLineItemCustomTypeAction;
use Commercetools\Types\Cart\CartSetCustomLineItemTaxAmountAction;
use Commercetools\Types\Cart\CartSetCustomLineItemTaxRateAction;
use Commercetools\Types\Cart\CartSetCustomShippingMethodAction;
use Commercetools\Types\Cart\CartSetCustomTypeAction;
use Commercetools\Types\Cart\CartSetCustomerEmailAction;
use Commercetools\Types\Cart\CartSetCustomerGroupAction;
use Commercetools\Types\Cart\CartSetCustomerIdAction;
use Commercetools\Types\Cart\CartSetDeleteDaysAfterLastModificationAction;
use Commercetools\Types\Cart\CartSetLineItemCustomFieldAction;
use Commercetools\Types\Cart\CartSetLineItemCustomTypeAction;
use Commercetools\Types\Cart\CartSetLineItemPriceAction;
use Commercetools\Types\Cart\CartSetLineItemTaxAmountAction;
use Commercetools\Types\Cart\CartSetLineItemTaxRateAction;
use Commercetools\Types\Cart\CartSetLineItemTotalPriceAction;
use Commercetools\Types\Cart\CartSetLocaleAction;
use Commercetools\Types\Cart\CartSetShippingAddressAction;
use Commercetools\Types\Cart\CartSetShippingMethodAction;
use Commercetools\Types\Cart\CartSetShippingMethodTaxAmountAction;
use Commercetools\Types\Cart\CartSetShippingMethodTaxRateAction;
use Commercetools\Types\Cart\CartSetShippingRateInputAction;
use Commercetools\Types\Cart\Cart;
use Commercetools\Types\Cart\CartUpdate;
use Commercetools\Request\ByProjectKeyCartsByIDPost;

use Commercetools\Types\Cart\CartAddCustomLineItemActionModel;
use Commercetools\Types\Cart\CartAddDiscountCodeActionModel;
use Commercetools\Types\Cart\CartAddLineItemActionModel;
use Commercetools\Types\Cart\CartAddPaymentActionModel;
use Commercetools\Types\Cart\CartAddShoppingListActionModel;
use Commercetools\Types\Cart\CartChangeCustomLineItemMoneyActionModel;
use Commercetools\Types\Cart\CartChangeCustomLineItemQuantityActionModel;
use Commercetools\Types\Cart\CartChangeLineItemQuantityActionModel;
use Commercetools\Types\Cart\CartChangeTaxCalculationModeActionModel;
use Commercetools\Types\Cart\CartChangeTaxModeActionModel;
use Commercetools\Types\Cart\CartChangeTaxRoundingModeActionModel;
use Commercetools\Types\Cart\CartRecalculateActionModel;
use Commercetools\Types\Cart\CartRemoveCustomLineItemActionModel;
use Commercetools\Types\Cart\CartRemoveDiscountCodeActionModel;
use Commercetools\Types\Cart\CartRemoveLineItemActionModel;
use Commercetools\Types\Cart\CartRemovePaymentActionModel;
use Commercetools\Types\Cart\CartSetAnonymousIdActionModel;
use Commercetools\Types\Cart\CartSetBillingAddressActionModel;
use Commercetools\Types\Cart\CartSetCartTotalTaxActionModel;
use Commercetools\Types\Cart\CartSetCountryActionModel;
use Commercetools\Types\Cart\CartSetCustomFieldActionModel;
use Commercetools\Types\Cart\CartSetCustomLineItemCustomFieldActionModel;
use Commercetools\Types\Cart\CartSetCustomLineItemCustomTypeActionModel;
use Commercetools\Types\Cart\CartSetCustomLineItemTaxAmountActionModel;
use Commercetools\Types\Cart\CartSetCustomLineItemTaxRateActionModel;
use Commercetools\Types\Cart\CartSetCustomShippingMethodActionModel;
use Commercetools\Types\Cart\CartSetCustomTypeActionModel;
use Commercetools\Types\Cart\CartSetCustomerEmailActionModel;
use Commercetools\Types\Cart\CartSetCustomerGroupActionModel;
use Commercetools\Types\Cart\CartSetCustomerIdActionModel;
use Commercetools\Types\Cart\CartSetDeleteDaysAfterLastModificationActionModel;
use Commercetools\Types\Cart\CartSetLineItemCustomFieldActionModel;
use Commercetools\Types\Cart\CartSetLineItemCustomTypeActionModel;
use Commercetools\Types\Cart\CartSetLineItemPriceActionModel;
use Commercetools\Types\Cart\CartSetLineItemTaxAmountActionModel;
use Commercetools\Types\Cart\CartSetLineItemTaxRateActionModel;
use Commercetools\Types\Cart\CartSetLineItemTotalPriceActionModel;
use Commercetools\Types\Cart\CartSetLocaleActionModel;
use Commercetools\Types\Cart\CartSetShippingAddressActionModel;
use Commercetools\Types\Cart\CartSetShippingMethodActionModel;
use Commercetools\Types\Cart\CartSetShippingMethodTaxAmountActionModel;
use Commercetools\Types\Cart\CartSetShippingMethodTaxRateActionModel;
use Commercetools\Types\Cart\CartSetShippingRateInputActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\Cart\CartModel;


class CartBuilderTest extends TestCase {
    public function testAddCustomLineItemCallback() {
        $builder = new CartUpdateBuilder();
        $builder->addCustomLineItem(function($action) { static::assertInstanceOf(CartAddCustomLineItemAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartAddCustomLineItemAction::class, $update->getActions()->current());
    }

    public function testAddCustomLineItemInstance() {
        $builder = new CartUpdateBuilder();
        $builder->addCustomLineItem(new CartAddCustomLineItemActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartAddCustomLineItemAction::class, $update->getActions()->current());
    }

    public function testAddDiscountCodeCallback() {
        $builder = new CartUpdateBuilder();
        $builder->addDiscountCode(function($action) { static::assertInstanceOf(CartAddDiscountCodeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartAddDiscountCodeAction::class, $update->getActions()->current());
    }

    public function testAddDiscountCodeInstance() {
        $builder = new CartUpdateBuilder();
        $builder->addDiscountCode(new CartAddDiscountCodeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartAddDiscountCodeAction::class, $update->getActions()->current());
    }

    public function testAddLineItemCallback() {
        $builder = new CartUpdateBuilder();
        $builder->addLineItem(function($action) { static::assertInstanceOf(CartAddLineItemAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartAddLineItemAction::class, $update->getActions()->current());
    }

    public function testAddLineItemInstance() {
        $builder = new CartUpdateBuilder();
        $builder->addLineItem(new CartAddLineItemActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartAddLineItemAction::class, $update->getActions()->current());
    }

    public function testAddPaymentCallback() {
        $builder = new CartUpdateBuilder();
        $builder->addPayment(function($action) { static::assertInstanceOf(CartAddPaymentAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartAddPaymentAction::class, $update->getActions()->current());
    }

    public function testAddPaymentInstance() {
        $builder = new CartUpdateBuilder();
        $builder->addPayment(new CartAddPaymentActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartAddPaymentAction::class, $update->getActions()->current());
    }

    public function testAddShoppingListCallback() {
        $builder = new CartUpdateBuilder();
        $builder->addShoppingList(function($action) { static::assertInstanceOf(CartAddShoppingListAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartAddShoppingListAction::class, $update->getActions()->current());
    }

    public function testAddShoppingListInstance() {
        $builder = new CartUpdateBuilder();
        $builder->addShoppingList(new CartAddShoppingListActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartAddShoppingListAction::class, $update->getActions()->current());
    }

    public function testChangeCustomLineItemMoneyCallback() {
        $builder = new CartUpdateBuilder();
        $builder->changeCustomLineItemMoney(function($action) { static::assertInstanceOf(CartChangeCustomLineItemMoneyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartChangeCustomLineItemMoneyAction::class, $update->getActions()->current());
    }

    public function testChangeCustomLineItemMoneyInstance() {
        $builder = new CartUpdateBuilder();
        $builder->changeCustomLineItemMoney(new CartChangeCustomLineItemMoneyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartChangeCustomLineItemMoneyAction::class, $update->getActions()->current());
    }

    public function testChangeCustomLineItemQuantityCallback() {
        $builder = new CartUpdateBuilder();
        $builder->changeCustomLineItemQuantity(function($action) { static::assertInstanceOf(CartChangeCustomLineItemQuantityAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartChangeCustomLineItemQuantityAction::class, $update->getActions()->current());
    }

    public function testChangeCustomLineItemQuantityInstance() {
        $builder = new CartUpdateBuilder();
        $builder->changeCustomLineItemQuantity(new CartChangeCustomLineItemQuantityActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartChangeCustomLineItemQuantityAction::class, $update->getActions()->current());
    }

    public function testChangeLineItemQuantityCallback() {
        $builder = new CartUpdateBuilder();
        $builder->changeLineItemQuantity(function($action) { static::assertInstanceOf(CartChangeLineItemQuantityAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartChangeLineItemQuantityAction::class, $update->getActions()->current());
    }

    public function testChangeLineItemQuantityInstance() {
        $builder = new CartUpdateBuilder();
        $builder->changeLineItemQuantity(new CartChangeLineItemQuantityActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartChangeLineItemQuantityAction::class, $update->getActions()->current());
    }

    public function testChangeTaxCalculationModeCallback() {
        $builder = new CartUpdateBuilder();
        $builder->changeTaxCalculationMode(function($action) { static::assertInstanceOf(CartChangeTaxCalculationModeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartChangeTaxCalculationModeAction::class, $update->getActions()->current());
    }

    public function testChangeTaxCalculationModeInstance() {
        $builder = new CartUpdateBuilder();
        $builder->changeTaxCalculationMode(new CartChangeTaxCalculationModeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartChangeTaxCalculationModeAction::class, $update->getActions()->current());
    }

    public function testChangeTaxModeCallback() {
        $builder = new CartUpdateBuilder();
        $builder->changeTaxMode(function($action) { static::assertInstanceOf(CartChangeTaxModeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartChangeTaxModeAction::class, $update->getActions()->current());
    }

    public function testChangeTaxModeInstance() {
        $builder = new CartUpdateBuilder();
        $builder->changeTaxMode(new CartChangeTaxModeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartChangeTaxModeAction::class, $update->getActions()->current());
    }

    public function testChangeTaxRoundingModeCallback() {
        $builder = new CartUpdateBuilder();
        $builder->changeTaxRoundingMode(function($action) { static::assertInstanceOf(CartChangeTaxRoundingModeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartChangeTaxRoundingModeAction::class, $update->getActions()->current());
    }

    public function testChangeTaxRoundingModeInstance() {
        $builder = new CartUpdateBuilder();
        $builder->changeTaxRoundingMode(new CartChangeTaxRoundingModeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartChangeTaxRoundingModeAction::class, $update->getActions()->current());
    }

    public function testRecalculateCallback() {
        $builder = new CartUpdateBuilder();
        $builder->recalculate(function($action) { static::assertInstanceOf(CartRecalculateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartRecalculateAction::class, $update->getActions()->current());
    }

    public function testRecalculateInstance() {
        $builder = new CartUpdateBuilder();
        $builder->recalculate(new CartRecalculateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartRecalculateAction::class, $update->getActions()->current());
    }

    public function testRemoveCustomLineItemCallback() {
        $builder = new CartUpdateBuilder();
        $builder->removeCustomLineItem(function($action) { static::assertInstanceOf(CartRemoveCustomLineItemAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartRemoveCustomLineItemAction::class, $update->getActions()->current());
    }

    public function testRemoveCustomLineItemInstance() {
        $builder = new CartUpdateBuilder();
        $builder->removeCustomLineItem(new CartRemoveCustomLineItemActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartRemoveCustomLineItemAction::class, $update->getActions()->current());
    }

    public function testRemoveDiscountCodeCallback() {
        $builder = new CartUpdateBuilder();
        $builder->removeDiscountCode(function($action) { static::assertInstanceOf(CartRemoveDiscountCodeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartRemoveDiscountCodeAction::class, $update->getActions()->current());
    }

    public function testRemoveDiscountCodeInstance() {
        $builder = new CartUpdateBuilder();
        $builder->removeDiscountCode(new CartRemoveDiscountCodeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartRemoveDiscountCodeAction::class, $update->getActions()->current());
    }

    public function testRemoveLineItemCallback() {
        $builder = new CartUpdateBuilder();
        $builder->removeLineItem(function($action) { static::assertInstanceOf(CartRemoveLineItemAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartRemoveLineItemAction::class, $update->getActions()->current());
    }

    public function testRemoveLineItemInstance() {
        $builder = new CartUpdateBuilder();
        $builder->removeLineItem(new CartRemoveLineItemActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartRemoveLineItemAction::class, $update->getActions()->current());
    }

    public function testRemovePaymentCallback() {
        $builder = new CartUpdateBuilder();
        $builder->removePayment(function($action) { static::assertInstanceOf(CartRemovePaymentAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartRemovePaymentAction::class, $update->getActions()->current());
    }

    public function testRemovePaymentInstance() {
        $builder = new CartUpdateBuilder();
        $builder->removePayment(new CartRemovePaymentActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartRemovePaymentAction::class, $update->getActions()->current());
    }

    public function testSetAnonymousIdCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setAnonymousId(function($action) { static::assertInstanceOf(CartSetAnonymousIdAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetAnonymousIdAction::class, $update->getActions()->current());
    }

    public function testSetAnonymousIdInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setAnonymousId(new CartSetAnonymousIdActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetAnonymousIdAction::class, $update->getActions()->current());
    }

    public function testSetBillingAddressCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setBillingAddress(function($action) { static::assertInstanceOf(CartSetBillingAddressAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetBillingAddressAction::class, $update->getActions()->current());
    }

    public function testSetBillingAddressInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setBillingAddress(new CartSetBillingAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetBillingAddressAction::class, $update->getActions()->current());
    }

    public function testSetCartTotalTaxCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setCartTotalTax(function($action) { static::assertInstanceOf(CartSetCartTotalTaxAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCartTotalTaxAction::class, $update->getActions()->current());
    }

    public function testSetCartTotalTaxInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setCartTotalTax(new CartSetCartTotalTaxActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCartTotalTaxAction::class, $update->getActions()->current());
    }

    public function testSetCountryCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setCountry(function($action) { static::assertInstanceOf(CartSetCountryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCountryAction::class, $update->getActions()->current());
    }

    public function testSetCountryInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setCountry(new CartSetCountryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCountryAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(CartSetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomField(new CartSetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemCustomFieldCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomLineItemCustomField(function($action) { static::assertInstanceOf(CartSetCustomLineItemCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemCustomFieldInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomLineItemCustomField(new CartSetCustomLineItemCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemCustomTypeCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomLineItemCustomType(function($action) { static::assertInstanceOf(CartSetCustomLineItemCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemCustomTypeInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomLineItemCustomType(new CartSetCustomLineItemCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemTaxAmountCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomLineItemTaxAmount(function($action) { static::assertInstanceOf(CartSetCustomLineItemTaxAmountAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomLineItemTaxAmountAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemTaxAmountInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomLineItemTaxAmount(new CartSetCustomLineItemTaxAmountActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomLineItemTaxAmountAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemTaxRateCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomLineItemTaxRate(function($action) { static::assertInstanceOf(CartSetCustomLineItemTaxRateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomLineItemTaxRateAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemTaxRateInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomLineItemTaxRate(new CartSetCustomLineItemTaxRateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomLineItemTaxRateAction::class, $update->getActions()->current());
    }

    public function testSetCustomShippingMethodCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomShippingMethod(function($action) { static::assertInstanceOf(CartSetCustomShippingMethodAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomShippingMethodAction::class, $update->getActions()->current());
    }

    public function testSetCustomShippingMethodInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomShippingMethod(new CartSetCustomShippingMethodActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomShippingMethodAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(CartSetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomType(new CartSetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomerEmailCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomerEmail(function($action) { static::assertInstanceOf(CartSetCustomerEmailAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomerEmailAction::class, $update->getActions()->current());
    }

    public function testSetCustomerEmailInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomerEmail(new CartSetCustomerEmailActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomerEmailAction::class, $update->getActions()->current());
    }

    public function testSetCustomerGroupCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomerGroup(function($action) { static::assertInstanceOf(CartSetCustomerGroupAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomerGroupAction::class, $update->getActions()->current());
    }

    public function testSetCustomerGroupInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomerGroup(new CartSetCustomerGroupActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomerGroupAction::class, $update->getActions()->current());
    }

    public function testSetCustomerIdCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomerId(function($action) { static::assertInstanceOf(CartSetCustomerIdAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomerIdAction::class, $update->getActions()->current());
    }

    public function testSetCustomerIdInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setCustomerId(new CartSetCustomerIdActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetCustomerIdAction::class, $update->getActions()->current());
    }

    public function testSetDeleteDaysAfterLastModificationCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setDeleteDaysAfterLastModification(function($action) { static::assertInstanceOf(CartSetDeleteDaysAfterLastModificationAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetDeleteDaysAfterLastModificationAction::class, $update->getActions()->current());
    }

    public function testSetDeleteDaysAfterLastModificationInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setDeleteDaysAfterLastModification(new CartSetDeleteDaysAfterLastModificationActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetDeleteDaysAfterLastModificationAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomFieldCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setLineItemCustomField(function($action) { static::assertInstanceOf(CartSetLineItemCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomFieldInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setLineItemCustomField(new CartSetLineItemCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomTypeCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setLineItemCustomType(function($action) { static::assertInstanceOf(CartSetLineItemCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomTypeInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setLineItemCustomType(new CartSetLineItemCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetLineItemPriceCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setLineItemPrice(function($action) { static::assertInstanceOf(CartSetLineItemPriceAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetLineItemPriceAction::class, $update->getActions()->current());
    }

    public function testSetLineItemPriceInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setLineItemPrice(new CartSetLineItemPriceActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetLineItemPriceAction::class, $update->getActions()->current());
    }

    public function testSetLineItemTaxAmountCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setLineItemTaxAmount(function($action) { static::assertInstanceOf(CartSetLineItemTaxAmountAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetLineItemTaxAmountAction::class, $update->getActions()->current());
    }

    public function testSetLineItemTaxAmountInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setLineItemTaxAmount(new CartSetLineItemTaxAmountActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetLineItemTaxAmountAction::class, $update->getActions()->current());
    }

    public function testSetLineItemTaxRateCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setLineItemTaxRate(function($action) { static::assertInstanceOf(CartSetLineItemTaxRateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetLineItemTaxRateAction::class, $update->getActions()->current());
    }

    public function testSetLineItemTaxRateInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setLineItemTaxRate(new CartSetLineItemTaxRateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetLineItemTaxRateAction::class, $update->getActions()->current());
    }

    public function testSetLineItemTotalPriceCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setLineItemTotalPrice(function($action) { static::assertInstanceOf(CartSetLineItemTotalPriceAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetLineItemTotalPriceAction::class, $update->getActions()->current());
    }

    public function testSetLineItemTotalPriceInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setLineItemTotalPrice(new CartSetLineItemTotalPriceActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetLineItemTotalPriceAction::class, $update->getActions()->current());
    }

    public function testSetLocaleCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setLocale(function($action) { static::assertInstanceOf(CartSetLocaleAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetLocaleAction::class, $update->getActions()->current());
    }

    public function testSetLocaleInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setLocale(new CartSetLocaleActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetLocaleAction::class, $update->getActions()->current());
    }

    public function testSetShippingAddressCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setShippingAddress(function($action) { static::assertInstanceOf(CartSetShippingAddressAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetShippingAddressAction::class, $update->getActions()->current());
    }

    public function testSetShippingAddressInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setShippingAddress(new CartSetShippingAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetShippingAddressAction::class, $update->getActions()->current());
    }

    public function testSetShippingMethodCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setShippingMethod(function($action) { static::assertInstanceOf(CartSetShippingMethodAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetShippingMethodAction::class, $update->getActions()->current());
    }

    public function testSetShippingMethodInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setShippingMethod(new CartSetShippingMethodActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetShippingMethodAction::class, $update->getActions()->current());
    }

    public function testSetShippingMethodTaxAmountCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setShippingMethodTaxAmount(function($action) { static::assertInstanceOf(CartSetShippingMethodTaxAmountAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetShippingMethodTaxAmountAction::class, $update->getActions()->current());
    }

    public function testSetShippingMethodTaxAmountInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setShippingMethodTaxAmount(new CartSetShippingMethodTaxAmountActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetShippingMethodTaxAmountAction::class, $update->getActions()->current());
    }

    public function testSetShippingMethodTaxRateCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setShippingMethodTaxRate(function($action) { static::assertInstanceOf(CartSetShippingMethodTaxRateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetShippingMethodTaxRateAction::class, $update->getActions()->current());
    }

    public function testSetShippingMethodTaxRateInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setShippingMethodTaxRate(new CartSetShippingMethodTaxRateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetShippingMethodTaxRateAction::class, $update->getActions()->current());
    }

    public function testSetShippingRateInputCallback() {
        $builder = new CartUpdateBuilder();
        $builder->setShippingRateInput(function($action) { static::assertInstanceOf(CartSetShippingRateInputAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetShippingRateInputAction::class, $update->getActions()->current());
    }

    public function testSetShippingRateInputInstance() {
        $builder = new CartUpdateBuilder();
        $builder->setShippingRateInput(new CartSetShippingRateInputActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartSetShippingRateInputAction::class, $update->getActions()->current());
    }


    public function testReset() {
        $builder = new CartUpdateBuilder();
        $builder->addCustomLineItem(new CartAddCustomLineItemActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertInstanceOf(CartAddCustomLineItemAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new CartUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new CartModel());
        static::assertInstanceOf(Cart::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new CartUpdateBuilder();
        $builder->with(new CartModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(CartUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
