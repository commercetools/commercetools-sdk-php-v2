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
        'setLastName' => Types\Customer\CustomerSetLastNameAction::class,
        'addBillingAddressId' => Types\Customer\CustomerAddBillingAddressIdAction::class,
        'changeAddress' => Types\Customer\CustomerChangeAddressAction::class,
        'setVatId' => Types\Customer\CustomerSetVatIdAction::class,
        'changeEmail' => Types\Customer\CustomerChangeEmailAction::class,
        'setDefaultBillingAddress' => Types\Customer\CustomerSetDefaultBillingAddressAction::class,
        'setCustomerNumber' => Types\Customer\CustomerSetCustomerNumberAction::class,
        'setMiddleName' => Types\Customer\CustomerSetMiddleNameAction::class,
        'setLocale' => Types\Customer\CustomerSetLocaleAction::class,
        'setTitle' => Types\Customer\CustomerSetTitleAction::class,
        'addShippingAddressId' => Types\Customer\CustomerAddShippingAddressIdAction::class,
        'setCompanyName' => Types\Customer\CustomerSetCompanyNameAction::class,
        'removeAddress' => Types\Customer\CustomerRemoveAddressAction::class,
        'setCustomField' => Types\Customer\CustomerSetCustomFieldAction::class,
        'setCustomerGroup' => Types\Customer\CustomerSetCustomerGroupAction::class,
        'setExternalId' => Types\Customer\CustomerSetExternalIdAction::class,
        'setDateOfBirth' => Types\Customer\CustomerSetDateOfBirthAction::class,
        'setFirstName' => Types\Customer\CustomerSetFirstNameAction::class,
        'removeShippingAddressId' => Types\Customer\CustomerRemoveShippingAddressIdAction::class,
        'addAddress' => Types\Customer\CustomerAddAddressAction::class,
        'setSalutation' => Types\Customer\CustomerSetSalutationAction::class,
        'setDefaultShippingAddress' => Types\Customer\CustomerSetDefaultShippingAddressAction::class,
        'setKey' => Types\Customer\CustomerSetKeyAction::class,
        'setCustomType' => Types\Customer\CustomerSetCustomTypeAction::class,
        'removeBillingAddressId' => Types\Customer\CustomerRemoveBillingAddressIdAction::class,

    ];

}
