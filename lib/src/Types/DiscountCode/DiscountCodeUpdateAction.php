<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface DiscountCodeUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'changeCartDiscounts' => Types\DiscountCode\DiscountCodeChangeCartDiscountsAction::class,
        'changeGroups' => Types\DiscountCode\DiscountCodeChangeGroupsAction::class,
        'changeIsActive' => Types\DiscountCode\DiscountCodeChangeIsActiveAction::class,
        'setCartPredicate' => Types\DiscountCode\DiscountCodeSetCartPredicateAction::class,
        'setDescription' => Types\DiscountCode\DiscountCodeSetDescriptionAction::class,
        'setMaxApplications' => Types\DiscountCode\DiscountCodeSetMaxApplicationsAction::class,
        'setMaxApplicationsPerCustomer' => Types\DiscountCode\DiscountCodeSetMaxApplicationsPerCustomerAction::class,
        'setName' => Types\DiscountCode\DiscountCodeSetNameAction::class,
        'setValidFrom' => Types\DiscountCode\DiscountCodeSetValidFromAction::class,
        'setValidUntil' => Types\DiscountCode\DiscountCodeSetValidUntilAction::class,

    ];

}
