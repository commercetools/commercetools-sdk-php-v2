<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class ReviewRatingStatisticsModel extends JsonObjectModel implements ReviewRatingStatistics {
    /**
     * @var int
     */
    protected $averageRating;
    /**
     * @var int
     */
    protected $highestRating;
    /**
     * @var int
     */
    protected $lowestRating;
    /**
     * @var int
     */
    protected $count;
    /**
     * @var object
     */
    protected $ratingsDistribution;

    /**
     * @return int
     */
    public function getAverageRating()
    {
        if (is_null($this->averageRating)) {
            $value = $this->raw(ReviewRatingStatistics::FIELD_AVERAGE_RATING);
            $value = (int)$value;
            $this->averageRating = $value;
        }
        return $this->averageRating;
    }
    /**
     * @return int
     */
    public function getHighestRating()
    {
        if (is_null($this->highestRating)) {
            $value = $this->raw(ReviewRatingStatistics::FIELD_HIGHEST_RATING);
            $value = (int)$value;
            $this->highestRating = $value;
        }
        return $this->highestRating;
    }
    /**
     * @return int
     */
    public function getLowestRating()
    {
        if (is_null($this->lowestRating)) {
            $value = $this->raw(ReviewRatingStatistics::FIELD_LOWEST_RATING);
            $value = (int)$value;
            $this->lowestRating = $value;
        }
        return $this->lowestRating;
    }
    /**
     * @return int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            $value = $this->raw(ReviewRatingStatistics::FIELD_COUNT);
            $value = (int)$value;
            $this->count = $value;
        }
        return $this->count;
    }
    /**
     * @return object
     */
    public function getRatingsDistribution()
    {
        if (is_null($this->ratingsDistribution)) {
            $value = $this->raw(ReviewRatingStatistics::FIELD_RATINGS_DISTRIBUTION);
            $this->ratingsDistribution = $value;
        }
        return $this->ratingsDistribution;
    }

    /**
     * @param int $averageRating
     * @return $this
     */
    public function setAverageRating(int $averageRating)
    {
        $this->averageRating = (int)$averageRating;

        return $this;
    }
    /**
     * @param int $highestRating
     * @return $this
     */
    public function setHighestRating(int $highestRating)
    {
        $this->highestRating = (int)$highestRating;

        return $this;
    }
    /**
     * @param int $lowestRating
     * @return $this
     */
    public function setLowestRating(int $lowestRating)
    {
        $this->lowestRating = (int)$lowestRating;

        return $this;
    }
    /**
     * @param int $count
     * @return $this
     */
    public function setCount(int $count)
    {
        $this->count = (int)$count;

        return $this;
    }
    /**
     * @param $ratingsDistribution
     * @return $this
     */
    public function setRatingsDistribution($ratingsDistribution)
    {
        $this->ratingsDistribution = $ratingsDistribution;

        return $this;
    }

}
