<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObject;

interface ReviewSetRatingAction extends ReviewUpdateAction
{
    
    const FIELD_RATING = 'rating';

    /**
     *
     * @return int|null
     */
    public function getRating();
    public function setRating(?int $rating): void;
}