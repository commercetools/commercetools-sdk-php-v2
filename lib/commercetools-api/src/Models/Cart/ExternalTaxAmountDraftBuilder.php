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
 * @implements Builder<ExternalTaxAmountDraft>
 */
final class ExternalTaxAmountDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ExternalTaxRateDraftBuilder|ExternalTaxRateDraft
     */
    protected $taxRate;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $totalGross;

    /**
     *
     * @return ExternalTaxRateDraft|null
     */
    final public function getTaxRate()
    {
       return ($this->taxRate instanceof ExternalTaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate);
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
     * @return $this
     */
    final public function withTaxRate(?ExternalTaxRateDraft $taxRate)
    {
        $this->taxRate = $taxRate;
        
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
    final public function withTaxRateBuilder(?ExternalTaxRateDraftBuilder $taxRate)
    {
        $this->taxRate = $taxRate;
        
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
    
    public function build(): ExternalTaxAmountDraft {
        return new ExternalTaxAmountDraftModel(
            ($this->taxRate instanceof ExternalTaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate),
            ($this->totalGross instanceof MoneyBuilder ? $this->totalGross->build() : $this->totalGross)
        );
    }
    
    public static function of(): ExternalTaxAmountDraftBuilder
    {
        return new self();
    }
}