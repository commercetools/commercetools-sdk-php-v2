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
use Commercetools\Api\Models\TaxCategory\SubRateCollection;

/**
 * @implements Builder<ExternalTaxRateDraft>
 */
final class ExternalTaxRateDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $country;
    
    /**
     * @var ?int
     */
    protected $amount;
    
    /**
     * @var ?bool
     */
    protected $includedInPrice;
    
    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $state;
    
    /**
     * @var ?SubRateCollection
     */
    protected $subRates;

    /**
     *
     * @return string|null
     */
    final public function getCountry()
    {
       return $this->country;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getAmount()
    {
       return $this->amount;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIncludedInPrice()
    {
       return $this->includedInPrice;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getState()
    {
       return $this->state;
    }
    
    /**
     *
     * @return SubRateCollection|null
     */
    final public function getSubRates()
    {
       return $this->subRates;
    }
    /**
     * @return $this
     */
    final public function withCountry(?string $country)
    {
        $this->country = $country;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmount(?int $amount)
    {
        $this->amount = $amount;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withIncludedInPrice(?bool $includedInPrice)
    {
        $this->includedInPrice = $includedInPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withName(?string $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withState(?string $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSubRates(?SubRateCollection $subRates)
    {
        $this->subRates = $subRates;
        
        return $this;
    }
    
    public function build(): ExternalTaxRateDraft {
        return new ExternalTaxRateDraftModel(
            $this->country,
            $this->amount,
            $this->includedInPrice,
            $this->name,
            $this->state,
            $this->subRates
        );
    }
    
    public static function of(): ExternalTaxRateDraftBuilder
    {
        return new self();
    }
}