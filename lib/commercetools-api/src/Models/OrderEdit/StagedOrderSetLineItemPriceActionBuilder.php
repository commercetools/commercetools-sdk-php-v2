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
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;

/**
 * @implements Builder<StagedOrderSetLineItemPriceAction>
 */
final class StagedOrderSetLineItemPriceActionBuilder implements Builder
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
    protected $lineItemId;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $externalPrice;

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
    final public function getLineItemId()
    {
       return $this->lineItemId;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getExternalPrice()
    {
       return ($this->externalPrice instanceof MoneyBuilder ? $this->externalPrice->build() : $this->externalPrice);
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
    final public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalPrice(?Money $externalPrice)
    {
        $this->externalPrice = $externalPrice;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withExternalPriceBuilder(?MoneyBuilder $externalPrice)
    {
        $this->externalPrice = $externalPrice;
        
        return $this;
    }
    
    public function build(): StagedOrderSetLineItemPriceAction {
        return new StagedOrderSetLineItemPriceActionModel(
            $this->action,
            $this->lineItemId,
            ($this->externalPrice instanceof MoneyBuilder ? $this->externalPrice->build() : $this->externalPrice)
        );
    }
    
    public static function of(): StagedOrderSetLineItemPriceActionBuilder
    {
        return new self();
    }
}