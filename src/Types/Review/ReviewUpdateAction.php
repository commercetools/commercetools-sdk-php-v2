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
        'setLocale' => Types\Review\ReviewSetLocaleAction::class,
        'setAuthorName' => Types\Review\ReviewSetAuthorNameAction::class,
        'setTarget' => Types\Review\ReviewSetTargetAction::class,
        'setText' => Types\Review\ReviewSetTextAction::class,
        'setKey' => Types\Review\ReviewSetKeyAction::class,
        'setCustomType' => Types\Review\ReviewSetCustomTypeAction::class,
        'setCustomer' => Types\Review\ReviewSetCustomerAction::class,
        'transitionState' => Types\Review\ReviewTransitionStateAction::class,
        'setTitle' => Types\Review\ReviewSetTitleAction::class,
        'setRating' => Types\Review\ReviewSetRatingAction::class,
        'setCustomField' => Types\Review\ReviewSetCustomFieldAction::class,

    ];

}
