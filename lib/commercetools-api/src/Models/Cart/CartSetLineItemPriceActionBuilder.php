<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;

/**
 * @implements Builder<CartSetLineItemPriceAction>
 */
final class CartSetLineItemPriceActionBuilder implements Builder
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
    
    public function build(): CartSetLineItemPriceAction {
        return new CartSetLineItemPriceActionModel(
            $this->action,
            $this->lineItemId,
            ($this->externalPrice instanceof MoneyBuilder ? $this->externalPrice->build() : $this->externalPrice)
        );
    }
    
    public static function of(): CartSetLineItemPriceActionBuilder
    {
        return new self();
    }
}