<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ReviewSetRatingAction>
 */
final class ReviewSetRatingActionBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $rating;

    /**
     * <p>Number between -100 and 100 included.
     * If <code>rating</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *
     * @return null|int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @return $this
     */
    public function withRating(?int $rating)
    {
        $this->rating = $rating;

        return $this;
    }

    public function build(): ReviewSetRatingAction
    {
        return new ReviewSetRatingActionModel(
            $this->rating
        );
    }

    public static function of(): ReviewSetRatingActionBuilder
    {
        return new self();
    }
}
