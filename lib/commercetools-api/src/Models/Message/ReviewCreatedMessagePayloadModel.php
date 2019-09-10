<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\Review\ReviewModel;

final class ReviewCreatedMessagePayloadModel extends JsonObjectModel implements ReviewCreatedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ReviewCreated';
    public function __construct(
        string $type = null,
        Review $review = null
    ) {
        $this->type = $type;
        $this->review = $review;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?Review
     */
    protected $review;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessagePayload::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return Review|null
     */
    final public function getReview()
    {
       if (is_null($this->review)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ReviewCreatedMessagePayload::FIELD_REVIEW);
           if (is_null($data)) {
               return null;
           }
           
           $this->review = ReviewModel::of($data);
       }
       return $this->review;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setReview(?Review $review): void
    {
        $this->review = $review;
    }
    
}