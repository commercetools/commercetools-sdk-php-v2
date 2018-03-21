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
        'setCustomType' => Types\CartDiscount\CartDiscountSetCustomTypeAction::class,
        'changeTarget' => Types\CartDiscount\CartDiscountChangeTargetAction::class,
        'changeSortOrder' => Types\CartDiscount\CartDiscountChangeSortOrderAction::class,
        'changeRequiresDiscountCode' => Types\CartDiscount\CartDiscountChangeRequiresDiscountCodeAction::class,
        'setValidUntil' => Types\CartDiscount\CartDiscountSetValidUntilAction::class,
        'changeValue' => Types\CartDiscount\CartDiscountChangeValueAction::class,
        'setDescription' => Types\CartDiscount\CartDiscountSetDescriptionAction::class,
        'setValidFrom' => Types\CartDiscount\CartDiscountSetValidFromAction::class,
        'changeIsActive' => Types\CartDiscount\CartDiscountChangeIsActiveAction::class,
        'changeStackingMode' => Types\CartDiscount\CartDiscountChangeStackingModeAction::class,
        'changeCartPredicate' => Types\CartDiscount\CartDiscountChangeCartPredicateAction::class,
        'changeName' => Types\CartDiscount\CartDiscountChangeNameAction::class,
        'setCustomField' => Types\CartDiscount\CartDiscountSetCustomFieldAction::class,

    ];

}
