<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TaxCategoryReplaceTaxRateAction>
 */
final class TaxCategoryReplaceTaxRateActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?TaxRateDraftBuilder|TaxRateDraft
     */
    protected $taxRate;
    
    /**
     * @var ?string
     */
    protected $taxRateId;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
    }
    
    /**
     *
     * @return TaxRateDraft|null
     */
    final public function getTaxRate()
    {
       return ($this->taxRate instanceof TaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTaxRateId()
    {
       return $this->taxRateId;
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxRate(?TaxRateDraft $taxRate)
    {
        $this->taxRate = $taxRate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxRateId(?string $taxRateId)
    {
        $this->taxRateId = $taxRateId;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withTaxRateBuilder(?TaxRateDraftBuilder $taxRate)
    {
        $this->taxRate = $taxRate;
        
        return $this;
    }
    
    public function build(): TaxCategoryReplaceTaxRateAction {
        return new TaxCategoryReplaceTaxRateActionModel(
            $this->action,
            ($this->taxRate instanceof TaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate),
            $this->taxRateId
        );
    }
    
    public static function of(): TaxCategoryReplaceTaxRateActionBuilder
    {
        return new self();
    }
}