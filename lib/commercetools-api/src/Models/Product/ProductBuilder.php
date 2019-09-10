<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\LoggedResourceBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\ProductType\ProductTypeReferenceBuilder;
use Commercetools\Api\Models\Review\ReviewRatingStatistics;
use Commercetools\Api\Models\Review\ReviewRatingStatisticsBuilder;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<Product>
 */
final class ProductBuilder implements Builder
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
     * @var ?CreatedByBuilder|CreatedBy
     */
    protected $createdBy;
    
    /**
     * @var ?LastModifiedByBuilder|LastModifiedBy
     */
    protected $lastModifiedBy;
    
    /**
     * @var ?ProductCatalogDataBuilder|ProductCatalogData
     */
    protected $masterData;
    
    /**
     * @var ?StateReferenceBuilder|StateReference
     */
    protected $state;
    
    /**
     * @var ?ReviewRatingStatisticsBuilder|ReviewRatingStatistics
     */
    protected $reviewRatingStatistics;
    
    /**
     * @var ?ProductTypeReferenceBuilder|ProductTypeReference
     */
    protected $productType;
    
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
     * @return CreatedBy|null
     */
    final public function getCreatedBy()
    {
       return ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy);
    }
    
    /**
     *
     * @return LastModifiedBy|null
     */
    final public function getLastModifiedBy()
    {
       return ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy);
    }
    
    /**
     *
     * @return ProductCatalogData|null
     */
    final public function getMasterData()
    {
       return ($this->masterData instanceof ProductCatalogDataBuilder ? $this->masterData->build() : $this->masterData);
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getState()
    {
       return ($this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state);
    }
    
    /**
     *
     * @return ReviewRatingStatistics|null
     */
    final public function getReviewRatingStatistics()
    {
       return ($this->reviewRatingStatistics instanceof ReviewRatingStatisticsBuilder ? $this->reviewRatingStatistics->build() : $this->reviewRatingStatistics);
    }
    
    /**
     *
     * @return ProductTypeReference|null
     */
    final public function getProductType()
    {
       return ($this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType);
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
    final public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMasterData(?ProductCatalogData $masterData)
    {
        $this->masterData = $masterData;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withState(?StateReference $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withReviewRatingStatistics(?ReviewRatingStatistics $reviewRatingStatistics)
    {
        $this->reviewRatingStatistics = $reviewRatingStatistics;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProductType(?ProductTypeReference $productType)
    {
        $this->productType = $productType;
        
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
    final public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMasterDataBuilder(?ProductCatalogDataBuilder $masterData)
    {
        $this->masterData = $masterData;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withReviewRatingStatisticsBuilder(?ReviewRatingStatisticsBuilder $reviewRatingStatistics)
    {
        $this->reviewRatingStatistics = $reviewRatingStatistics;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProductTypeBuilder(?ProductTypeReferenceBuilder $productType)
    {
        $this->productType = $productType;
        
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
    
    public function build(): Product {
        return new ProductModel(
            $this->createdAt,
            $this->lastModifiedAt,
            $this->id,
            $this->version,
            ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy),
            ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy),
            ($this->masterData instanceof ProductCatalogDataBuilder ? $this->masterData->build() : $this->masterData),
            ($this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state),
            ($this->reviewRatingStatistics instanceof ReviewRatingStatisticsBuilder ? $this->reviewRatingStatistics->build() : $this->reviewRatingStatistics),
            ($this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType),
            $this->key,
            ($this->taxCategory instanceof TaxCategoryReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory)
        );
    }
    
    public static function of(): ProductBuilder
    {
        return new self();
    }
}