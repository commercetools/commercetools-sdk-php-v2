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

use Commercetools\Api\Models\Category\CategoryReferenceCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
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

final class ProductProjectionModel extends JsonObjectModel implements ProductProjection
{
    
    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
        SearchKeywords $searchKeywords = null,
        LocalizedString $description = null,
        ProductVariantCollection $variants = null,
        bool $published = null,
        bool $hasStagedChanges = null,
        LocalizedString $metaDescription = null,
        TaxCategoryReference $taxCategory = null,
        LocalizedString $metaKeywords = null,
        CategoryOrderHints $categoryOrderHints = null,
        LocalizedString $metaTitle = null,
        LocalizedString $name = null,
        StateReference $state = null,
        ProductVariant $masterVariant = null,
        CategoryReferenceCollection $categories = null,
        ReviewRatingStatistics $reviewRatingStatistics = null,
        LocalizedString $slug = null,
        ProductTypeReference $productType = null,
        string $key = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->id = $id;
        $this->version = $version;
        $this->searchKeywords = $searchKeywords;
        $this->description = $description;
        $this->variants = $variants;
        $this->published = $published;
        $this->hasStagedChanges = $hasStagedChanges;
        $this->metaDescription = $metaDescription;
        $this->taxCategory = $taxCategory;
        $this->metaKeywords = $metaKeywords;
        $this->categoryOrderHints = $categoryOrderHints;
        $this->metaTitle = $metaTitle;
        $this->name = $name;
        $this->state = $state;
        $this->masterVariant = $masterVariant;
        $this->categories = $categories;
        $this->reviewRatingStatistics = $reviewRatingStatistics;
        $this->slug = $slug;
        $this->productType = $productType;
        $this->key = $key;
        
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
     * @var ?SearchKeywords
     */
    protected $searchKeywords;
    
    /**
     * @var ?LocalizedString
     */
    protected $description;
    
    /**
     * @var ?ProductVariantCollection
     */
    protected $variants;
    
    /**
     * @var ?bool
     */
    protected $published;
    
    /**
     * @var ?bool
     */
    protected $hasStagedChanges;
    
    /**
     * @var ?LocalizedString
     */
    protected $metaDescription;
    
    /**
     * @var ?TaxCategoryReference
     */
    protected $taxCategory;
    
    /**
     * @var ?LocalizedString
     */
    protected $metaKeywords;
    
    /**
     * @var ?CategoryOrderHints
     */
    protected $categoryOrderHints;
    
    /**
     * @var ?LocalizedString
     */
    protected $metaTitle;
    
    /**
     * @var ?LocalizedString
     */
    protected $name;
    
    /**
     * @var ?StateReference
     */
    protected $state;
    
    /**
     * @var ?ProductVariant
     */
    protected $masterVariant;
    
    /**
     * @var ?CategoryReferenceCollection
     */
    protected $categories;
    
    /**
     * @var ?ReviewRatingStatistics
     */
    protected $reviewRatingStatistics;
    
    /**
     * @var ?LocalizedString
     */
    protected $slug;
    
    /**
     * @var ?ProductTypeReference
     */
    protected $productType;
    
    /**
     * @var ?string
     */
    protected $key;

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
     * @return SearchKeywords|null
     */
    final public function getSearchKeywords()
    {
       if (is_null($this->searchKeywords)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductProjection::FIELD_SEARCH_KEYWORDS);
           if (is_null($data)) {
               return null;
           }
           
           $this->searchKeywords = SearchKeywordsModel::of($data);
       }
       return $this->searchKeywords;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getDescription()
    {
       if (is_null($this->description)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductProjection::FIELD_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->description = LocalizedStringModel::of($data);
       }
       return $this->description;
    }
    
    /**
     *
     * @return ProductVariantCollection|null
     */
    final public function getVariants()
    {
       if (is_null($this->variants)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductProjection::FIELD_VARIANTS);
           if (is_null($data)) {
               return null;
           }
           $this->variants = ProductVariantCollection::fromArray($data);
       }
       return $this->variants;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getPublished()
    {
       if (is_null($this->published)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductProjection::FIELD_PUBLISHED);
           if (is_null($data)) {
               return null;
           }
           $this->published = (bool)$data;
       }
       return $this->published;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getHasStagedChanges()
    {
       if (is_null($this->hasStagedChanges)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductProjection::FIELD_HAS_STAGED_CHANGES);
           if (is_null($data)) {
               return null;
           }
           $this->hasStagedChanges = (bool)$data;
       }
       return $this->hasStagedChanges;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getMetaDescription()
    {
       if (is_null($this->metaDescription)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductProjection::FIELD_META_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->metaDescription = LocalizedStringModel::of($data);
       }
       return $this->metaDescription;
    }
    
