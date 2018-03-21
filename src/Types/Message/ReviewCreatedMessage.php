<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Review\Review;

interface ReviewCreatedMessage extends Message {
    const FIELD_REVIEW = 'review';

    /**
     * @return Review
     */
    public function getReview();

    /**
     * @param Review $review
     * @return $this
     */
    public function setReview(Review $review);

}
