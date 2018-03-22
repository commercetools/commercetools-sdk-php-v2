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
        'setCustomField' => Types\CartDiscount\CartDiscountSetCustomFieldAction::class,
        'changeStackingMode' => Types\CartDiscount\CartDiscountChangeStackingModeAction::class,
        'changeRequiresDiscountCode' => Types\CartDiscount\CartDiscountChangeRequiresDiscountCodeAction::class,
        'changeName' => Types\CartDiscount\CartDiscountChangeNameAction::class,
        'setValidUntil' => Types\CartDiscount\CartDiscountSetValidUntilAction::class,
        'setValidFrom' => Types\CartDiscount\CartDiscountSetValidFromAction::class,
        'changeTarget' => Types\CartDiscount\CartDiscountChangeTargetAction::class,
        'setCustomType' => Types\CartDiscount\CartDiscountSetCustomTypeAction::class,
        'setDescription' => Types\CartDiscount\CartDiscountSetDescriptionAction::class,
        'changeCartPredicate' => Types\CartDiscount\CartDiscountChangeCartPredicateAction::class,
        'changeValue' => Types\CartDiscount\CartDiscountChangeValueAction::class,
        'changeSortOrder' => Types\CartDiscount\CartDiscountChangeSortOrderAction::class,
        'changeIsActive' => Types\CartDiscount\CartDiscountChangeIsActiveAction::class,

    ];

}
