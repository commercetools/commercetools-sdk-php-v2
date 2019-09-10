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
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;

/**
 * @implements Builder<StagedOrderSetOrderNumberAction>
 */
final class StagedOrderSetOrderNumberActionBuilder implements Builder
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
    protected $orderNumber;

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
    final public function getOrderNumber()
    {
       return $this->orderNumber;
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
    final public function withOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;
        
        return $this;
    }
    
    public function build(): StagedOrderSetOrderNumberAction {
        return new StagedOrderSetOrderNumberActionModel(
            $this->action,
            $this->orderNumber
        );
    }
    
    public static function of(): StagedOrderSetOrderNumberActionBuilder
    {
        return new self();
    }
}