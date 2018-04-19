<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface ProductDiscountUpdateAction extends UpdateAction
{
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'changeIsActive' => Types\ProductDiscount\ProductDiscountChangeIsActiveAction::class,
        'changeName' => Types\ProductDiscount\ProductDiscountChangeNameAction::class,
        'changePredicate' => Types\ProductDiscount\ProductDiscountChangePredicateAction::class,
        'changeSortOrder' => Types\ProductDiscount\ProductDiscountChangeSortOrderAction::class,
        'changeValue' => Types\ProductDiscount\ProductDiscountChangeValueAction::class,
        'setDescription' => Types\ProductDiscount\ProductDiscountSetDescriptionAction::class,
        'setValidFrom' => Types\ProductDiscount\ProductDiscountSetValidFromAction::class,
        'setValidUntil' => Types\ProductDiscount\ProductDiscountSetValidUntilAction::class,

    ];

}
