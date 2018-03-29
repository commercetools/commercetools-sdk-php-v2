<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Builder\CustomerUpdateBuilder;
use Commercetools\Exception\BuilderInvalidArgumentException;
use Commercetools\Types\Customer\CustomerAddAddressAction;
use Commercetools\Types\Customer\CustomerAddBillingAddressIdAction;
use Commercetools\Types\Customer\CustomerAddShippingAddressIdAction;
use Commercetools\Types\Customer\CustomerChangeAddressAction;
use Commercetools\Types\Customer\CustomerChangeEmailAction;
use Commercetools\Types\Customer\CustomerRemoveAddressAction;
use Commercetools\Types\Customer\CustomerRemoveBillingAddressIdAction;
use Commercetools\Types\Customer\CustomerRemoveShippingAddressIdAction;
use Commercetools\Types\Customer\CustomerSetCompanyNameAction;
use Commercetools\Types\Customer\CustomerSetCustomFieldAction;
use Commercetools\Types\Customer\CustomerSetCustomTypeAction;
use Commercetools\Types\Customer\CustomerSetCustomerGroupAction;
use Commercetools\Types\Customer\CustomerSetCustomerNumberAction;
use Commercetools\Types\Customer\CustomerSetDateOfBirthAction;
use Commercetools\Types\Customer\CustomerSetDefaultBillingAddressAction;
use Commercetools\Types\Customer\CustomerSetDefaultShippingAddressAction;
use Commercetools\Types\Customer\CustomerSetExternalIdAction;
use Commercetools\Types\Customer\CustomerSetFirstNameAction;
use Commercetools\Types\Customer\CustomerSetKeyAction;
use Commercetools\Types\Customer\CustomerSetLastNameAction;
use Commercetools\Types\Customer\CustomerSetLocaleAction;
use Commercetools\Types\Customer\CustomerSetMiddleNameAction;
use Commercetools\Types\Customer\CustomerSetSalutationAction;
use Commercetools\Types\Customer\CustomerSetTitleAction;
use Commercetools\Types\Customer\CustomerSetVatIdAction;
use Commercetools\Types\Customer\Customer;
use Commercetools\Types\Customer\CustomerUpdate;
use Commercetools\Request\ByProjectKeyCustomersByIDPost;

use Commercetools\Types\Customer\CustomerAddAddressActionModel;
use Commercetools\Types\Customer\CustomerAddBillingAddressIdActionModel;
use Commercetools\Types\Customer\CustomerAddShippingAddressIdActionModel;
use Commercetools\Types\Customer\CustomerChangeAddressActionModel;
use Commercetools\Types\Customer\CustomerChangeEmailActionModel;
use Commercetools\Types\Customer\CustomerRemoveAddressActionModel;
use Commercetools\Types\Customer\CustomerRemoveBillingAddressIdActionModel;
use Commercetools\Types\Customer\CustomerRemoveShippingAddressIdActionModel;
use Commercetools\Types\Customer\CustomerSetCompanyNameActionModel;
use Commercetools\Types\Customer\CustomerSetCustomFieldActionModel;
use Commercetools\Types\Customer\CustomerSetCustomTypeActionModel;
use Commercetools\Types\Customer\CustomerSetCustomerGroupActionModel;
use Commercetools\Types\Customer\CustomerSetCustomerNumberActionModel;
use Commercetools\Types\Customer\CustomerSetDateOfBirthActionModel;
use Commercetools\Types\Customer\CustomerSetDefaultBillingAddressActionModel;
use Commercetools\Types\Customer\CustomerSetDefaultShippingAddressActionModel;
use Commercetools\Types\Customer\CustomerSetExternalIdActionModel;
use Commercetools\Types\Customer\CustomerSetFirstNameActionModel;
use Commercetools\Types\Customer\CustomerSetKeyActionModel;
use Commercetools\Types\Customer\CustomerSetLastNameActionModel;
use Commercetools\Types\Customer\CustomerSetLocaleActionModel;
use Commercetools\Types\Customer\CustomerSetMiddleNameActionModel;
use Commercetools\Types\Customer\CustomerSetSalutationActionModel;
use Commercetools\Types\Customer\CustomerSetTitleActionModel;
use Commercetools\Types\Customer\CustomerSetVatIdActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\Customer\CustomerModel;


class CustomerBuilderTest extends TestCase {
    public function testAddAddressCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->addAddress(function($action) { static::assertInstanceOf(CustomerAddAddressAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerAddAddressAction::class, $update->getActions()->current());
    }

    public function testAddAddressInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->addAddress(function($action) { static::assertInstanceOf(CustomerAddAddressAction::class, $action); return []; });
    }

