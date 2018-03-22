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
        'setName' => Types\DiscountCode\DiscountCodeSetNameAction::class,
        'setDescription' => Types\DiscountCode\DiscountCodeSetDescriptionAction::class,
        'setValidFrom' => Types\DiscountCode\DiscountCodeSetValidFromAction::class,
        'changeIsActive' => Types\DiscountCode\DiscountCodeChangeIsActiveAction::class,
        'changeGroups' => Types\DiscountCode\DiscountCodeChangeGroupsAction::class,
        'setValidUntil' => Types\DiscountCode\DiscountCodeSetValidUntilAction::class,
        'setMaxApplications' => Types\DiscountCode\DiscountCodeSetMaxApplicationsAction::class,
        'setCartPredicate' => Types\DiscountCode\DiscountCodeSetCartPredicateAction::class,
        'setMaxApplicationsPerCustomer' => Types\DiscountCode\DiscountCodeSetMaxApplicationsPerCustomerAction::class,
        'changeCartDiscounts' => Types\DiscountCode\DiscountCodeChangeCartDiscountsAction::class,

    ];

}
