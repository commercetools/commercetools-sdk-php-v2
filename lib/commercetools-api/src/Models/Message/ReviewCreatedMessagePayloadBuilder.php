<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\Review\ReviewBuilder;

/**
 * @implements Builder<ReviewCreatedMessagePayload>
 */
final class ReviewCreatedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ReviewBuilder|Review
     */
    protected $review;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
    }
    
    /**
     *
     * @return Review|null
     */
    final public function getReview()
    {
       return ($this->review instanceof ReviewBuilder ? $this->review->build() : $this->review);
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withReview(?Review $review)
    {
        $this->review = $review;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withReviewBuilder(?ReviewBuilder $review)
    {
        $this->review = $review;
        
        return $this;
    }
    
    public function build(): ReviewCreatedMessagePayload {
        return new ReviewCreatedMessagePayloadModel(
            $this->type,
            ($this->review instanceof ReviewBuilder ? $this->review->build() : $this->review)
        );
    }
    
    public static function of(): ReviewCreatedMessagePayloadBuilder
    {
        return new self();
    }
}