    public function testAddAddressInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->addAddress(new CustomerAddAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerAddAddressAction::class, $update->getActions()->current());
    }

    public function testAddAddressInvalidInstance() {
//        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->addAddress([]);
    }

    public function testAddBillingAddressIdCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->addBillingAddressId(function($action) { static::assertInstanceOf(CustomerAddBillingAddressIdAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerAddBillingAddressIdAction::class, $update->getActions()->current());
    }

    public function testAddBillingAddressIdInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->addBillingAddressId(function($action) { static::assertInstanceOf(CustomerAddBillingAddressIdAction::class, $action); return []; });
    }

    public function testAddBillingAddressIdInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->addBillingAddressId(new CustomerAddBillingAddressIdActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerAddBillingAddressIdAction::class, $update->getActions()->current());
    }

    public function testAddBillingAddressIdInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->addBillingAddressId([]);
    }

    public function testAddShippingAddressIdCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->addShippingAddressId(function($action) { static::assertInstanceOf(CustomerAddShippingAddressIdAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerAddShippingAddressIdAction::class, $update->getActions()->current());
    }

    public function testAddShippingAddressIdInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->addShippingAddressId(function($action) { static::assertInstanceOf(CustomerAddShippingAddressIdAction::class, $action); return []; });
    }

    public function testAddShippingAddressIdInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->addShippingAddressId(new CustomerAddShippingAddressIdActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerAddShippingAddressIdAction::class, $update->getActions()->current());
    }

    public function testAddShippingAddressIdInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->addShippingAddressId([]);
    }

    public function testChangeAddressCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->changeAddress(function($action) { static::assertInstanceOf(CustomerChangeAddressAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerChangeAddressAction::class, $update->getActions()->current());
    }

    public function testChangeAddressInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->changeAddress(function($action) { static::assertInstanceOf(CustomerChangeAddressAction::class, $action); return []; });
    }

    public function testChangeAddressInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->changeAddress(new CustomerChangeAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerChangeAddressAction::class, $update->getActions()->current());
    }

    public function testChangeAddressInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->changeAddress([]);
    }

    public function testChangeEmailCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->changeEmail(function($action) { static::assertInstanceOf(CustomerChangeEmailAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerChangeEmailAction::class, $update->getActions()->current());
    }

    public function testChangeEmailInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->changeEmail(function($action) { static::assertInstanceOf(CustomerChangeEmailAction::class, $action); return []; });
    }

    public function testChangeEmailInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->changeEmail(new CustomerChangeEmailActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerChangeEmailAction::class, $update->getActions()->current());
    }

    public function testChangeEmailInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->changeEmail([]);
    }

    public function testRemoveAddressCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->removeAddress(function($action) { static::assertInstanceOf(CustomerRemoveAddressAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerRemoveAddressAction::class, $update->getActions()->current());
    }

    public function testRemoveAddressInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->removeAddress(function($action) { static::assertInstanceOf(CustomerRemoveAddressAction::class, $action); return []; });
    }

    public function testRemoveAddressInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->removeAddress(new CustomerRemoveAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerRemoveAddressAction::class, $update->getActions()->current());
    }

    public function testRemoveAddressInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->removeAddress([]);
    }

    public function testRemoveBillingAddressIdCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->removeBillingAddressId(function($action) { static::assertInstanceOf(CustomerRemoveBillingAddressIdAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerRemoveBillingAddressIdAction::class, $update->getActions()->current());
    }

    public function testRemoveBillingAddressIdInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->removeBillingAddressId(function($action) { static::assertInstanceOf(CustomerRemoveBillingAddressIdAction::class, $action); return []; });
    }

    public function testRemoveBillingAddressIdInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->removeBillingAddressId(new CustomerRemoveBillingAddressIdActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerRemoveBillingAddressIdAction::class, $update->getActions()->current());
    }

    public function testRemoveBillingAddressIdInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->removeBillingAddressId([]);
    }

    public function testRemoveShippingAddressIdCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->removeShippingAddressId(function($action) { static::assertInstanceOf(CustomerRemoveShippingAddressIdAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerRemoveShippingAddressIdAction::class, $update->getActions()->current());
    }

    public function testRemoveShippingAddressIdInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->removeShippingAddressId(function($action) { static::assertInstanceOf(CustomerRemoveShippingAddressIdAction::class, $action); return []; });
    }

    public function testRemoveShippingAddressIdInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->removeShippingAddressId(new CustomerRemoveShippingAddressIdActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerRemoveShippingAddressIdAction::class, $update->getActions()->current());
    }

    public function testRemoveShippingAddressIdInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->removeShippingAddressId([]);
    }

    public function testSetCompanyNameCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setCompanyName(function($action) { static::assertInstanceOf(CustomerSetCompanyNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetCompanyNameAction::class, $update->getActions()->current());
    }

    public function testSetCompanyNameInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setCompanyName(function($action) { static::assertInstanceOf(CustomerSetCompanyNameAction::class, $action); return []; });
    }

    public function testSetCompanyNameInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setCompanyName(new CustomerSetCompanyNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetCompanyNameAction::class, $update->getActions()->current());
    }

    public function testSetCompanyNameInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setCompanyName([]);
    }

    public function testSetCustomFieldCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(CustomerSetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(CustomerSetCustomFieldAction::class, $action); return []; });
    }

    public function testSetCustomFieldInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomField(new CustomerSetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomField([]);
    }

    public function testSetCustomTypeCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(CustomerSetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(CustomerSetCustomTypeAction::class, $action); return []; });
    }

    public function testSetCustomTypeInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomType(new CustomerSetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomType([]);
    }

    public function testSetCustomerGroupCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomerGroup(function($action) { static::assertInstanceOf(CustomerSetCustomerGroupAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetCustomerGroupAction::class, $update->getActions()->current());
    }

    public function testSetCustomerGroupInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomerGroup(function($action) { static::assertInstanceOf(CustomerSetCustomerGroupAction::class, $action); return []; });
    }

    public function testSetCustomerGroupInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomerGroup(new CustomerSetCustomerGroupActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetCustomerGroupAction::class, $update->getActions()->current());
    }

    public function testSetCustomerGroupInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomerGroup([]);
    }

    public function testSetCustomerNumberCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomerNumber(function($action) { static::assertInstanceOf(CustomerSetCustomerNumberAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetCustomerNumberAction::class, $update->getActions()->current());
    }

    public function testSetCustomerNumberInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomerNumber(function($action) { static::assertInstanceOf(CustomerSetCustomerNumberAction::class, $action); return []; });
    }

    public function testSetCustomerNumberInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomerNumber(new CustomerSetCustomerNumberActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetCustomerNumberAction::class, $update->getActions()->current());
    }

    public function testSetCustomerNumberInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setCustomerNumber([]);
    }

    public function testSetDateOfBirthCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setDateOfBirth(function($action) { static::assertInstanceOf(CustomerSetDateOfBirthAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetDateOfBirthAction::class, $update->getActions()->current());
    }

    public function testSetDateOfBirthInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setDateOfBirth(function($action) { static::assertInstanceOf(CustomerSetDateOfBirthAction::class, $action); return []; });
    }

    public function testSetDateOfBirthInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setDateOfBirth(new CustomerSetDateOfBirthActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetDateOfBirthAction::class, $update->getActions()->current());
    }

    public function testSetDateOfBirthInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setDateOfBirth([]);
    }

    public function testSetDefaultBillingAddressCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setDefaultBillingAddress(function($action) { static::assertInstanceOf(CustomerSetDefaultBillingAddressAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetDefaultBillingAddressAction::class, $update->getActions()->current());
    }

    public function testSetDefaultBillingAddressInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setDefaultBillingAddress(function($action) { static::assertInstanceOf(CustomerSetDefaultBillingAddressAction::class, $action); return []; });
    }

    public function testSetDefaultBillingAddressInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setDefaultBillingAddress(new CustomerSetDefaultBillingAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetDefaultBillingAddressAction::class, $update->getActions()->current());
    }

    public function testSetDefaultBillingAddressInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setDefaultBillingAddress([]);
    }

    public function testSetDefaultShippingAddressCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setDefaultShippingAddress(function($action) { static::assertInstanceOf(CustomerSetDefaultShippingAddressAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetDefaultShippingAddressAction::class, $update->getActions()->current());
    }

    public function testSetDefaultShippingAddressInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setDefaultShippingAddress(function($action) { static::assertInstanceOf(CustomerSetDefaultShippingAddressAction::class, $action); return []; });
    }

    public function testSetDefaultShippingAddressInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setDefaultShippingAddress(new CustomerSetDefaultShippingAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetDefaultShippingAddressAction::class, $update->getActions()->current());
    }

    public function testSetDefaultShippingAddressInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setDefaultShippingAddress([]);
    }

    public function testSetExternalIdCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setExternalId(function($action) { static::assertInstanceOf(CustomerSetExternalIdAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetExternalIdAction::class, $update->getActions()->current());
    }

    public function testSetExternalIdInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setExternalId(function($action) { static::assertInstanceOf(CustomerSetExternalIdAction::class, $action); return []; });
    }

    public function testSetExternalIdInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setExternalId(new CustomerSetExternalIdActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetExternalIdAction::class, $update->getActions()->current());
    }

    public function testSetExternalIdInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setExternalId([]);
    }

    public function testSetFirstNameCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setFirstName(function($action) { static::assertInstanceOf(CustomerSetFirstNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetFirstNameAction::class, $update->getActions()->current());
    }

    public function testSetFirstNameInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setFirstName(function($action) { static::assertInstanceOf(CustomerSetFirstNameAction::class, $action); return []; });
    }

    public function testSetFirstNameInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setFirstName(new CustomerSetFirstNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetFirstNameAction::class, $update->getActions()->current());
    }

    public function testSetFirstNameInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setFirstName([]);
    }

    public function testSetKeyCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(CustomerSetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(CustomerSetKeyAction::class, $action); return []; });
    }

    public function testSetKeyInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setKey(new CustomerSetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setKey([]);
    }

    public function testSetLastNameCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setLastName(function($action) { static::assertInstanceOf(CustomerSetLastNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetLastNameAction::class, $update->getActions()->current());
    }

    public function testSetLastNameInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setLastName(function($action) { static::assertInstanceOf(CustomerSetLastNameAction::class, $action); return []; });
    }

    public function testSetLastNameInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setLastName(new CustomerSetLastNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetLastNameAction::class, $update->getActions()->current());
    }

    public function testSetLastNameInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setLastName([]);
    }

    public function testSetLocaleCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setLocale(function($action) { static::assertInstanceOf(CustomerSetLocaleAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetLocaleAction::class, $update->getActions()->current());
    }

    public function testSetLocaleInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setLocale(function($action) { static::assertInstanceOf(CustomerSetLocaleAction::class, $action); return []; });
    }

    public function testSetLocaleInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setLocale(new CustomerSetLocaleActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetLocaleAction::class, $update->getActions()->current());
    }

    public function testSetLocaleInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setLocale([]);
    }

    public function testSetMiddleNameCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setMiddleName(function($action) { static::assertInstanceOf(CustomerSetMiddleNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetMiddleNameAction::class, $update->getActions()->current());
    }

    public function testSetMiddleNameInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setMiddleName(function($action) { static::assertInstanceOf(CustomerSetMiddleNameAction::class, $action); return []; });
    }

    public function testSetMiddleNameInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setMiddleName(new CustomerSetMiddleNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetMiddleNameAction::class, $update->getActions()->current());
    }

    public function testSetMiddleNameInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setMiddleName([]);
    }

    public function testSetSalutationCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setSalutation(function($action) { static::assertInstanceOf(CustomerSetSalutationAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetSalutationAction::class, $update->getActions()->current());
    }

    public function testSetSalutationInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setSalutation(function($action) { static::assertInstanceOf(CustomerSetSalutationAction::class, $action); return []; });
    }

    public function testSetSalutationInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setSalutation(new CustomerSetSalutationActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetSalutationAction::class, $update->getActions()->current());
    }

    public function testSetSalutationInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setSalutation([]);
    }

    public function testSetTitleCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setTitle(function($action) { static::assertInstanceOf(CustomerSetTitleAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetTitleAction::class, $update->getActions()->current());
    }

    public function testSetTitleInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setTitle(function($action) { static::assertInstanceOf(CustomerSetTitleAction::class, $action); return []; });
    }

    public function testSetTitleInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setTitle(new CustomerSetTitleActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetTitleAction::class, $update->getActions()->current());
    }

    public function testSetTitleInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setTitle([]);
    }

    public function testSetVatIdCallback() {
        $builder = new CustomerUpdateBuilder();
        $builder->setVatId(function($action) { static::assertInstanceOf(CustomerSetVatIdAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetVatIdAction::class, $update->getActions()->current());
    }

    public function testSetVatIdInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setVatId(function($action) { static::assertInstanceOf(CustomerSetVatIdAction::class, $action); return []; });
    }

    public function testSetVatIdInstance() {
        $builder = new CustomerUpdateBuilder();
        $builder->setVatId(new CustomerSetVatIdActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerSetVatIdAction::class, $update->getActions()->current());
    }

    public function testSetVatIdInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CustomerUpdateBuilder();
        $builder->setVatId([]);
    }


    public function testReset() {
        $builder = new CustomerUpdateBuilder();
        $builder->addAddress(new CustomerAddAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertInstanceOf(CustomerAddAddressAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new CustomerUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new CustomerModel());
        static::assertInstanceOf(Customer::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new CustomerUpdateBuilder();
        $builder->with(new CustomerModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(CustomerUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
