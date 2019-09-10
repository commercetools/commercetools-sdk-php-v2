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
 * @implements Builder<CartScoreTier>
 */
final class CartScoreTierBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?int
     */
    protected $score;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $price;
    
    /**
     * @var ?bool
     */
    protected $isMatching;
    
    /**
     * @var ?PriceFunctionBuilder|PriceFunction
     */
    protected $priceFunction;

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
     * @return int|null
     */
    final public function getScore()
    {
       return $this->score;
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
     * @return PriceFunction|null
     */
    final public function getPriceFunction()
    {
       return ($this->priceFunction instanceof PriceFunctionBuilder ? $this->priceFunction->build() : $this->priceFunction);
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
    final public function withScore(?int $score)
    {
        $this->score = $score;
        
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
    final public function withPriceFunction(?PriceFunction $priceFunction)
    {
        $this->priceFunction = $priceFunction;
        
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
    final public function withPriceFunctionBuilder(?PriceFunctionBuilder $priceFunction)
    {
        $this->priceFunction = $priceFunction;
        
        return $this;
    }
    
    public function build(): CartScoreTier {
        return new CartScoreTierModel(
            $this->type,
            $this->score,
            ($this->price instanceof MoneyBuilder ? $this->price->build() : $this->price),
            $this->isMatching,
            ($this->priceFunction instanceof PriceFunctionBuilder ? $this->priceFunction->build() : $this->priceFunction)
        );
    }
    
    public static function of(): CartScoreTierBuilder
    {
        return new self();
    }
}