<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ReviewRatingStatistics>
 */
final class ReviewRatingStatisticsBuilder implements Builder
{
    public function __construct() {
    }

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

    /**
     *
     * @return int|null
     */
    final public function getHighestRating()
    {
       return $this->highestRating;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getAverageRating()
    {
       return $this->averageRating;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getCount()
    {
       return $this->count;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getRatingsDistribution()
    {
       return $this->ratingsDistribution;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getLowestRating()
    {
       return $this->lowestRating;
    }
    /**
     * @return $this
     */
    final public function withHighestRating(?int $highestRating)
    {
        $this->highestRating = $highestRating;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAverageRating(?int $averageRating)
    {
        $this->averageRating = $averageRating;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCount(?int $count)
    {
        $this->count = $count;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withRatingsDistribution(?JsonObject $ratingsDistribution)
    {
        $this->ratingsDistribution = $ratingsDistribution;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLowestRating(?int $lowestRating)
    {
        $this->lowestRating = $lowestRating;
        
        return $this;
    }
    
    public function build(): ReviewRatingStatistics {
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