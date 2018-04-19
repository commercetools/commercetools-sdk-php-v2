<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

interface ReviewSetRatingAction extends ReviewUpdateAction
{
    const FIELD_RATING = 'rating';

    /**
     * @return int
     */
    public function getRating();

    /**
     * @param int $rating
     * @return $this
     */
    public function setRating(int $rating);

}