    /**
     *
     * @return TaxCategoryReference|null
     */
    final public function getTaxCategory()
    {
       if (is_null($this->taxCategory)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductProjection::FIELD_TAX_CATEGORY);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxCategory = TaxCategoryReferenceModel::of($data);
       }
       return $this->taxCategory;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getMetaKeywords()
    {
       if (is_null($this->metaKeywords)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductProjection::FIELD_META_KEYWORDS);
           if (is_null($data)) {
               return null;
           }
           
           $this->metaKeywords = LocalizedStringModel::of($data);
       }
       return $this->metaKeywords;
    }
    
    /**
     *
     * @return CategoryOrderHints|null
     */
    final public function getCategoryOrderHints()
    {
       if (is_null($this->categoryOrderHints)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductProjection::FIELD_CATEGORY_ORDER_HINTS);
           if (is_null($data)) {
               return null;
           }
           
           $this->categoryOrderHints = CategoryOrderHintsModel::of($data);
       }
       return $this->categoryOrderHints;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getMetaTitle()
    {
       if (is_null($this->metaTitle)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductProjection::FIELD_META_TITLE);
           if (is_null($data)) {
               return null;
           }
           
           $this->metaTitle = LocalizedStringModel::of($data);
       }
       return $this->metaTitle;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductProjection::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           
           $this->name = LocalizedStringModel::of($data);
       }
       return $this->name;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductProjection::FIELD_STATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->state = StateReferenceModel::of($data);
       }
       return $this->state;
    }
    
    /**
     *
     * @return ProductVariant|null
     */
    final public function getMasterVariant()
    {
       if (is_null($this->masterVariant)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductProjection::FIELD_MASTER_VARIANT);
           if (is_null($data)) {
               return null;
           }
           
           $this->masterVariant = ProductVariantModel::of($data);
       }
       return $this->masterVariant;
    }
    
    /**
     *
     * @return CategoryReferenceCollection|null
     */
    final public function getCategories()
    {
       if (is_null($this->categories)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductProjection::FIELD_CATEGORIES);
           if (is_null($data)) {
               return null;
           }
           $this->categories = CategoryReferenceCollection::fromArray($data);
       }
       return $this->categories;
    }
    
    /**
     *
     * @return ReviewRatingStatistics|null
     */
    final public function getReviewRatingStatistics()
    {
       if (is_null($this->reviewRatingStatistics)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductProjection::FIELD_REVIEW_RATING_STATISTICS);
           if (is_null($data)) {
               return null;
           }
           
           $this->reviewRatingStatistics = ReviewRatingStatisticsModel::of($data);
       }
       return $this->reviewRatingStatistics;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getSlug()
    {
       if (is_null($this->slug)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductProjection::FIELD_SLUG);
           if (is_null($data)) {
               return null;
           }
           
           $this->slug = LocalizedStringModel::of($data);
       }
       return $this->slug;
    }
    
    /**
     *
     * @return ProductTypeReference|null
     */
    final public function getProductType()
    {
       if (is_null($this->productType)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductProjection::FIELD_PRODUCT_TYPE);
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
           $data = $this->raw(ProductProjection::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
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
    
    final public function setSearchKeywords(?SearchKeywords $searchKeywords): void
    {
        $this->searchKeywords = $searchKeywords;
    }
    
    final public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }
    
    final public function setVariants(?ProductVariantCollection $variants): void
    {
        $this->variants = $variants;
    }
    
    final public function setPublished(?bool $published): void
    {
        $this->published = $published;
    }
    
    final public function setHasStagedChanges(?bool $hasStagedChanges): void
    {
        $this->hasStagedChanges = $hasStagedChanges;
    }
    
    final public function setMetaDescription(?LocalizedString $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }
    
    final public function setTaxCategory(?TaxCategoryReference $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }
    
    final public function setMetaKeywords(?LocalizedString $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }
    
    final public function setCategoryOrderHints(?CategoryOrderHints $categoryOrderHints): void
    {
        $this->categoryOrderHints = $categoryOrderHints;
    }
    
    final public function setMetaTitle(?LocalizedString $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }
    
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }
    
    final public function setMasterVariant(?ProductVariant $masterVariant): void
    {
        $this->masterVariant = $masterVariant;
    }
    
    final public function setCategories(?CategoryReferenceCollection $categories): void
    {
        $this->categories = $categories;
    }
    
    final public function setReviewRatingStatistics(?ReviewRatingStatistics $reviewRatingStatistics): void
    {
        $this->reviewRatingStatistics = $reviewRatingStatistics;
    }
    
    final public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }
    
    final public function setProductType(?ProductTypeReference $productType): void
    {
        $this->productType = $productType;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
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