<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\LoggedResourceModel;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\ProductType\ProductTypeReferenceModel;
use Commercetools\Api\Models\Review\ReviewRatingStatistics;
use Commercetools\Api\Models\Review\ReviewRatingStatisticsModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class ProductModel extends JsonObjectModel implements Product
{
    
    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
        CreatedBy $createdBy = null,
        LastModifiedBy $lastModifiedBy = null,
        ProductCatalogData $masterData = null,
        StateReference $state = null,
        ReviewRatingStatistics $reviewRatingStatistics = null,
        ProductTypeReference $productType = null,
        string $key = null,
        TaxCategoryReference $taxCategory = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->id = $id;
        $this->version = $version;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->masterData = $masterData;
        $this->state = $state;
        $this->reviewRatingStatistics = $reviewRatingStatistics;
        $this->productType = $productType;
        $this->key = $key;
        $this->taxCategory = $taxCategory;
        
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
     * @var ?CreatedBy
     */
    protected $createdBy;
    
    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;
    
    /**
     * @var ?ProductCatalogData
     */
    protected $masterData;
    
    /**
     * @var ?StateReference
     */
    protected $state;
    
    /**
     * @var ?ReviewRatingStatistics
     */
    protected $reviewRatingStatistics;
    
    /**
     * @var ?ProductTypeReference
     */
    protected $productType;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?TaxCategoryReference
     */
    protected $taxCategory;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       if (is_null($this->createdAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(BaseResource::FIELD_CREATED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->createdAt = $data;
       }
       return $this->createdAt;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getLastModifiedAt()
    {
       if (is_null($this->lastModifiedAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(BaseResource::FIELD_LAST_MODIFIED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->lastModifiedAt = $data;
       }
       return $this->lastModifiedAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(BaseResource::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       if (is_null($this->version)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(BaseResource::FIELD_VERSION);
           if (is_null($data)) {
               return null;
           }
           $this->version = (int)$data;
       }
       return $this->version;
    }
    
    /**
     *
     * @return CreatedBy|null
     */
    final public function getCreatedBy()
    {
       if (is_null($this->createdBy)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LoggedResource::FIELD_CREATED_BY);
           if (is_null($data)) {
               return null;
           }
           
           $this->createdBy = CreatedByModel::of($data);
       }
       return $this->createdBy;
    }
    
    /**
     *
     * @return LastModifiedBy|null
     */
    final public function getLastModifiedBy()
    {
       if (is_null($this->lastModifiedBy)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LoggedResource::FIELD_LAST_MODIFIED_BY);
           if (is_null($data)) {
               return null;
           }
           
           $this->lastModifiedBy = LastModifiedByModel::of($data);
       }
       return $this->lastModifiedBy;
    }
    
    /**
     *
     * @return ProductCatalogData|null
     */
    final public function getMasterData()
    {
       if (is_null($this->masterData)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Product::FIELD_MASTER_DATA);
           if (is_null($data)) {
               return null;
           }
           
           $this->masterData = ProductCatalogDataModel::of($data);
       }
       return $this->masterData;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Product::FIELD_STATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->state = StateReferenceModel::of($data);
       }
       return $this->state;
    }
    
    /**
     *
     * @return ReviewRatingStatistics|null
     */
    final public function getReviewRatingStatistics()
    {
       if (is_null($this->reviewRatingStatistics)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Product::FIELD_REVIEW_RATING_STATISTICS);
           if (is_null($data)) {
               return null;
           }
           
           $this->reviewRatingStatistics = ReviewRatingStatisticsModel::of($data);
       }
       return $this->reviewRatingStatistics;
    }
    
    /**
     *
     * @return ProductTypeReference|null
     */
    final public function getProductType()
    {
       if (is_null($this->productType)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Product::FIELD_PRODUCT_TYPE);
           if (is_null($data)) {
               return null;
           }
           
           $this->productType = ProductTypeReferenceModel::of($data);
       }
       return $this->productType;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Product::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    
    /**
     *
     * @return TaxCategoryReference|null
     */
    final public function getTaxCategory()
    {
       if (is_null($this->taxCategory)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Product::FIELD_TAX_CATEGORY);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxCategory = TaxCategoryReferenceModel::of($data);
       }
       return $this->taxCategory;
    }
    final public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    
    final public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
    
    final public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }
    
    final public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }
    
    final public function setMasterData(?ProductCatalogData $masterData): void
    {
        $this->masterData = $masterData;
    }
    
    final public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }
    
    final public function setReviewRatingStatistics(?ReviewRatingStatistics $reviewRatingStatistics): void
    {
        $this->reviewRatingStatistics = $reviewRatingStatistics;
    }
    
    final public function setProductType(?ProductTypeReference $productType): void
    {
        $this->productType = $productType;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
    final public function setTaxCategory(?TaxCategoryReference $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[BaseResource::FIELD_CREATED_AT]) && $data[BaseResource::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
           $data[BaseResource::FIELD_CREATED_AT] = $data[BaseResource::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[BaseResource::FIELD_LAST_MODIFIED_AT]) && $data[BaseResource::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
           $data[BaseResource::FIELD_LAST_MODIFIED_AT] = $data[BaseResource::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}