<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ReviewSetRatingActionModel extends JsonObjectModel implements ReviewSetRatingAction
{
    const DISCRIMINATOR_VALUE = 'setRating';
    public function __construct(
        string $action = null,
        int $rating = null
    ) {
        $this->action = $action;
        $this->rating = $rating;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?int
     */
    protected $rating;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReviewUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getRating()
    {
       if (is_null($this->rating)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ReviewSetRatingAction::FIELD_RATING);
           if (is_null($data)) {
               return null;
           }
           $this->rating = (int)$data;
       }
       return $this->rating;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setRating(?int $rating): void
    {
        $this->rating = $rating;
    }
    
}