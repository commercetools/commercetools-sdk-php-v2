<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<ReviewRatingStatistics>
 */
final class ReviewRatingStatisticsBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $highestRating;

    /**
     * @var ?int
     */
    private $averageRating;

    /**
     * @var ?int
     */
    private $count;

    /**
     * @var ?JsonObject
     */
    private $ratingsDistribution;

    /**
     * @var ?int
     */
    private $lowestRating;

    public function __construct()
    {
    }

    /**
     * @return null|int
     */
    public function getHighestRating()
    {
        return $this->highestRating;
    }

    /**
     * @return null|int
     */
    public function getAverageRating()
    {
        return $this->averageRating;
    }

    /**
     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return null|JsonObject
     */
    public function getRatingsDistribution()
    {
        return $this->ratingsDistribution;
    }

    /**
     * @return null|int
     */
    public function getLowestRating()
    {
        return $this->lowestRating;
    }

    /**
     * @return $this
     */
    public function withHighestRating(?int $highestRating)
    {
        $this->highestRating = $highestRating;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAverageRating(?int $averageRating)
    {
        $this->averageRating = $averageRating;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRatingsDistribution(?JsonObject $ratingsDistribution)
    {
        $this->ratingsDistribution = $ratingsDistribution;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLowestRating(?int $lowestRating)
    {
        $this->lowestRating = $lowestRating;

        return $this;
    }

    public function build(): ReviewRatingStatistics
    {
        return new ReviewRatingStatisticsModel(
            $this->highestRating,
            $this->averageRating,
            $this->count,
            $this->ratingsDistribution,
            $this->lowestRating
        );
    }

    public static function of(): ReviewRatingStatisticsBuilder
    {
        return new self();
    }
}
