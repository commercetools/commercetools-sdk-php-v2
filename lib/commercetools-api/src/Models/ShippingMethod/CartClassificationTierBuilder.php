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
 * @implements Builder<CartClassificationTier>
 */
final class CartClassificationTierBuilder implements Builder
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
    protected $price;
    
    /**
     * @var ?bool
     */
    protected $isMatching;
    
    /**
     * @var ?string
     */
    protected $value;

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
    final public function getPrice()
    {
       return ($this->price instanceof MoneyBuilder ? $this->price->build() : $this->price);
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
     *
     * @return string|null
     */
    final public function getValue()
    {
       return $this->value;
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
    final public function withPrice(?Money $price)
    {
        $this->price = $price;
        
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
    final public function withValue(?string $value)
    {
        $this->value = $value;
        
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
    
    public function build(): CartClassificationTier {
        return new CartClassificationTierModel(
            $this->type,
            ($this->price instanceof MoneyBuilder ? $this->price->build() : $this->price),
            $this->isMatching,
            $this->value
        );
    }
    
    public static function of(): CartClassificationTierBuilder
    {
        return new self();
    }
}