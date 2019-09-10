<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;

/**
 * @implements Builder<ShippingRateDraft>
 */
final class ShippingRateDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ShippingRatePriceTierCollection
     */
    protected $tiers;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $price;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $freeAbove;

    /**
     *
     * @return ShippingRatePriceTierCollection|null
     */
    final public function getTiers()
    {
       return $this->tiers;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getPrice()
    {
       return ($this->price instanceof MoneyBuilder ? $this->price->build() : $this->price);
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getFreeAbove()
    {
       return ($this->freeAbove instanceof MoneyBuilder ? $this->freeAbove->build() : $this->freeAbove);
    }
    /**
     * @return $this
     */
    final public function withTiers(?ShippingRatePriceTierCollection $tiers)
    {
        $this->tiers = $tiers;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPrice(?Money $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFreeAbove(?Money $freeAbove)
    {
        $this->freeAbove = $freeAbove;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withPriceBuilder(?MoneyBuilder $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFreeAboveBuilder(?MoneyBuilder $freeAbove)
    {
        $this->freeAbove = $freeAbove;
        
        return $this;
    }
    
    public function build(): ShippingRateDraft {
        return new ShippingRateDraftModel(
            $this->tiers,
            ($this->price instanceof MoneyBuilder ? $this->price->build() : $this->price),
            ($this->freeAbove instanceof MoneyBuilder ? $this->freeAbove->build() : $this->freeAbove)
        );
    }
    
    public static function of(): ShippingRateDraftBuilder
    {
        return new self();
    }
}