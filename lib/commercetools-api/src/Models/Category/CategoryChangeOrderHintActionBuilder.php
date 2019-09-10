<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategoryChangeOrderHintAction>
 */
final class CategoryChangeOrderHintActionBuilder implements Builder
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
    protected $orderHint;

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
    final public function getOrderHint()
    {
       return $this->orderHint;
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
    final public function withOrderHint(?string $orderHint)
    {
        $this->orderHint = $orderHint;
        
        return $this;
    }
    
    public function build(): CategoryChangeOrderHintAction {
        return new CategoryChangeOrderHintActionModel(
            $this->action,
            $this->orderHint
        );
    }
    
    public static function of(): CategoryChangeOrderHintActionBuilder
    {
        return new self();
    }
}