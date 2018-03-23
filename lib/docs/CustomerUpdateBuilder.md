# CustomerUpdateBuilder

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
```

## addAddress

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->addAddress(new CustomerAddAddressAction())->build()
//or
$customerUpdate = $builder->addAddress(
    function (CustomerAddAddressAction $action): CustomerAddAddressAction {
        // modify action as needed
        return $action;
    })->build();
```
## addBillingAddressId

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->addBillingAddressId(new CustomerAddBillingAddressIdAction())->build()
//or
$customerUpdate = $builder->addBillingAddressId(
    function (CustomerAddBillingAddressIdAction $action): CustomerAddBillingAddressIdAction {
        // modify action as needed
        return $action;
    })->build();
```
## addShippingAddressId

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->addShippingAddressId(new CustomerAddShippingAddressIdAction())->build()
//or
$customerUpdate = $builder->addShippingAddressId(
    function (CustomerAddShippingAddressIdAction $action): CustomerAddShippingAddressIdAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeAddress

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->changeAddress(new CustomerChangeAddressAction())->build()
//or
$customerUpdate = $builder->changeAddress(
    function (CustomerChangeAddressAction $action): CustomerChangeAddressAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeEmail

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->changeEmail(new CustomerChangeEmailAction())->build()
//or
$customerUpdate = $builder->changeEmail(
    function (CustomerChangeEmailAction $action): CustomerChangeEmailAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeAddress

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->removeAddress(new CustomerRemoveAddressAction())->build()
//or
$customerUpdate = $builder->removeAddress(
    function (CustomerRemoveAddressAction $action): CustomerRemoveAddressAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeBillingAddressId

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->removeBillingAddressId(new CustomerRemoveBillingAddressIdAction())->build()
//or
$customerUpdate = $builder->removeBillingAddressId(
    function (CustomerRemoveBillingAddressIdAction $action): CustomerRemoveBillingAddressIdAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeShippingAddressId

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->removeShippingAddressId(new CustomerRemoveShippingAddressIdAction())->build()
//or
$customerUpdate = $builder->removeShippingAddressId(
    function (CustomerRemoveShippingAddressIdAction $action): CustomerRemoveShippingAddressIdAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCompanyName

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setCompanyName(new CustomerSetCompanyNameAction())->build()
//or
$customerUpdate = $builder->setCompanyName(
    function (CustomerSetCompanyNameAction $action): CustomerSetCompanyNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomField

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setCustomField(new CustomerSetCustomFieldAction())->build()
//or
$customerUpdate = $builder->setCustomField(
    function (CustomerSetCustomFieldAction $action): CustomerSetCustomFieldAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomType

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setCustomType(new CustomerSetCustomTypeAction())->build()
//or
$customerUpdate = $builder->setCustomType(
    function (CustomerSetCustomTypeAction $action): CustomerSetCustomTypeAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomerGroup

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setCustomerGroup(new CustomerSetCustomerGroupAction())->build()
//or
$customerUpdate = $builder->setCustomerGroup(
    function (CustomerSetCustomerGroupAction $action): CustomerSetCustomerGroupAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomerNumber

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setCustomerNumber(new CustomerSetCustomerNumberAction())->build()
//or
$customerUpdate = $builder->setCustomerNumber(
    function (CustomerSetCustomerNumberAction $action): CustomerSetCustomerNumberAction {
        // modify action as needed
        return $action;
    })->build();
```
## setDateOfBirth

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setDateOfBirth(new CustomerSetDateOfBirthAction())->build()
//or
$customerUpdate = $builder->setDateOfBirth(
    function (CustomerSetDateOfBirthAction $action): CustomerSetDateOfBirthAction {
        // modify action as needed
        return $action;
    })->build();
```
## setDefaultBillingAddress

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setDefaultBillingAddress(new CustomerSetDefaultBillingAddressAction())->build()
//or
$customerUpdate = $builder->setDefaultBillingAddress(
    function (CustomerSetDefaultBillingAddressAction $action): CustomerSetDefaultBillingAddressAction {
        // modify action as needed
        return $action;
    })->build();
```
## setDefaultShippingAddress

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setDefaultShippingAddress(new CustomerSetDefaultShippingAddressAction())->build()
//or
$customerUpdate = $builder->setDefaultShippingAddress(
    function (CustomerSetDefaultShippingAddressAction $action): CustomerSetDefaultShippingAddressAction {
        // modify action as needed
        return $action;
    })->build();
```
## setExternalId

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setExternalId(new CustomerSetExternalIdAction())->build()
//or
$customerUpdate = $builder->setExternalId(
    function (CustomerSetExternalIdAction $action): CustomerSetExternalIdAction {
        // modify action as needed
        return $action;
    })->build();
```
## setFirstName

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setFirstName(new CustomerSetFirstNameAction())->build()
//or
$customerUpdate = $builder->setFirstName(
    function (CustomerSetFirstNameAction $action): CustomerSetFirstNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## setKey

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setKey(new CustomerSetKeyAction())->build()
//or
$customerUpdate = $builder->setKey(
    function (CustomerSetKeyAction $action): CustomerSetKeyAction {
        // modify action as needed
        return $action;
    })->build();
```
## setLastName

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setLastName(new CustomerSetLastNameAction())->build()
//or
$customerUpdate = $builder->setLastName(
    function (CustomerSetLastNameAction $action): CustomerSetLastNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## setLocale

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setLocale(new CustomerSetLocaleAction())->build()
//or
$customerUpdate = $builder->setLocale(
    function (CustomerSetLocaleAction $action): CustomerSetLocaleAction {
        // modify action as needed
        return $action;
    })->build();
```
## setMiddleName

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setMiddleName(new CustomerSetMiddleNameAction())->build()
//or
$customerUpdate = $builder->setMiddleName(
    function (CustomerSetMiddleNameAction $action): CustomerSetMiddleNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## setSalutation

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setSalutation(new CustomerSetSalutationAction())->build()
//or
$customerUpdate = $builder->setSalutation(
    function (CustomerSetSalutationAction $action): CustomerSetSalutationAction {
        // modify action as needed
        return $action;
    })->build();
```
## setTitle

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setTitle(new CustomerSetTitleAction())->build()
//or
$customerUpdate = $builder->setTitle(
    function (CustomerSetTitleAction $action): CustomerSetTitleAction {
        // modify action as needed
        return $action;
    })->build();
```
## setVatId

```php
use Commercetools\Builder\CustomerUpdateBuilder;

$builder = new CustomerUpdateBuilder();
$customerUpdate = $builder->setVatId(new CustomerSetVatIdAction())->build()
//or
$customerUpdate = $builder->setVatId(
    function (CustomerSetVatIdAction $action): CustomerSetVatIdAction {
        // modify action as needed
        return $action;
    })->build();
```
