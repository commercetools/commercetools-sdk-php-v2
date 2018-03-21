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
        'setCartPredicate' => Types\DiscountCode\DiscountCodeSetCartPredicateAction::class,
        'setValidFrom' => Types\DiscountCode\DiscountCodeSetValidFromAction::class,
        'changeCartDiscounts' => Types\DiscountCode\DiscountCodeChangeCartDiscountsAction::class,
        'setMaxApplications' => Types\DiscountCode\DiscountCodeSetMaxApplicationsAction::class,
        'setValidUntil' => Types\DiscountCode\DiscountCodeSetValidUntilAction::class,
        'changeIsActive' => Types\DiscountCode\DiscountCodeChangeIsActiveAction::class,
        'setMaxApplicationsPerCustomer' => Types\DiscountCode\DiscountCodeSetMaxApplicationsPerCustomerAction::class,
        'setDescription' => Types\DiscountCode\DiscountCodeSetDescriptionAction::class,
        'setName' => Types\DiscountCode\DiscountCodeSetNameAction::class,
        'changeGroups' => Types\DiscountCode\DiscountCodeChangeGroupsAction::class,

    ];

}
