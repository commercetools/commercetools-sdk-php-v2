<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ReviewRatingStatistics extends JsonObject {
    protected $averageRating;
    protected $highestRating;
    protected $lowestRating;
    protected $count;
    protected $ratingsDistribution;

    /**
     * @return float
     */
    public function getAverageRating(): float
    {
        if (is_null($this->averageRating)) {
            $value = $this->raw('averageRating');
            if (!is_null($value)) {
                $this->averageRating = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->averageRating;
    }
                

    /**
     * @return float
     */
    public function getHighestRating(): float
    {
        if (is_null($this->highestRating)) {
            $value = $this->raw('highestRating');
            if (!is_null($value)) {
                $this->highestRating = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->highestRating;
    }
                

    /**
     * @return float
     */
    public function getLowestRating(): float
    {
        if (is_null($this->lowestRating)) {
            $value = $this->raw('lowestRating');
            if (!is_null($value)) {
                $this->lowestRating = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->lowestRating;
    }
                

    /**
     * @return int
     */
    public function getCount(): int
    {
        if (is_null($this->count)) {
            $value = $this->raw('count');
            if (!is_null($value)) {
                $this->count = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->count;
    }
                

    /**
     * @return array
     */
    public function getRatingsDistribution(): array
    {
        if (is_null($this->ratingsDistribution)) {
            $value = $this->raw('ratingsDistribution');
            if (!is_null($value)) {
                $this->ratingsDistribution = $value;
            } else {
                return [];
            }
        }
        return $this->ratingsDistribution;
    }
                
}
