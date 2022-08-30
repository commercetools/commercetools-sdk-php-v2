<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class ProductProjectionModel extends JsonObjectModel implements ProductProjection
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?ProductTypeReference
     */
    protected $productType;

    /**
     *
     * @var ?LocalizedString
     */
    protected $name;

    /**
     *
     * @var ?LocalizedString
     */
    protected $description;

    /**
     *
     * @var ?LocalizedString
     */
    protected $slug;

    /**
     *
     * @var ?CategoryReferenceCollection
     */
    protected $categories;

    /**
     *
     * @var ?CategoryOrderHints
     */
    protected $categoryOrderHints;

    /**
     *
     * @var ?LocalizedString
     */
    protected $metaTitle;

    /**
     *
     * @var ?LocalizedString
     */
    protected $metaDescription;

    /**
     *
     * @var ?LocalizedString
     */
    protected $metaKeywords;

    /**
     *
     * @var ?SearchKeywords
     */
    protected $searchKeywords;

    /**
     *
     * @var ?bool
     */
    protected $hasStagedChanges;

    /**
     *
     * @var ?bool
     */
    protected $published;

    /**
     *
     * @var ?ProductVariant
     */
    protected $masterVariant;

    /**
     *
     * @var ?ProductVariantCollection
     */
    protected $variants;

    /**
     *
     * @var ?TaxCategoryReference
     */
    protected $taxCategory;

    /**
     *
     * @var ?StateReference
     */
    protected $state;

    /**
     *
     * @var ?ReviewRatingStatistics
     */
    protected $reviewRatingStatistics;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?string $key = null,
        ?ProductTypeReference $productType = null,
        ?LocalizedString $name = null,
        ?LocalizedString $description = null,
        ?LocalizedString $slug = null,
        ?CategoryReferenceCollection $categories = null,
        ?CategoryOrderHints $categoryOrderHints = null,
        ?LocalizedString $metaTitle = null,
        ?LocalizedString $metaDescription = null,
        ?LocalizedString $metaKeywords = null,
        ?SearchKeywords $searchKeywords = null,
        ?bool $hasStagedChanges = null,
        ?bool $published = null,
        ?ProductVariant $masterVariant = null,
        ?ProductVariantCollection $variants = null,
        ?TaxCategoryReference $taxCategory = null,
        ?StateReference $state = null,
        ?ReviewRatingStatistics $reviewRatingStatistics = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->key = $key;
        $this->productType = $productType;
        $this->name = $name;
        $this->description = $description;
        $this->slug = $slug;
        $this->categories = $categories;
        $this->categoryOrderHints = $categoryOrderHints;
        $this->metaTitle = $metaTitle;
        $this->metaDescription = $metaDescription;
        $this->metaKeywords = $metaKeywords;
        $this->searchKeywords = $searchKeywords;
        $this->hasStagedChanges = $hasStagedChanges;
        $this->published = $published;
        $this->masterVariant = $masterVariant;
        $this->variants = $variants;
        $this->taxCategory = $taxCategory;
        $this->state = $state;
        $this->reviewRatingStatistics = $reviewRatingStatistics;
    }

    /**
     * <p>The unique ID of the Product.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>The current version of the Product.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>User-specific unique identifier of the Product.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     *
     * @return null|ProductTypeReference
     */
    public function getProductType()
    {
        if (is_null($this->productType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->productType = ProductTypeReferenceModel::of($data);
        }

        return $this->productType;
    }

    /**
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     *
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     *
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->slug = LocalizedStringModel::of($data);
        }

        return $this->slug;
    }

    /**
     * <p>References to categories the product is in.</p>
     *
     *
     * @return null|CategoryReferenceCollection
     */
    public function getCategories()
    {
        if (is_null($this->categories)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CATEGORIES);
            if (is_null($data)) {
                return null;
            }
            $this->categories = CategoryReferenceCollection::fromArray($data);
        }

        return $this->categories;
    }

    /**
     *
     * @return null|CategoryOrderHints
     */
    public function getCategoryOrderHints()
    {
        if (is_null($this->categoryOrderHints)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CATEGORY_ORDER_HINTS);
            if (is_null($data)) {
                return null;
            }

            $this->categoryOrderHints = CategoryOrderHintsModel::of($data);
        }

        return $this->categoryOrderHints;
    }

    /**
     *
     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        if (is_null($this->metaTitle)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_META_TITLE);
            if (is_null($data)) {
                return null;
            }

            $this->metaTitle = LocalizedStringModel::of($data);
        }

        return $this->metaTitle;
    }

    /**
     *
     * @return null|LocalizedString
     */
    public function getMetaDescription()
    {
        if (is_null($this->metaDescription)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_META_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->metaDescription = LocalizedStringModel::of($data);
        }

        return $this->metaDescription;
    }

    /**
     *
     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        if (is_null($this->metaKeywords)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_META_KEYWORDS);
            if (is_null($data)) {
                return null;
            }

            $this->metaKeywords = LocalizedStringModel::of($data);
        }

        return $this->metaKeywords;
    }

    /**
     *
     * @return null|SearchKeywords
     */
    public function getSearchKeywords()
    {
        if (is_null($this->searchKeywords)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SEARCH_KEYWORDS);
            if (is_null($data)) {
                return null;
            }

            $this->searchKeywords = SearchKeywordsModel::of($data);
        }

        return $this->searchKeywords;
    }

    /**
     *
     * @return null|bool
     */
    public function getHasStagedChanges()
    {
        if (is_null($this->hasStagedChanges)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_HAS_STAGED_CHANGES);
            if (is_null($data)) {
                return null;
            }
            $this->hasStagedChanges = (bool) $data;
        }

        return $this->hasStagedChanges;
    }

    /**
     *
     * @return null|bool
     */
    public function getPublished()
    {
        if (is_null($this->published)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_PUBLISHED);
            if (is_null($data)) {
                return null;
            }
            $this->published = (bool) $data;
        }

        return $this->published;
    }

    /**
     *
     * @return null|ProductVariant
     */
    public function getMasterVariant()
    {
        if (is_null($this->masterVariant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_MASTER_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->masterVariant = ProductVariantModel::of($data);
        }

        return $this->masterVariant;
    }

    /**
     *
     * @return null|ProductVariantCollection
     */
    public function getVariants()
    {
        if (is_null($this->variants)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_VARIANTS);
            if (is_null($data)) {
                return null;
            }
            $this->variants = ProductVariantCollection::fromArray($data);
        }

        return $this->variants;
    }

    /**
     *
     * @return null|TaxCategoryReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryReferenceModel::of($data);
        }

        return $this->taxCategory;
    }

    /**
     *
     * @return null|StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateReferenceModel::of($data);
        }

        return $this->state;
    }

    /**
     * <p>Statistics about the review ratings taken into account for this product.</p>
     *
     *
     * @return null|ReviewRatingStatistics
     */
    public function getReviewRatingStatistics()
    {
        if (is_null($this->reviewRatingStatistics)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_REVIEW_RATING_STATISTICS);
            if (is_null($data)) {
                return null;
            }

            $this->reviewRatingStatistics = ReviewRatingStatisticsModel::of($data);
        }

        return $this->reviewRatingStatistics;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?ProductTypeReference $productType
     */
    public function setProductType(?ProductTypeReference $productType): void
    {
        $this->productType = $productType;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @param ?CategoryReferenceCollection $categories
     */
    public function setCategories(?CategoryReferenceCollection $categories): void
    {
        $this->categories = $categories;
    }

    /**
     * @param ?CategoryOrderHints $categoryOrderHints
     */
    public function setCategoryOrderHints(?CategoryOrderHints $categoryOrderHints): void
    {
        $this->categoryOrderHints = $categoryOrderHints;
    }

    /**
     * @param ?LocalizedString $metaTitle
     */
    public function setMetaTitle(?LocalizedString $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }

    /**
     * @param ?LocalizedString $metaDescription
     */
    public function setMetaDescription(?LocalizedString $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    /**
     * @param ?LocalizedString $metaKeywords
     */
    public function setMetaKeywords(?LocalizedString $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }

    /**
     * @param ?SearchKeywords $searchKeywords
     */
    public function setSearchKeywords(?SearchKeywords $searchKeywords): void
    {
        $this->searchKeywords = $searchKeywords;
    }

    /**
     * @param ?bool $hasStagedChanges
     */
    public function setHasStagedChanges(?bool $hasStagedChanges): void
    {
        $this->hasStagedChanges = $hasStagedChanges;
    }

    /**
     * @param ?bool $published
     */
    public function setPublished(?bool $published): void
    {
        $this->published = $published;
    }

    /**
     * @param ?ProductVariant $masterVariant
     */
    public function setMasterVariant(?ProductVariant $masterVariant): void
    {
        $this->masterVariant = $masterVariant;
    }

    /**
     * @param ?ProductVariantCollection $variants
     */
    public function setVariants(?ProductVariantCollection $variants): void
    {
        $this->variants = $variants;
    }

    /**
     * @param ?TaxCategoryReference $taxCategory
     */
    public function setTaxCategory(?TaxCategoryReference $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?ReviewRatingStatistics $reviewRatingStatistics
     */
    public function setReviewRatingStatistics(?ReviewRatingStatistics $reviewRatingStatistics): void
    {
        $this->reviewRatingStatistics = $reviewRatingStatistics;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[BaseResource::FIELD_CREATED_AT]) && $data[BaseResource::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[BaseResource::FIELD_CREATED_AT] = $data[BaseResource::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[BaseResource::FIELD_LAST_MODIFIED_AT]) && $data[BaseResource::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[BaseResource::FIELD_LAST_MODIFIED_AT] = $data[BaseResource::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
