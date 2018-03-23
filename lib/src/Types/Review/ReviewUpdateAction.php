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
        'setCustomType' => Types\Review\ReviewSetCustomTypeAction::class,
        'setText' => Types\Review\ReviewSetTextAction::class,
        'transitionState' => Types\Review\ReviewTransitionStateAction::class,
        'setKey' => Types\Review\ReviewSetKeyAction::class,
        'setLocale' => Types\Review\ReviewSetLocaleAction::class,
        'setCustomField' => Types\Review\ReviewSetCustomFieldAction::class,
        'setTitle' => Types\Review\ReviewSetTitleAction::class,
        'setAuthorName' => Types\Review\ReviewSetAuthorNameAction::class,
        'setTarget' => Types\Review\ReviewSetTargetAction::class,
        'setRating' => Types\Review\ReviewSetRatingAction::class,
        'setCustomer' => Types\Review\ReviewSetCustomerAction::class,

    ];

}
