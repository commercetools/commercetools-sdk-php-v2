<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface ProductDiscountUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'changePredicate' => Types\ProductDiscount\ProductDiscountChangePredicateAction::class,
        'setDescription' => Types\ProductDiscount\ProductDiscountSetDescriptionAction::class,
        'changeValue' => Types\ProductDiscount\ProductDiscountChangeValueAction::class,
        'setValidFrom' => Types\ProductDiscount\ProductDiscountSetValidFromAction::class,
        'changeSortOrder' => Types\ProductDiscount\ProductDiscountChangeSortOrderAction::class,
        'changeName' => Types\ProductDiscount\ProductDiscountChangeNameAction::class,
        'changeIsActive' => Types\ProductDiscount\ProductDiscountChangeIsActiveAction::class,
        'setValidUntil' => Types\ProductDiscount\ProductDiscountSetValidUntilAction::class,

    ];

}
