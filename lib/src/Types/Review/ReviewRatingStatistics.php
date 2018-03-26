<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Base\JsonObject;

interface ReviewRatingStatistics extends JsonObject {
    const FIELD_AVERAGE_RATING = 'averageRating';
    const FIELD_HIGHEST_RATING = 'highestRating';
    const FIELD_LOWEST_RATING = 'lowestRating';
    const FIELD_COUNT = 'count';
    const FIELD_RATINGS_DISTRIBUTION = 'ratingsDistribution';

    /**
     * @return int
     */
    public function getAverageRating();

    /**
     * @return int
     */
    public function getHighestRating();

    /**
     * @return int
     */
    public function getLowestRating();

    /**
     * @return int
     */
    public function getCount();

    /**
     * @return object
     */
    public function getRatingsDistribution();

    /**
     * @param int $averageRating
     * @return $this
     */
    public function setAverageRating(int $averageRating);

    /**
     * @param int $highestRating
     * @return $this
     */
    public function setHighestRating(int $highestRating);

    /**
     * @param int $lowestRating
     * @return $this
     */
    public function setLowestRating(int $lowestRating);

    /**
     * @param int $count
     * @return $this
     */
    public function setCount(int $count);

    /**
     * @param object $ratingsDistribution
     * @return $this
     */
    public function setRatingsDistribution($ratingsDistribution);

}
