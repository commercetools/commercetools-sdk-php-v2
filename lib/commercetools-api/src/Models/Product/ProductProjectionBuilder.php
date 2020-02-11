<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Category\CategoryReferenceCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
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
 * @implements Builder<ProductProjection>
 */
final class ProductProjectionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var null|ProductTypeReference|ProductTypeReferenceBuilder
     */
    private $productType;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $description;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $slug;

    /**
     * @var ?CategoryReferenceCollection
     */
    private $categories;

    /**
     * @var null|CategoryOrderHints|CategoryOrderHintsBuilder
     */
    private $categoryOrderHints;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $metaTitle;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $metaDescription;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $metaKeywords;

    /**
     * @var null|SearchKeywords|SearchKeywordsBuilder
     */
    private $searchKeywords;

    /**
     * @var ?bool
     */
    private $hasStagedChanges;

    /**
     * @var ?bool
     */
    private $published;

    /**
     * @var null|ProductVariant|ProductVariantBuilder
     */
    private $masterVariant;

    /**
     * @var ?ProductVariantCollection
     */
    private $variants;

    /**
     * @var null|TaxCategoryReference|TaxCategoryReferenceBuilder
     */
    private $taxCategory;

    /**
     * @var null|StateReference|StateReferenceBuilder
     */
    private $state;

    /**
     * @var null|ReviewRatingStatistics|ReviewRatingStatisticsBuilder
     */
    private $reviewRatingStatistics;

    /**
     * <p>The unique ID of the Product.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>The current version of the Product.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>User-specific unique identifier of the Product.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|ProductTypeReference
     */
    public function getProductType()
    {
        return $this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        return $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug;
    }

    /**
     * <p>References to categories the product is in.</p>
     *
     * @return null|CategoryReferenceCollection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @return null|CategoryOrderHints
     */
    public function getCategoryOrderHints()
    {
        return $this->categoryOrderHints instanceof CategoryOrderHintsBuilder ? $this->categoryOrderHints->build() : $this->categoryOrderHints;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        return $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaDescription()
    {
        return $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords;
    }

    /**
     * @return null|SearchKeywords
     */
    public function getSearchKeywords()
    {
        return $this->searchKeywords instanceof SearchKeywordsBuilder ? $this->searchKeywords->build() : $this->searchKeywords;
    }

    /**
     * @return null|bool
     */
    public function getHasStagedChanges()
    {
        return $this->hasStagedChanges;
    }

    /**
     * @return null|bool
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @return null|ProductVariant
     */
    public function getMasterVariant()
    {
        return $this->masterVariant instanceof ProductVariantBuilder ? $this->masterVariant->build() : $this->masterVariant;
    }

    /**
     * @return null|ProductVariantCollection
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * @return null|TaxCategoryReference
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * @return null|StateReference
     */
    public function getState()
    {
        return $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p>Statistics about the review ratings taken into account for this product.</p>
     *
     * @return null|ReviewRatingStatistics
     */
    public function getReviewRatingStatistics()
    {
        return $this->reviewRatingStatistics instanceof ReviewRatingStatisticsBuilder ? $this->reviewRatingStatistics->build() : $this->reviewRatingStatistics;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductType(?ProductTypeReference $productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCategories(?CategoryReferenceCollection $categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCategoryOrderHints(?CategoryOrderHints $categoryOrderHints)
    {
        $this->categoryOrderHints = $categoryOrderHints;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaTitle(?LocalizedString $metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaDescription(?LocalizedString $metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaKeywords(?LocalizedString $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSearchKeywords(?SearchKeywords $searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;

        return $this;
    }

    /**
     * @return $this
     */
    public function withHasStagedChanges(?bool $hasStagedChanges)
    {
        $this->hasStagedChanges = $hasStagedChanges;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPublished(?bool $published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMasterVariant(?ProductVariant $masterVariant)
    {
        $this->masterVariant = $masterVariant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariants(?ProductVariantCollection $variants)
    {
        $this->variants = $variants;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @return $this
     */
    public function withState(?StateReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withReviewRatingStatistics(?ReviewRatingStatistics $reviewRatingStatistics)
    {
        $this->reviewRatingStatistics = $reviewRatingStatistics;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductTypeBuilder(?ProductTypeReferenceBuilder $productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCategoryOrderHintsBuilder(?CategoryOrderHintsBuilder $categoryOrderHints)
    {
        $this->categoryOrderHints = $categoryOrderHints;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaTitleBuilder(?LocalizedStringBuilder $metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaDescriptionBuilder(?LocalizedStringBuilder $metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaKeywordsBuilder(?LocalizedStringBuilder $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSearchKeywordsBuilder(?SearchKeywordsBuilder $searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMasterVariantBuilder(?ProductVariantBuilder $masterVariant)
    {
        $this->masterVariant = $masterVariant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryReferenceBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withReviewRatingStatisticsBuilder(?ReviewRatingStatisticsBuilder $reviewRatingStatistics)
    {
        $this->reviewRatingStatistics = $reviewRatingStatistics;

        return $this;
    }

    public function build(): ProductProjection
    {
        return new ProductProjectionModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->key,
            $this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug,
            $this->categories,
            $this->categoryOrderHints instanceof CategoryOrderHintsBuilder ? $this->categoryOrderHints->build() : $this->categoryOrderHints,
            $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle,
            $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription,
            $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords,
            $this->searchKeywords instanceof SearchKeywordsBuilder ? $this->searchKeywords->build() : $this->searchKeywords,
            $this->hasStagedChanges,
            $this->published,
            $this->masterVariant instanceof ProductVariantBuilder ? $this->masterVariant->build() : $this->masterVariant,
            $this->variants,
            $this->taxCategory instanceof TaxCategoryReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory,
            $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state,
            $this->reviewRatingStatistics instanceof ReviewRatingStatisticsBuilder ? $this->reviewRatingStatistics->build() : $this->reviewRatingStatistics
        );
    }

    public static function of(): ProductProjectionBuilder
    {
        return new self();
    }
}
