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
 * @implements Builder<ReviewSetTargetAction>
 */
final class ReviewSetTargetActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?JsonObject
     */
    protected $target;

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
     * @return JsonObject|null
     */
    final public function getTarget()
    {
       return $this->target;
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
    final public function withTarget(?JsonObject $target)
    {
        $this->target = $target;
        
        return $this;
    }
    
    public function build(): ReviewSetTargetAction {
        return new ReviewSetTargetActionModel(
            $this->action,
            $this->target
        );
    }
    
    public static function of(): ReviewSetTargetActionBuilder
    {
        return new self();
    }
}