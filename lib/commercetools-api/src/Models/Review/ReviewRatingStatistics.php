<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObject;

interface ReviewRatingStatistics extends JsonObject
{
    const FIELD_AVERAGE_RATING = 'averageRating';
    const FIELD_HIGHEST_RATING = 'highestRating';
    const FIELD_LOWEST_RATING = 'lowestRating';
    const FIELD_COUNT = 'count';
    const FIELD_RATINGS_DISTRIBUTION = 'ratingsDistribution';

    /**
     * @return null|int
     */
    public function getAverageRating();

    /**
     * @return null|int
     */
    public function getHighestRating();

    /**
     * @return null|int
     */
    public function getLowestRating();

    /**
     * @return null|int
     */
    public function getCount();

    /**
     * @return null|JsonObject
     */
    public function getRatingsDistribution();

    public function setAverageRating(?int $averageRating): void;

    public function setHighestRating(?int $highestRating): void;

    public function setLowestRating(?int $lowestRating): void;

    public function setCount(?int $count): void;

    public function setRatingsDistribution(?JsonObject $ratingsDistribution): void;
}
