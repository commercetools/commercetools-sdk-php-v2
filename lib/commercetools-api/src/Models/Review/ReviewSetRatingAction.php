<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

interface ReviewSetRatingAction extends ReviewUpdateAction
{
    const FIELD_RATING = 'rating';

    /**
     * @return null|int
     */
    public function getRating();

    public function setRating(?int $rating): void;
}
