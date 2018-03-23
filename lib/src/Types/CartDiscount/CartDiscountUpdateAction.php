<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface CartDiscountUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'changeRequiresDiscountCode' => Types\CartDiscount\CartDiscountChangeRequiresDiscountCodeAction::class,
        'changeIsActive' => Types\CartDiscount\CartDiscountChangeIsActiveAction::class,
        'changeCartPredicate' => Types\CartDiscount\CartDiscountChangeCartPredicateAction::class,
        'setDescription' => Types\CartDiscount\CartDiscountSetDescriptionAction::class,
        'changeTarget' => Types\CartDiscount\CartDiscountChangeTargetAction::class,
        'setCustomType' => Types\CartDiscount\CartDiscountSetCustomTypeAction::class,
        'setValidFrom' => Types\CartDiscount\CartDiscountSetValidFromAction::class,
        'setValidUntil' => Types\CartDiscount\CartDiscountSetValidUntilAction::class,
        'changeSortOrder' => Types\CartDiscount\CartDiscountChangeSortOrderAction::class,
        'changeValue' => Types\CartDiscount\CartDiscountChangeValueAction::class,
        'setCustomField' => Types\CartDiscount\CartDiscountSetCustomFieldAction::class,
        'changeStackingMode' => Types\CartDiscount\CartDiscountChangeStackingModeAction::class,
        'changeName' => Types\CartDiscount\CartDiscountChangeNameAction::class,

    ];

}
