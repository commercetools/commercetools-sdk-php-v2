<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ReviewRatingStatisticsModel extends JsonObjectModel implements ReviewRatingStatistics
{
    /**
     * @var ?int
     */
    protected $highestRating;

    /**
     * @var ?int
     */
    protected $averageRating;

    /**
     * @var ?int
     */
    protected $count;

    /**
     * @var ?JsonObject
     */
    protected $ratingsDistribution;

    /**
     * @var ?int
     */
    protected $lowestRating;

    public function __construct(
        int $highestRating = null,
        int $averageRating = null,
        int $count = null,
        JsonObject $ratingsDistribution = null,
        int $lowestRating = null
    ) {
        $this->highestRating = $highestRating;
        $this->averageRating = $averageRating;
        $this->count = $count;
        $this->ratingsDistribution = $ratingsDistribution;
        $this->lowestRating = $lowestRating;
    }

    /**
     * @return null|int
     */
    public function getHighestRating()
    {
        if (is_null($this->highestRating)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ReviewRatingStatistics::FIELD_HIGHEST_RATING);
            if (is_null($data)) {
                return null;
            }
            $this->highestRating = (int) $data;
        }

        return $this->highestRating;
    }

    /**
     * @return null|int
     */
    public function getAverageRating()
    {
        if (is_null($this->averageRating)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ReviewRatingStatistics::FIELD_AVERAGE_RATING);
            if (is_null($data)) {
                return null;
            }
            $this->averageRating = (int) $data;
        }

        return $this->averageRating;
    }

    /**
     * @return null|int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ReviewRatingStatistics::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (int) $data;
        }

        return $this->count;
    }

    /**
     * @return null|JsonObject
     */
    public function getRatingsDistribution()
    {
        if (is_null($this->ratingsDistribution)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ReviewRatingStatistics::FIELD_RATINGS_DISTRIBUTION);
            if (is_null($data)) {
                return null;
            }
            $this->ratingsDistribution = JsonObjectModel::of($data);
        }

        return $this->ratingsDistribution;
    }

    /**
     * @return null|int
     */
    public function getLowestRating()
    {
        if (is_null($this->lowestRating)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ReviewRatingStatistics::FIELD_LOWEST_RATING);
            if (is_null($data)) {
                return null;
            }
            $this->lowestRating = (int) $data;
        }

        return $this->lowestRating;
    }

    public function setHighestRating(?int $highestRating): void
    {
        $this->highestRating = $highestRating;
    }

    public function setAverageRating(?int $averageRating): void
    {
        $this->averageRating = $averageRating;
    }

    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    public function setRatingsDistribution(?JsonObject $ratingsDistribution): void
    {
        $this->ratingsDistribution = $ratingsDistribution;
    }

    public function setLowestRating(?int $lowestRating): void
    {
        $this->lowestRating = $lowestRating;
    }
}
