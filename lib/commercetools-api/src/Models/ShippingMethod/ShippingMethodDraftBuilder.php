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
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;

/**
 * @implements Builder<ShippingMethodDraft>
 */
final class ShippingMethodDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ZoneRateDraftCollection
     */
    protected $zoneRates;
    
    /**
     * @var ?string
     */
    protected $predicate;
    
    /**
     * @var ?bool
     */
    protected $isDefault;
    
    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $description;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?TaxCategoryResourceIdentifierBuilder|TaxCategoryResourceIdentifier
     */
    protected $taxCategory;

    /**
     *
     * @return ZoneRateDraftCollection|null
     */
    final public function getZoneRates()
    {
       return $this->zoneRates;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPredicate()
    {
       return $this->predicate;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsDefault()
    {
       return $this->isDefault;
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
    final public function getDescription()
    {
       return $this->description;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
    }
    
    /**
     *
     * @return TaxCategoryResourceIdentifier|null
     */
    final public function getTaxCategory()
    {
       return ($this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory);
    }
    /**
     * @return $this
     */
    final public function withZoneRates(?ZoneRateDraftCollection $zoneRates)
    {
        $this->zoneRates = $zoneRates;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withIsDefault(?bool $isDefault)
    {
        $this->isDefault = $isDefault;
        
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
    final public function withDescription(?string $description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxCategory(?TaxCategoryResourceIdentifier $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withTaxCategoryBuilder(?TaxCategoryResourceIdentifierBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        
        return $this;
    }
    
    public function build(): ShippingMethodDraft {
        return new ShippingMethodDraftModel(
            $this->zoneRates,
            $this->predicate,
            $this->isDefault,
            $this->name,
            $this->description,
            $this->key,
            ($this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory)
        );
    }
    
    public static function of(): ShippingMethodDraftBuilder
    {
        return new self();
    }
}