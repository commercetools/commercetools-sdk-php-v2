<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface ReviewUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'setKey' => Types\Review\ReviewSetKeyAction::class,
        'transitionState' => Types\Review\ReviewTransitionStateAction::class,
        'setRating' => Types\Review\ReviewSetRatingAction::class,
        'setTarget' => Types\Review\ReviewSetTargetAction::class,
        'setCustomer' => Types\Review\ReviewSetCustomerAction::class,
        'setCustomField' => Types\Review\ReviewSetCustomFieldAction::class,
        'setCustomType' => Types\Review\ReviewSetCustomTypeAction::class,
        'setTitle' => Types\Review\ReviewSetTitleAction::class,
        'setText' => Types\Review\ReviewSetTextAction::class,
        'setLocale' => Types\Review\ReviewSetLocaleAction::class,
        'setAuthorName' => Types\Review\ReviewSetAuthorNameAction::class,

    ];

}
