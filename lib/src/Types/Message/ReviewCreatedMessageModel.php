<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Review\Review;

class ReviewCreatedMessageModel extends MessageModel implements ReviewCreatedMessage {
    const DISCRIMINATOR_VALUE = 'ReviewCreated';

    /**
     * @var Review
     */
    protected $review;

    /**
     * @return Review
     */
    public function getReview()
    {
        if (is_null($this->review)) {
            $value = $this->raw(ReviewCreatedMessage::FIELD_REVIEW);
            if (is_null($value)) {
                return $this->mapData(Review::class, null);
            }
            $value = $this->mapData(Review::class, $value);

            $this->review = $value;
        }
        return $this->review;
    }

    /**
     * @param Review $review
     * @return $this
     */
    public function setReview(Review $review)
    {
        $this->review = $review;

        return $this;
    }

}
