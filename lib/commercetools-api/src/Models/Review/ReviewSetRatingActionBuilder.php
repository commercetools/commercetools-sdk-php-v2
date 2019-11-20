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
