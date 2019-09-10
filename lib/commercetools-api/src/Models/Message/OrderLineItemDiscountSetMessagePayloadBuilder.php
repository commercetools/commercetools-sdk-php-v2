<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Cart\DiscountedLineItemPriceForQuantityCollection;
use Commercetools\Api\Models\Cart\TaxedItemPrice;
use Commercetools\Api\Models\Cart\TaxedItemPriceBuilder;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;

/**
 * @implements Builder<OrderLineItemDiscountSetMessagePayload>
 */
final class OrderLineItemDiscountSetMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $totalPrice;
    
    /**
     * @var ?string
     */
    protected $lineItemId;
    
    /**
     * @var ?TaxedItemPriceBuilder|TaxedItemPrice
     */
    protected $taxedPrice;
    
    /**
     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    protected $discountedPricePerQuantity;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getTotalPrice()
    {
       return ($this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice);
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
     * @return TaxedItemPrice|null
     */
    final public function getTaxedPrice()
    {
       return ($this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice);
    }
    
    /**
     *
     * @return DiscountedLineItemPriceForQuantityCollection|null
     */
    final public function getDiscountedPricePerQuantity()
    {
       return $this->discountedPricePerQuantity;
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTotalPrice(?Money $totalPrice)
    {
        $this->totalPrice = $totalPrice;
        
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
    final public function withTaxedPrice(?TaxedItemPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity)
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withTotalPriceBuilder(?MoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxedPriceBuilder(?TaxedItemPriceBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;
        
        return $this;
    }
    
    public function build(): OrderLineItemDiscountSetMessagePayload {
        return new OrderLineItemDiscountSetMessagePayloadModel(
            $this->type,
            ($this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice),
            $this->lineItemId,
            ($this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice),
            $this->discountedPricePerQuantity
        );
    }
    
    public static function of(): OrderLineItemDiscountSetMessagePayloadBuilder
    {
        return new self();
    }
}