<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Review\ReviewUpdateActionModel;

class ReviewSetRatingActionModel extends ReviewUpdateActionModel implements ReviewSetRatingAction
{
    const DISCRIMINATOR_VALUE = 'setRating';

    /**
     * @var int
     */
    protected $rating;

    /**
     * @return int
     */
    public function getRating()
    {
        if (is_null($this->rating)) {
            $value = $this->raw(ReviewSetRatingAction::FIELD_RATING);
            $value = (int)$value;
            $this->rating = $value;
        }
        return $this->rating;
    }

    /**
     * @param int $rating
     * @return $this
     */
    public function setRating(int $rating)
    {
        $this->rating = (int)$rating;

        return $this;
    }

}
