<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\Review\ReviewBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ReviewCreatedMessagePayload>
 */
final class ReviewCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|Review|ReviewBuilder
     */
    private $review;

    /**
     * <p><a href="ctp:api:type:Review">Review</a> that was created.</p>
     *

     * @return null|Review
     */
    public function getReview()
    {
        return $this->review instanceof ReviewBuilder ? $this->review->build() : $this->review;
    }

    /**
     * @param ?Review $review
     * @return $this
     */
    public function withReview(?Review $review)
    {
        $this->review = $review;

        return $this;
    }

    /**
     * @deprecated use withReview() instead
     * @return $this
     */
    public function withReviewBuilder(?ReviewBuilder $review)
    {
        $this->review = $review;

        return $this;
    }

    public function build(): ReviewCreatedMessagePayload
    {
        return new ReviewCreatedMessagePayloadModel(
            $this->review instanceof ReviewBuilder ? $this->review->build() : $this->review
        );
    }

    public static function of(): ReviewCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
