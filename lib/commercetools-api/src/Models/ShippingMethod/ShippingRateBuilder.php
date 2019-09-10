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
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;

/**
 * @implements Builder<ShippingRate>
 */
final class ShippingRateBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ShippingRatePriceTierCollection
     */
    protected $tiers;
    
    /**
     * @var ?TypedMoneyBuilder|TypedMoney
     */
    protected $price;
    
    /**
     * @var ?TypedMoneyBuilder|TypedMoney
     */
    protected $freeAbove;
    
    /**
     * @var ?bool
     */
    protected $isMatching;

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
     * @return TypedMoney|null
     */
    final public function getPrice()
    {
       return ($this->price instanceof TypedMoneyBuilder ? $this->price->build() : $this->price);
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getFreeAbove()
    {
       return ($this->freeAbove instanceof TypedMoneyBuilder ? $this->freeAbove->build() : $this->freeAbove);
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsMatching()
    {
       return $this->isMatching;
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
    final public function withPrice(?TypedMoney $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFreeAbove(?TypedMoney $freeAbove)
    {
        $this->freeAbove = $freeAbove;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withIsMatching(?bool $isMatching)
    {
        $this->isMatching = $isMatching;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withPriceBuilder(?TypedMoneyBuilder $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFreeAboveBuilder(?TypedMoneyBuilder $freeAbove)
    {
        $this->freeAbove = $freeAbove;
        
        return $this;
    }
    
    public function build(): ShippingRate {
        return new ShippingRateModel(
            $this->tiers,
            ($this->price instanceof TypedMoneyBuilder ? $this->price->build() : $this->price),
            ($this->freeAbove instanceof TypedMoneyBuilder ? $this->freeAbove->build() : $this->freeAbove),
            $this->isMatching
        );
    }
    
    public static function of(): ShippingRateBuilder
    {
        return new self();
    }
}