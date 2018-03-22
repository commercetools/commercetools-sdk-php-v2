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
        'setMiddleName' => Types\Customer\CustomerSetMiddleNameAction::class,
        'changeAddress' => Types\Customer\CustomerChangeAddressAction::class,
        'addBillingAddressId' => Types\Customer\CustomerAddBillingAddressIdAction::class,
        'setExternalId' => Types\Customer\CustomerSetExternalIdAction::class,
        'setDefaultBillingAddress' => Types\Customer\CustomerSetDefaultBillingAddressAction::class,
        'setTitle' => Types\Customer\CustomerSetTitleAction::class,
        'removeAddress' => Types\Customer\CustomerRemoveAddressAction::class,
        'setSalutation' => Types\Customer\CustomerSetSalutationAction::class,
        'addAddress' => Types\Customer\CustomerAddAddressAction::class,
        'removeBillingAddressId' => Types\Customer\CustomerRemoveBillingAddressIdAction::class,
        'changeEmail' => Types\Customer\CustomerChangeEmailAction::class,
        'setCustomType' => Types\Customer\CustomerSetCustomTypeAction::class,
        'removeShippingAddressId' => Types\Customer\CustomerRemoveShippingAddressIdAction::class,
        'setCustomField' => Types\Customer\CustomerSetCustomFieldAction::class,
        'setCustomerGroup' => Types\Customer\CustomerSetCustomerGroupAction::class,
        'setDateOfBirth' => Types\Customer\CustomerSetDateOfBirthAction::class,
        'setKey' => Types\Customer\CustomerSetKeyAction::class,
        'setDefaultShippingAddress' => Types\Customer\CustomerSetDefaultShippingAddressAction::class,
        'setLastName' => Types\Customer\CustomerSetLastNameAction::class,
        'setCompanyName' => Types\Customer\CustomerSetCompanyNameAction::class,
        'addShippingAddressId' => Types\Customer\CustomerAddShippingAddressIdAction::class,
        'setVatId' => Types\Customer\CustomerSetVatIdAction::class,
        'setFirstName' => Types\Customer\CustomerSetFirstNameAction::class,
        'setLocale' => Types\Customer\CustomerSetLocaleAction::class,
        'setCustomerNumber' => Types\Customer\CustomerSetCustomerNumberAction::class,

    ];

}
