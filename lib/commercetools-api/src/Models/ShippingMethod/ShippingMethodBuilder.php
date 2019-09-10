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
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<ShippingMethod>
 */
final class ShippingMethodBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?int
     */
    protected $version;
    
    /**
     * @var ?ZoneRateCollection
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
     * @var ?TaxCategoryReferenceBuilder|TaxCategoryReference
     */
    protected $taxCategory;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       return $this->createdAt;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getLastModifiedAt()
    {
       return $this->lastModifiedAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       return $this->version;
    }
    
    /**
     *
     * @return ZoneRateCollection|null
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
     * @return TaxCategoryReference|null
     */
    final public function getTaxCategory()
    {
       return ($this->taxCategory instanceof TaxCategoryReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory);
    }
    /**
     * @return $this
     */
    final public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVersion(?int $version)
    {
        $this->version = $version;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withZoneRates(?ZoneRateCollection $zoneRates)
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
    final public function withTaxCategory(?TaxCategoryReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withTaxCategoryBuilder(?TaxCategoryReferenceBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        
        return $this;
    }
    
    public function build(): ShippingMethod {
        return new ShippingMethodModel(
            $this->createdAt,
            $this->lastModifiedAt,
            $this->id,
            $this->version,
            $this->zoneRates,
            $this->predicate,
            $this->isDefault,
            $this->name,
            $this->description,
            $this->key,
            ($this->taxCategory instanceof TaxCategoryReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory)
        );
    }
    
    public static function of(): ShippingMethodBuilder
    {
        return new self();
    }
}