<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ReviewRatingStatistics>
 */
final class ReviewRatingStatisticsBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $averageRating;

    /**

     * @var ?int
     */
    private $highestRating;

    /**

     * @var ?int
     */
    private $lowestRating;

    /**

     * @var ?int
     */
    private $count;

    /**

     * @var ?JsonObject
     */
    private $ratingsDistribution;

    /**
     * <p>Average rating of one target This number is rounded with 5 decimals.</p>
     *

     * @return null|int
     */
    public function getAverageRating()
    {
        return $this->averageRating;
    }

    /**
     * <p>Highest rating of one target</p>
     *

     * @return null|int
     */
    public function getHighestRating()
    {
        return $this->highestRating;
    }

    /**
     * <p>Lowest rating of one target</p>
     *

     * @return null|int
     */
    public function getLowestRating()
    {
        return $this->lowestRating;
    }

    /**
     * <p>Number of ratings taken into account</p>
     *

     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <p>The full distribution of the ratings. The keys are the different ratings and the values are the count of reviews having this rating. Only the used ratings appear in this object.</p>
     *

     * @return null|JsonObject
     */
    public function getRatingsDistribution()
    {
        return $this->ratingsDistribution;
    }

    /**
     * @param ?int $averageRating
     * @return $this
     */
    public function withAverageRating(?int $averageRating)
    {
        $this->averageRating = $averageRating;

        return $this;
    }

    /**
     * @param ?int $highestRating
     * @return $this
     */
    public function withHighestRating(?int $highestRating)
    {
        $this->highestRating = $highestRating;

        return $this;
    }

    /**
     * @param ?int $lowestRating
     * @return $this
     */
    public function withLowestRating(?int $lowestRating)
    {
        $this->lowestRating = $lowestRating;

        return $this;
    }

    /**
     * @param ?int $count
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @param ?JsonObject $ratingsDistribution
     * @return $this
     */
    public function withRatingsDistribution(?JsonObject $ratingsDistribution)
    {
        $this->ratingsDistribution = $ratingsDistribution;

        return $this;
    }


    public function build(): ReviewRatingStatistics
    {
        return new ReviewRatingStatisticsModel(
            $this->averageRating,
            $this->highestRating,
            $this->lowestRating,
            $this->count,
            $this->ratingsDistribution
        );
    }

    public static function of(): ReviewRatingStatisticsBuilder
    {
        return new self();
    }
}
