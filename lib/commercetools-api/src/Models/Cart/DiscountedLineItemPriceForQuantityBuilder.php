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

/**
 * @implements Builder<DiscountedLineItemPriceForQuantity>
 */
final class DiscountedLineItemPriceForQuantityBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?DiscountedLineItemPriceBuilder|DiscountedLineItemPrice
     */
    protected $discountedPrice;

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
     * @return DiscountedLineItemPrice|null
     */
    final public function getDiscountedPrice()
    {
       return ($this->discountedPrice instanceof DiscountedLineItemPriceBuilder ? $this->discountedPrice->build() : $this->discountedPrice);
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
    final public function withDiscountedPrice(?DiscountedLineItemPrice $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withDiscountedPriceBuilder(?DiscountedLineItemPriceBuilder $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;
        
        return $this;
    }
    
    public function build(): DiscountedLineItemPriceForQuantity {
        return new DiscountedLineItemPriceForQuantityModel(
            $this->quantity,
            ($this->discountedPrice instanceof DiscountedLineItemPriceBuilder ? $this->discountedPrice->build() : $this->discountedPrice)
        );
    }
    
    public static function of(): DiscountedLineItemPriceForQuantityBuilder
    {
        return new self();
    }
}