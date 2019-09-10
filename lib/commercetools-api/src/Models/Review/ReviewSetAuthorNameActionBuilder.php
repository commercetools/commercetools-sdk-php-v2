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
 * @implements Builder<ReviewSetAuthorNameAction>
 */
final class ReviewSetAuthorNameActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $authorName;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAuthorName()
    {
       return $this->authorName;
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAuthorName(?string $authorName)
    {
        $this->authorName = $authorName;
        
        return $this;
    }
    
    public function build(): ReviewSetAuthorNameAction {
        return new ReviewSetAuthorNameActionModel(
            $this->action,
            $this->authorName
        );
    }
    
    public static function of(): ReviewSetAuthorNameActionBuilder
    {
        return new self();
    }
}