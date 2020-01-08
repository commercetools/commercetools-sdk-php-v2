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
     * <p>Average rating of one target
     * This number is rounded with 5 decimals.</p>.
     *
     * @return null|int
     */
    public function getAverageRating();

    /**
     * <p>Highest rating of one target</p>.
     *
     * @return null|int
     */
    public function getHighestRating();

    /**
     * <p>Lowest rating of one target</p>.
     *
     * @return null|int
     */
    public function getLowestRating();

    /**
     * <p>Number of ratings taken into account</p>.
     *
     * @return null|int
     */
    public function getCount();

    /**
     * <p>The full distribution of the ratings.
     * The keys are the different ratings and the values are the count of reviews having this rating.
     * Only the used ratings appear in this object.</p>.
     *
     * @return null|JsonObject
     */
    public function getRatingsDistribution();

    public function setAverageRating(?int $averageRating): void;

    public function setHighestRating(?int $highestRating): void;

    public function setLowestRating(?int $lowestRating): void;

    public function setCount(?int $count): void;

    public function setRatingsDistribution(?JsonObject $ratingsDistribution): void;
}
