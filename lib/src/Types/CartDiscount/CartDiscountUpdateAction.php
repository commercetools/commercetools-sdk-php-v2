<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface CartDiscountUpdateAction extends UpdateAction
{
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'changeCartPredicate' => Types\CartDiscount\CartDiscountChangeCartPredicateAction::class,
        'changeIsActive' => Types\CartDiscount\CartDiscountChangeIsActiveAction::class,
        'changeName' => Types\CartDiscount\CartDiscountChangeNameAction::class,
        'changeRequiresDiscountCode' => Types\CartDiscount\CartDiscountChangeRequiresDiscountCodeAction::class,
        'changeSortOrder' => Types\CartDiscount\CartDiscountChangeSortOrderAction::class,
        'changeStackingMode' => Types\CartDiscount\CartDiscountChangeStackingModeAction::class,
        'changeTarget' => Types\CartDiscount\CartDiscountChangeTargetAction::class,
        'changeValue' => Types\CartDiscount\CartDiscountChangeValueAction::class,
        'setCustomField' => Types\CartDiscount\CartDiscountSetCustomFieldAction::class,
        'setCustomType' => Types\CartDiscount\CartDiscountSetCustomTypeAction::class,
        'setDescription' => Types\CartDiscount\CartDiscountSetDescriptionAction::class,
        'setValidFrom' => Types\CartDiscount\CartDiscountSetValidFromAction::class,
        'setValidUntil' => Types\CartDiscount\CartDiscountSetValidUntilAction::class,

    ];

}
