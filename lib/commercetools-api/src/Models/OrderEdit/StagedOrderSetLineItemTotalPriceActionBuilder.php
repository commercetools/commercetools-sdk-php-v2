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
use Commercetools\Api\Models\Cart\ExternalLineItemTotalPrice;
use Commercetools\Api\Models\Cart\ExternalLineItemTotalPriceBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;

/**
 * @implements Builder<StagedOrderSetLineItemTotalPriceAction>
 */
final class StagedOrderSetLineItemTotalPriceActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ExternalLineItemTotalPriceBuilder|ExternalLineItemTotalPrice
     */
    protected $externalTotalPrice;
    
    /**
     * @var ?string
     */
    protected $lineItemId;

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
     * @return ExternalLineItemTotalPrice|null
     */
    final public function getExternalTotalPrice()
    {
       return ($this->externalTotalPrice instanceof ExternalLineItemTotalPriceBuilder ? $this->externalTotalPrice->build() : $this->externalTotalPrice);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLineItemId()
    {
       return $this->lineItemId;
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
    final public function withExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withExternalTotalPriceBuilder(?ExternalLineItemTotalPriceBuilder $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;
        
        return $this;
    }
    
    public function build(): StagedOrderSetLineItemTotalPriceAction {
        return new StagedOrderSetLineItemTotalPriceActionModel(
            $this->action,
            ($this->externalTotalPrice instanceof ExternalLineItemTotalPriceBuilder ? $this->externalTotalPrice->build() : $this->externalTotalPrice),
            $this->lineItemId
        );
    }
    
    public static function of(): StagedOrderSetLineItemTotalPriceActionBuilder
    {
        return new self();
    }
}