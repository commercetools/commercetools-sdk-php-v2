# CartUpdateBuilder

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
```

## addCustomLineItem

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->addCustomLineItem(new CartAddCustomLineItemAction())->build()
//or
$cartUpdate = $builder->addCustomLineItem(
    function (CartAddCustomLineItemAction $action): CartAddCustomLineItemAction {
        // modify action as needed
        return $action;
    })->build();
```
## addDiscountCode

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->addDiscountCode(new CartAddDiscountCodeAction())->build()
//or
$cartUpdate = $builder->addDiscountCode(
    function (CartAddDiscountCodeAction $action): CartAddDiscountCodeAction {
        // modify action as needed
        return $action;
    })->build();
```
## addLineItem

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->addLineItem(new CartAddLineItemAction())->build()
//or
$cartUpdate = $builder->addLineItem(
    function (CartAddLineItemAction $action): CartAddLineItemAction {
        // modify action as needed
        return $action;
    })->build();
```
## addPayment

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->addPayment(new CartAddPaymentAction())->build()
//or
$cartUpdate = $builder->addPayment(
    function (CartAddPaymentAction $action): CartAddPaymentAction {
        // modify action as needed
        return $action;
    })->build();
```
## addShoppingList

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->addShoppingList(new CartAddShoppingListAction())->build()
//or
$cartUpdate = $builder->addShoppingList(
    function (CartAddShoppingListAction $action): CartAddShoppingListAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeCustomLineItemMoney

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->changeCustomLineItemMoney(new CartChangeCustomLineItemMoneyAction())->build()
//or
$cartUpdate = $builder->changeCustomLineItemMoney(
    function (CartChangeCustomLineItemMoneyAction $action): CartChangeCustomLineItemMoneyAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeCustomLineItemQuantity

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->changeCustomLineItemQuantity(new CartChangeCustomLineItemQuantityAction())->build()
//or
$cartUpdate = $builder->changeCustomLineItemQuantity(
    function (CartChangeCustomLineItemQuantityAction $action): CartChangeCustomLineItemQuantityAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeLineItemQuantity

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->changeLineItemQuantity(new CartChangeLineItemQuantityAction())->build()
//or
$cartUpdate = $builder->changeLineItemQuantity(
    function (CartChangeLineItemQuantityAction $action): CartChangeLineItemQuantityAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeTaxCalculationMode

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->changeTaxCalculationMode(new CartChangeTaxCalculationModeAction())->build()
//or
$cartUpdate = $builder->changeTaxCalculationMode(
    function (CartChangeTaxCalculationModeAction $action): CartChangeTaxCalculationModeAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeTaxMode

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->changeTaxMode(new CartChangeTaxModeAction())->build()
//or
$cartUpdate = $builder->changeTaxMode(
    function (CartChangeTaxModeAction $action): CartChangeTaxModeAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeTaxRoundingMode

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->changeTaxRoundingMode(new CartChangeTaxRoundingModeAction())->build()
//or
$cartUpdate = $builder->changeTaxRoundingMode(
    function (CartChangeTaxRoundingModeAction $action): CartChangeTaxRoundingModeAction {
        // modify action as needed
        return $action;
    })->build();
```
## recalculate

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->recalculate(new CartRecalculateAction())->build()
//or
$cartUpdate = $builder->recalculate(
    function (CartRecalculateAction $action): CartRecalculateAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeCustomLineItem

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->removeCustomLineItem(new CartRemoveCustomLineItemAction())->build()
//or
$cartUpdate = $builder->removeCustomLineItem(
    function (CartRemoveCustomLineItemAction $action): CartRemoveCustomLineItemAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeDiscountCode

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->removeDiscountCode(new CartRemoveDiscountCodeAction())->build()
//or
$cartUpdate = $builder->removeDiscountCode(
    function (CartRemoveDiscountCodeAction $action): CartRemoveDiscountCodeAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeLineItem

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->removeLineItem(new CartRemoveLineItemAction())->build()
//or
$cartUpdate = $builder->removeLineItem(
    function (CartRemoveLineItemAction $action): CartRemoveLineItemAction {
        // modify action as needed
        return $action;
    })->build();
```
## removePayment

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->removePayment(new CartRemovePaymentAction())->build()
//or
$cartUpdate = $builder->removePayment(
    function (CartRemovePaymentAction $action): CartRemovePaymentAction {
        // modify action as needed
        return $action;
    })->build();
```
## setAnonymousId

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setAnonymousId(new CartSetAnonymousIdAction())->build()
//or
$cartUpdate = $builder->setAnonymousId(
    function (CartSetAnonymousIdAction $action): CartSetAnonymousIdAction {
        // modify action as needed
        return $action;
    })->build();
```
## setBillingAddress

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setBillingAddress(new CartSetBillingAddressAction())->build()
//or
$cartUpdate = $builder->setBillingAddress(
    function (CartSetBillingAddressAction $action): CartSetBillingAddressAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCartTotalTax

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setCartTotalTax(new CartSetCartTotalTaxAction())->build()
//or
$cartUpdate = $builder->setCartTotalTax(
    function (CartSetCartTotalTaxAction $action): CartSetCartTotalTaxAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCountry

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setCountry(new CartSetCountryAction())->build()
//or
$cartUpdate = $builder->setCountry(
    function (CartSetCountryAction $action): CartSetCountryAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomField

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setCustomField(new CartSetCustomFieldAction())->build()
//or
$cartUpdate = $builder->setCustomField(
    function (CartSetCustomFieldAction $action): CartSetCustomFieldAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomLineItemCustomField

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setCustomLineItemCustomField(new CartSetCustomLineItemCustomFieldAction())->build()
//or
$cartUpdate = $builder->setCustomLineItemCustomField(
    function (CartSetCustomLineItemCustomFieldAction $action): CartSetCustomLineItemCustomFieldAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomLineItemCustomType

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setCustomLineItemCustomType(new CartSetCustomLineItemCustomTypeAction())->build()
//or
$cartUpdate = $builder->setCustomLineItemCustomType(
    function (CartSetCustomLineItemCustomTypeAction $action): CartSetCustomLineItemCustomTypeAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomLineItemTaxAmount

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setCustomLineItemTaxAmount(new CartSetCustomLineItemTaxAmountAction())->build()
//or
$cartUpdate = $builder->setCustomLineItemTaxAmount(
    function (CartSetCustomLineItemTaxAmountAction $action): CartSetCustomLineItemTaxAmountAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomLineItemTaxRate

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setCustomLineItemTaxRate(new CartSetCustomLineItemTaxRateAction())->build()
//or
$cartUpdate = $builder->setCustomLineItemTaxRate(
    function (CartSetCustomLineItemTaxRateAction $action): CartSetCustomLineItemTaxRateAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomShippingMethod

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setCustomShippingMethod(new CartSetCustomShippingMethodAction())->build()
//or
$cartUpdate = $builder->setCustomShippingMethod(
    function (CartSetCustomShippingMethodAction $action): CartSetCustomShippingMethodAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomType

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setCustomType(new CartSetCustomTypeAction())->build()
//or
$cartUpdate = $builder->setCustomType(
    function (CartSetCustomTypeAction $action): CartSetCustomTypeAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomerEmail

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setCustomerEmail(new CartSetCustomerEmailAction())->build()
//or
$cartUpdate = $builder->setCustomerEmail(
    function (CartSetCustomerEmailAction $action): CartSetCustomerEmailAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomerGroup

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setCustomerGroup(new CartSetCustomerGroupAction())->build()
//or
$cartUpdate = $builder->setCustomerGroup(
    function (CartSetCustomerGroupAction $action): CartSetCustomerGroupAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomerId

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setCustomerId(new CartSetCustomerIdAction())->build()
//or
$cartUpdate = $builder->setCustomerId(
    function (CartSetCustomerIdAction $action): CartSetCustomerIdAction {
        // modify action as needed
        return $action;
    })->build();
```
## setDeleteDaysAfterLastModification

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setDeleteDaysAfterLastModification(new CartSetDeleteDaysAfterLastModificationAction())->build()
//or
$cartUpdate = $builder->setDeleteDaysAfterLastModification(
    function (CartSetDeleteDaysAfterLastModificationAction $action): CartSetDeleteDaysAfterLastModificationAction {
        // modify action as needed
        return $action;
    })->build();
```
## setLineItemCustomField

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setLineItemCustomField(new CartSetLineItemCustomFieldAction())->build()
//or
$cartUpdate = $builder->setLineItemCustomField(
    function (CartSetLineItemCustomFieldAction $action): CartSetLineItemCustomFieldAction {
        // modify action as needed
        return $action;
    })->build();
```
## setLineItemCustomType

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setLineItemCustomType(new CartSetLineItemCustomTypeAction())->build()
//or
$cartUpdate = $builder->setLineItemCustomType(
    function (CartSetLineItemCustomTypeAction $action): CartSetLineItemCustomTypeAction {
        // modify action as needed
        return $action;
    })->build();
```
## setLineItemPrice

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setLineItemPrice(new CartSetLineItemPriceAction())->build()
//or
$cartUpdate = $builder->setLineItemPrice(
    function (CartSetLineItemPriceAction $action): CartSetLineItemPriceAction {
        // modify action as needed
        return $action;
    })->build();
```
## setLineItemTaxAmount

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setLineItemTaxAmount(new CartSetLineItemTaxAmountAction())->build()
//or
$cartUpdate = $builder->setLineItemTaxAmount(
    function (CartSetLineItemTaxAmountAction $action): CartSetLineItemTaxAmountAction {
        // modify action as needed
        return $action;
    })->build();
```
## setLineItemTaxRate

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setLineItemTaxRate(new CartSetLineItemTaxRateAction())->build()
//or
$cartUpdate = $builder->setLineItemTaxRate(
    function (CartSetLineItemTaxRateAction $action): CartSetLineItemTaxRateAction {
        // modify action as needed
        return $action;
    })->build();
```
## setLineItemTotalPrice

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setLineItemTotalPrice(new CartSetLineItemTotalPriceAction())->build()
//or
$cartUpdate = $builder->setLineItemTotalPrice(
    function (CartSetLineItemTotalPriceAction $action): CartSetLineItemTotalPriceAction {
        // modify action as needed
        return $action;
    })->build();
```
## setLocale

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setLocale(new CartSetLocaleAction())->build()
//or
$cartUpdate = $builder->setLocale(
    function (CartSetLocaleAction $action): CartSetLocaleAction {
        // modify action as needed
        return $action;
    })->build();
```
## setShippingAddress

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setShippingAddress(new CartSetShippingAddressAction())->build()
//or
$cartUpdate = $builder->setShippingAddress(
    function (CartSetShippingAddressAction $action): CartSetShippingAddressAction {
        // modify action as needed
        return $action;
    })->build();
```
## setShippingMethod

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setShippingMethod(new CartSetShippingMethodAction())->build()
//or
$cartUpdate = $builder->setShippingMethod(
    function (CartSetShippingMethodAction $action): CartSetShippingMethodAction {
        // modify action as needed
        return $action;
    })->build();
```
## setShippingMethodTaxAmount

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setShippingMethodTaxAmount(new CartSetShippingMethodTaxAmountAction())->build()
//or
$cartUpdate = $builder->setShippingMethodTaxAmount(
    function (CartSetShippingMethodTaxAmountAction $action): CartSetShippingMethodTaxAmountAction {
        // modify action as needed
        return $action;
    })->build();
```
## setShippingMethodTaxRate

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setShippingMethodTaxRate(new CartSetShippingMethodTaxRateAction())->build()
//or
$cartUpdate = $builder->setShippingMethodTaxRate(
    function (CartSetShippingMethodTaxRateAction $action): CartSetShippingMethodTaxRateAction {
        // modify action as needed
        return $action;
    })->build();
```
## setShippingRateInput

```php
use Commercetools\Builder\CartUpdateBuilder;

$builder = new CartUpdateBuilder();
$cartUpdate = $builder->setShippingRateInput(new CartSetShippingRateInputAction())->build()
//or
$cartUpdate = $builder->setShippingRateInput(
    function (CartSetShippingRateInputAction $action): CartSetShippingRateInputAction {
        // modify action as needed
        return $action;
    })->build();
```
