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
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;

/**
 * @implements Builder<TaxedItemPrice>
 */
final class TaxedItemPriceBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?TypedMoneyBuilder|TypedMoney
     */
    protected $totalGross;
    
    /**
     * @var ?TypedMoneyBuilder|TypedMoney
     */
    protected $totalNet;

    /**
     *
     * @return TypedMoney|null
     */
    final public function getTotalGross()
    {
       return ($this->totalGross instanceof TypedMoneyBuilder ? $this->totalGross->build() : $this->totalGross);
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getTotalNet()
    {
       return ($this->totalNet instanceof TypedMoneyBuilder ? $this->totalNet->build() : $this->totalNet);
    }
    /**
     * @return $this
     */
    final public function withTotalGross(?TypedMoney $totalGross)
    {
        $this->totalGross = $totalGross;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTotalNet(?TypedMoney $totalNet)
    {
        $this->totalNet = $totalNet;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withTotalGrossBuilder(?TypedMoneyBuilder $totalGross)
    {
        $this->totalGross = $totalGross;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTotalNetBuilder(?TypedMoneyBuilder $totalNet)
    {
        $this->totalNet = $totalNet;
        
        return $this;
    }
    
    public function build(): TaxedItemPrice {
        return new TaxedItemPriceModel(
            ($this->totalGross instanceof TypedMoneyBuilder ? $this->totalGross->build() : $this->totalGross),
            ($this->totalNet instanceof TypedMoneyBuilder ? $this->totalNet->build() : $this->totalNet)
        );
    }
    
    public static function of(): TaxedItemPriceBuilder
    {
        return new self();
    }
}