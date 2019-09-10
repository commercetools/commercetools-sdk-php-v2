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
 * @implements Builder<CartRemoveLineItemAction>
 */
final class CartRemoveLineItemActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?ExternalLineItemTotalPriceBuilder|ExternalLineItemTotalPrice
     */
    protected $externalTotalPrice;
    
    /**
     * @var ?string
     */
    protected $lineItemId;
    
    /**
     * @var ?ItemShippingDetailsDraftBuilder|ItemShippingDetailsDraft
     */
    protected $shippingDetailsToRemove;
    
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
     * @return int|null
     */
    final public function getQuantity()
    {
       return $this->quantity;
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
     *
     * @return ItemShippingDetailsDraft|null
     */
    final public function getShippingDetailsToRemove()
    {
       return ($this->shippingDetailsToRemove instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetailsToRemove->build() : $this->shippingDetailsToRemove);
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
    final public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;
        
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
    final public function withShippingDetailsToRemove(?ItemShippingDetailsDraft $shippingDetailsToRemove)
    {
        $this->shippingDetailsToRemove = $shippingDetailsToRemove;
        
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
    final public function withExternalTotalPriceBuilder(?ExternalLineItemTotalPriceBuilder $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingDetailsToRemoveBuilder(?ItemShippingDetailsDraftBuilder $shippingDetailsToRemove)
    {
        $this->shippingDetailsToRemove = $shippingDetailsToRemove;
        
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
    
    public function build(): CartRemoveLineItemAction {
        return new CartRemoveLineItemActionModel(
            $this->action,
            $this->quantity,
            ($this->externalTotalPrice instanceof ExternalLineItemTotalPriceBuilder ? $this->externalTotalPrice->build() : $this->externalTotalPrice),
            $this->lineItemId,
            ($this->shippingDetailsToRemove instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetailsToRemove->build() : $this->shippingDetailsToRemove),
            ($this->externalPrice instanceof MoneyBuilder ? $this->externalPrice->build() : $this->externalPrice)
        );
    }
    
    public static function of(): CartRemoveLineItemActionBuilder
    {
        return new self();
    }
}