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
     * <p>Number between -100 and 100 included.
     * If <code>rating</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *
     * @return null|int
     */
    public function getRating();

    public function setRating(?int $rating): void;
}
