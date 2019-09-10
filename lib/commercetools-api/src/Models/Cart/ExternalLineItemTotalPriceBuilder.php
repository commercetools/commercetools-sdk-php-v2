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
 * @implements Builder<ExternalLineItemTotalPrice>
 */
final class ExternalLineItemTotalPriceBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?MoneyBuilder|Money
     */
    protected $totalPrice;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $price;

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
     * @return Money|null
     */
    final public function getPrice()
    {
       return ($this->price instanceof MoneyBuilder ? $this->price->build() : $this->price);
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
    final public function withPrice(?Money $price)
    {
        $this->price = $price;
        
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
    final public function withPriceBuilder(?MoneyBuilder $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    public function build(): ExternalLineItemTotalPrice {
        return new ExternalLineItemTotalPriceModel(
            ($this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice),
            ($this->price instanceof MoneyBuilder ? $this->price->build() : $this->price)
        );
    }
    
    public static function of(): ExternalLineItemTotalPriceBuilder
    {
        return new self();
    }
}