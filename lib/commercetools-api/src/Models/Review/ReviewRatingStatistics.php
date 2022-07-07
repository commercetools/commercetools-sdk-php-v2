<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReviewRatingStatistics extends JsonObject
{
    public const FIELD_AVERAGE_RATING = 'averageRating';
    public const FIELD_HIGHEST_RATING = 'highestRating';
    public const FIELD_LOWEST_RATING = 'lowestRating';
    public const FIELD_COUNT = 'count';
    public const FIELD_RATINGS_DISTRIBUTION = 'ratingsDistribution';

    /**
     * <p>Average rating of one target
     * This number is rounded with 5 decimals.</p>
     *

     * @return null|float
     */
    public function getAverageRating();

    /**
     * <p>Highest rating of one target</p>
     *

     * @return null|float
     */
    public function getHighestRating();

    /**
     * <p>Lowest rating of one target</p>
     *

     * @return null|float
     */
    public function getLowestRating();

    /**
     * <p>Number of ratings taken into account</p>
     *

     * @return null|int
     */
    public function getCount();

    /**
     * <p>Full distribution of the ratings.
     * The keys are the different ratings and the values are the count of reviews having this rating.
     * Only the used ratings appear in this object.</p>
     *

     * @return null|mixed
     */
    public function getRatingsDistribution();

    /**
     * @param ?float $averageRating
     */
    public function setAverageRating(?float $averageRating): void;

    /**
     * @param ?float $highestRating
     */
    public function setHighestRating(?float $highestRating): void;

    /**
     * @param ?float $lowestRating
     */
    public function setLowestRating(?float $lowestRating): void;

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void;

    /**
     * @param ?JsonObject $ratingsDistribution
     */
    public function setRatingsDistribution(?JsonObject $ratingsDistribution): void;
}
