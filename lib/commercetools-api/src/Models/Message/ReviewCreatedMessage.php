<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Review\Review;

interface ReviewCreatedMessage extends Message
{

    public const FIELD_REVIEW = 'review';

    /**
     * @return null|Review
     */
    public function getReview();

    public function setReview(?Review $review): void;
}
