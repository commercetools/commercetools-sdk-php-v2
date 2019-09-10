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
 * @implements Builder<TaxedPrice>
 */
final class TaxedPriceBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?TaxPortionCollection
     */
    protected $taxPortions;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $totalGross;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $totalNet;

    /**
     *
     * @return TaxPortionCollection|null
     */
    final public function getTaxPortions()
    {
       return $this->taxPortions;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getTotalGross()
    {
       return ($this->totalGross instanceof MoneyBuilder ? $this->totalGross->build() : $this->totalGross);
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getTotalNet()
    {
       return ($this->totalNet instanceof MoneyBuilder ? $this->totalNet->build() : $this->totalNet);
    }
    /**
     * @return $this
     */
    final public function withTaxPortions(?TaxPortionCollection $taxPortions)
    {
        $this->taxPortions = $taxPortions;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTotalGross(?Money $totalGross)
    {
        $this->totalGross = $totalGross;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTotalNet(?Money $totalNet)
    {
        $this->totalNet = $totalNet;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withTotalGrossBuilder(?MoneyBuilder $totalGross)
    {
        $this->totalGross = $totalGross;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTotalNetBuilder(?MoneyBuilder $totalNet)
    {
        $this->totalNet = $totalNet;
        
        return $this;
    }
    
    public function build(): TaxedPrice {
        return new TaxedPriceModel(
            $this->taxPortions,
            ($this->totalGross instanceof MoneyBuilder ? $this->totalGross->build() : $this->totalGross),
            ($this->totalNet instanceof MoneyBuilder ? $this->totalNet->build() : $this->totalNet)
        );
    }
    
    public static function of(): TaxedPriceBuilder
    {
        return new self();
    }
}