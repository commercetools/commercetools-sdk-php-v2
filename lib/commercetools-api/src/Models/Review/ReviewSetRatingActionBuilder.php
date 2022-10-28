<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param ?int $rating
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
