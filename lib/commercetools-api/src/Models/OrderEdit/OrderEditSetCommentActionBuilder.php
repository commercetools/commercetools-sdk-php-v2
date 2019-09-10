<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderEditSetCommentAction>
 */
final class OrderEditSetCommentActionBuilder implements Builder
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
    protected $comment;

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
    final public function getComment()
    {
       return $this->comment;
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
    final public function withComment(?string $comment)
    {
        $this->comment = $comment;
        
        return $this;
    }
    
    public function build(): OrderEditSetCommentAction {
        return new OrderEditSetCommentActionModel(
            $this->action,
            $this->comment
        );
    }
    
    public static function of(): OrderEditSetCommentActionBuilder
    {
        return new self();
    }
}