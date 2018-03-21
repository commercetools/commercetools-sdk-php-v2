<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface CustomerUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'removeAddress' => Types\Customer\CustomerRemoveAddressAction::class,
        'setSalutation' => Types\Customer\CustomerSetSalutationAction::class,
        'changeEmail' => Types\Customer\CustomerChangeEmailAction::class,
        'addShippingAddressId' => Types\Customer\CustomerAddShippingAddressIdAction::class,
        'setFirstName' => Types\Customer\CustomerSetFirstNameAction::class,
        'setDefaultShippingAddress' => Types\Customer\CustomerSetDefaultShippingAddressAction::class,
        'setVatId' => Types\Customer\CustomerSetVatIdAction::class,
        'removeBillingAddressId' => Types\Customer\CustomerRemoveBillingAddressIdAction::class,
        'setTitle' => Types\Customer\CustomerSetTitleAction::class,
        'addBillingAddressId' => Types\Customer\CustomerAddBillingAddressIdAction::class,
        'removeShippingAddressId' => Types\Customer\CustomerRemoveShippingAddressIdAction::class,
        'setCustomerGroup' => Types\Customer\CustomerSetCustomerGroupAction::class,
        'setCustomType' => Types\Customer\CustomerSetCustomTypeAction::class,
        'setCustomerNumber' => Types\Customer\CustomerSetCustomerNumberAction::class,
        'setDefaultBillingAddress' => Types\Customer\CustomerSetDefaultBillingAddressAction::class,
        'setLastName' => Types\Customer\CustomerSetLastNameAction::class,
        'setExternalId' => Types\Customer\CustomerSetExternalIdAction::class,
        'setLocale' => Types\Customer\CustomerSetLocaleAction::class,
        'addAddress' => Types\Customer\CustomerAddAddressAction::class,
        'setCustomField' => Types\Customer\CustomerSetCustomFieldAction::class,
        'changeAddress' => Types\Customer\CustomerChangeAddressAction::class,
        'setKey' => Types\Customer\CustomerSetKeyAction::class,
        'setMiddleName' => Types\Customer\CustomerSetMiddleNameAction::class,
        'setDateOfBirth' => Types\Customer\CustomerSetDateOfBirthAction::class,
        'setCompanyName' => Types\Customer\CustomerSetCompanyNameAction::class,

    ];

}
