<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReviewSetRatingAction extends ReviewUpdateAction
{
    public const FIELD_RATING = 'rating';

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|int
     */
    public function getRating();

    /**
     * @param ?int $rating
     */
    public function setRating(?int $rating): void;
}
