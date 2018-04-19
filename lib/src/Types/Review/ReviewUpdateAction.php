<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface ReviewUpdateAction extends UpdateAction
{
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'setAuthorName' => Types\Review\ReviewSetAuthorNameAction::class,
        'setCustomField' => Types\Review\ReviewSetCustomFieldAction::class,
        'setCustomType' => Types\Review\ReviewSetCustomTypeAction::class,
        'setCustomer' => Types\Review\ReviewSetCustomerAction::class,
        'setKey' => Types\Review\ReviewSetKeyAction::class,
        'setLocale' => Types\Review\ReviewSetLocaleAction::class,
        'setRating' => Types\Review\ReviewSetRatingAction::class,
        'setTarget' => Types\Review\ReviewSetTargetAction::class,
        'setText' => Types\Review\ReviewSetTextAction::class,
        'setTitle' => Types\Review\ReviewSetTitleAction::class,
        'transitionState' => Types\Review\ReviewTransitionStateAction::class,

    ];

}
