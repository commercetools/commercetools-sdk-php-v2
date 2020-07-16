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

/**
 * @internal
 */
final class ReviewRatingStatisticsModel extends JsonObjectModel implements ReviewRatingStatistics
{
    /**
     * @var ?float
     */
    protected $averageRating;

    /**
     * @var ?float
     */
    protected $highestRating;

    /**
     * @var ?float
     */
    protected $lowestRating;

    /**
     * @var ?int
     */
    protected $count;

    /**
     * @var ?mixed
     */
    protected $ratingsDistribution;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?float $averageRating = null,
        ?float $highestRating = null,
        ?float $lowestRating = null,
        ?int $count = null,
        ?JsonObject $ratingsDistribution = null
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
     * @return null|float
     */
    public function getAverageRating()
    {
        if (is_null($this->averageRating)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_AVERAGE_RATING);
            if (is_null($data)) {
                return null;
            }
            $this->averageRating = (float) $data;
        }

        return $this->averageRating;
    }

    /**
     * <p>Highest rating of one target</p>
     *
     * @return null|float
     */
    public function getHighestRating()
    {
        if (is_null($this->highestRating)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_HIGHEST_RATING);
            if (is_null($data)) {
                return null;
            }
            $this->highestRating = (float) $data;
        }

        return $this->highestRating;
    }

    /**
     * <p>Lowest rating of one target</p>
     *
     * @return null|float
     */
    public function getLowestRating()
    {
        if (is_null($this->lowestRating)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_LOWEST_RATING);
            if (is_null($data)) {
                return null;
            }
            $this->lowestRating = (float) $data;
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
            $data = $this->raw(self::FIELD_COUNT);
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
     * @return null|mixed
     */
    public function getRatingsDistribution()
    {
        if (is_null($this->ratingsDistribution)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RATINGS_DISTRIBUTION);
            if (is_null($data)) {
                return null;
            }
            $this->ratingsDistribution = JsonObjectModel::of($data);
        }

        return $this->ratingsDistribution;
    }


    /**
     * @param ?float $averageRating
     */
    public function setAverageRating(?float $averageRating): void
    {
        $this->averageRating = $averageRating;
    }

    /**
     * @param ?float $highestRating
     */
    public function setHighestRating(?float $highestRating): void
    {
        $this->highestRating = $highestRating;
    }

    /**
     * @param ?float $lowestRating
     */
    public function setLowestRating(?float $lowestRating): void
    {
        $this->lowestRating = $lowestRating;
    }

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * @param ?JsonObject $ratingsDistribution
     */
    public function setRatingsDistribution(?JsonObject $ratingsDistribution): void
    {
        $this->ratingsDistribution = $ratingsDistribution;
    }
}
