<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class ReviewRatingStatisticsModel extends JsonObjectModel implements ReviewRatingStatistics
{
    /**
     * @var ?int
     */
    protected $averageRating;

    /**
     * @var ?int
     */
    protected $highestRating;

    /**
     * @var ?int
     */
    protected $lowestRating;

    /**
     * @var ?int
     */
    protected $count;

    /**
     * @var ?JsonObject
     */
    protected $ratingsDistribution;


    public function __construct(
        int $averageRating = null,
        int $highestRating = null,
        int $lowestRating = null,
        int $count = null,
        JsonObject $ratingsDistribution = null
    ) {
        $this->averageRating = $averageRating;
        $this->highestRating = $highestRating;
        $this->lowestRating = $lowestRating;
        $this->count = $count;
        $this->ratingsDistribution = $ratingsDistribution;
    }

    /**
     * <p>Average rating of one target
     * This number is rounded with 5 decimals.</p>
     *
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
     * <p>Highest rating of one target</p>
     *
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
     * <p>Lowest rating of one target</p>
     *
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

    /**
     * <p>Number of ratings taken into account</p>
     *
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
     * <p>The full distribution of the ratings.
     * The keys are the different ratings and the values are the count of reviews having this rating.
     * Only the used ratings appear in this object.</p>
     *
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

    public function setAverageRating(?int $averageRating): void
    {
        $this->averageRating = $averageRating;
    }

    public function setHighestRating(?int $highestRating): void
    {
        $this->highestRating = $highestRating;
    }

    public function setLowestRating(?int $lowestRating): void
    {
        $this->lowestRating = $lowestRating;
    }

    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    public function setRatingsDistribution(?JsonObject $ratingsDistribution): void
    {
        $this->ratingsDistribution = $ratingsDistribution;
    }
}
