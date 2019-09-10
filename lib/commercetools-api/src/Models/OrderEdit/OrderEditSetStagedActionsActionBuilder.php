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
use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;

/**
 * @implements Builder<OrderEditSetStagedActionsAction>
 */
final class OrderEditSetStagedActionsActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?StagedOrderUpdateActionCollection
     */
    protected $stagedActions;

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
     * @return StagedOrderUpdateActionCollection|null
     */
    final public function getStagedActions()
    {
       return $this->stagedActions;
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
    final public function withStagedActions(?StagedOrderUpdateActionCollection $stagedActions)
    {
        $this->stagedActions = $stagedActions;
        
        return $this;
    }
    
    public function build(): OrderEditSetStagedActionsAction {
        return new OrderEditSetStagedActionsActionModel(
            $this->action,
            $this->stagedActions
        );
    }
    
    public static function of(): OrderEditSetStagedActionsActionBuilder
    {
        return new self();
    }
}