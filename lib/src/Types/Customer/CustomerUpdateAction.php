<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface CustomerUpdateAction extends UpdateAction
{
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'addAddress' => Types\Customer\CustomerAddAddressAction::class,
        'addBillingAddressId' => Types\Customer\CustomerAddBillingAddressIdAction::class,
        'addShippingAddressId' => Types\Customer\CustomerAddShippingAddressIdAction::class,
        'changeAddress' => Types\Customer\CustomerChangeAddressAction::class,
        'changeEmail' => Types\Customer\CustomerChangeEmailAction::class,
        'removeAddress' => Types\Customer\CustomerRemoveAddressAction::class,
        'removeBillingAddressId' => Types\Customer\CustomerRemoveBillingAddressIdAction::class,
        'removeShippingAddressId' => Types\Customer\CustomerRemoveShippingAddressIdAction::class,
        'setCompanyName' => Types\Customer\CustomerSetCompanyNameAction::class,
        'setCustomField' => Types\Customer\CustomerSetCustomFieldAction::class,
        'setCustomType' => Types\Customer\CustomerSetCustomTypeAction::class,
        'setCustomerGroup' => Types\Customer\CustomerSetCustomerGroupAction::class,
        'setCustomerNumber' => Types\Customer\CustomerSetCustomerNumberAction::class,
        'setDateOfBirth' => Types\Customer\CustomerSetDateOfBirthAction::class,
        'setDefaultBillingAddress' => Types\Customer\CustomerSetDefaultBillingAddressAction::class,
        'setDefaultShippingAddress' => Types\Customer\CustomerSetDefaultShippingAddressAction::class,
        'setExternalId' => Types\Customer\CustomerSetExternalIdAction::class,
        'setFirstName' => Types\Customer\CustomerSetFirstNameAction::class,
        'setKey' => Types\Customer\CustomerSetKeyAction::class,
        'setLastName' => Types\Customer\CustomerSetLastNameAction::class,
        'setLocale' => Types\Customer\CustomerSetLocaleAction::class,
        'setMiddleName' => Types\Customer\CustomerSetMiddleNameAction::class,
        'setSalutation' => Types\Customer\CustomerSetSalutationAction::class,
        'setTitle' => Types\Customer\CustomerSetTitleAction::class,
        'setVatId' => Types\Customer\CustomerSetVatIdAction::class,

    ];

}
