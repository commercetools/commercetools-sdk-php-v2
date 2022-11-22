<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

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
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

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

     * @var ?string
     */
    private $priceMode;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the ProductProjection was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the ProductProjection was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>User-defined unique identifier of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The <a href="ctp:api:type:ProductType">ProductType</a> defining the Attributes of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|ProductTypeReference
     */
    public function getProductType()
    {
        return $this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType;
    }

    /**
     * <p>Name of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Description of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>User-defined identifier used in a deep-link URL for the <a href="ctp:api:type:Product">Product</a>.
     * Must be unique across a Project, but can be the same for Products in different locales.
     * Matches the pattern <code>[a-zA-Z0-9_-]{2,256}</code>.
     * For <a href="/../api/predicates/query#performance-considerations">good performance</a>, indexes are provided for the first 15 <code>languages</code> set in the <a href="ctp:api:type:Project">Project</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug()
    {
        return $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug;
    }

    /**
     * <p><a href="ctp:api:type:Category">Categories</a> assigned to the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|CategoryReferenceCollection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * <p>Order of <a href="ctp:api:type:Product">Product</a> in <a href="ctp:api:type:Category">Categories</a>.</p>
     *

     * @return null|CategoryOrderHints
     */
    public function getCategoryOrderHints()
    {
        return $this->categoryOrderHints instanceof CategoryOrderHintsBuilder ? $this->categoryOrderHints->build() : $this->categoryOrderHints;
    }

    /**
     * <p>Title of the <a href="ctp:api:type:Product">Product</a> displayed in search results.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        return $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle;
    }

    /**
     * <p>Description of the <a href="ctp:api:type:Product">Product</a> displayed in search results below the meta title.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaDescription()
    {
        return $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription;
    }

    /**
     * <p>Keywords that give additional information about the <a href="ctp:api:type:Product">Product</a> to search engines.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords;
    }

    /**
     * <p>Used by <a href="/../api/projects/products-suggestions">Product Suggestions</a>, but is also considered for a <a href="ctp:api:type:FullTextSearch">full text search</a>.</p>
     *

     * @return null|SearchKeywords
     */
    public function getSearchKeywords()
    {
        return $this->searchKeywords instanceof SearchKeywordsBuilder ? $this->searchKeywords->build() : $this->searchKeywords;
    }

    /**
     * <p><code>true</code> if the staged data is different from the current data.</p>
     *

     * @return null|bool
     */
    public function getHasStagedChanges()
    {
        return $this->hasStagedChanges;
    }

    /**
     * <p><code>true</code> if the <a href="ctp:api:type:Product">Product</a> is <a href="ctp:api:type:CurrentStaged">published</a>.</p>
     *

     * @return null|bool
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * <p>The Master Variant of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|ProductVariant
     */
    public function getMasterVariant()
    {
        return $this->masterVariant instanceof ProductVariantBuilder ? $this->masterVariant->build() : $this->masterVariant;
    }

    /**
     * <p>Additional Product Variants.</p>
     *

     * @return null|ProductVariantCollection
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * <p>The <a href="ctp:api:type:TaxCategory">TaxCategory</a> of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|TaxCategoryReference
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|StateReference
     */
    public function getState()
    {
        return $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p>Review statistics of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|ReviewRatingStatistics
     */
    public function getReviewRatingStatistics()
    {
        return $this->reviewRatingStatistics instanceof ReviewRatingStatisticsBuilder ? $this->reviewRatingStatistics->build() : $this->reviewRatingStatistics;
    }

    /**
     * <p>Indicates whether the Prices of the Product Projection are <a href="ctp:api:type:Price">embedded</a> or <a href="ctp:api:type:StandalonePrice">standalone</a>. <a href="#prices">Projecting Prices</a> only works with <code>Embedded</code>, there is currently no support for <code>Standalone</code>.</p>
     *

     * @return null|string
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?ProductTypeReference $productType
     * @return $this
     */
    public function withProductType(?ProductTypeReference $productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?LocalizedString $description
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param ?LocalizedString $slug
     * @return $this
     */
    public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @param ?CategoryReferenceCollection $categories
     * @return $this
     */
    public function withCategories(?CategoryReferenceCollection $categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * @param ?CategoryOrderHints $categoryOrderHints
     * @return $this
     */
    public function withCategoryOrderHints(?CategoryOrderHints $categoryOrderHints)
    {
        $this->categoryOrderHints = $categoryOrderHints;

        return $this;
    }

    /**
     * @param ?LocalizedString $metaTitle
     * @return $this
     */
    public function withMetaTitle(?LocalizedString $metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * @param ?LocalizedString $metaDescription
     * @return $this
     */
    public function withMetaDescription(?LocalizedString $metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * @param ?LocalizedString $metaKeywords
     * @return $this
     */
    public function withMetaKeywords(?LocalizedString $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * @param ?SearchKeywords $searchKeywords
     * @return $this
     */
    public function withSearchKeywords(?SearchKeywords $searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;

        return $this;
    }

    /**
     * @param ?bool $hasStagedChanges
     * @return $this
     */
    public function withHasStagedChanges(?bool $hasStagedChanges)
    {
        $this->hasStagedChanges = $hasStagedChanges;

        return $this;
    }

    /**
     * @param ?bool $published
     * @return $this
     */
    public function withPublished(?bool $published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * @param ?ProductVariant $masterVariant
     * @return $this
     */
    public function withMasterVariant(?ProductVariant $masterVariant)
    {
        $this->masterVariant = $masterVariant;

        return $this;
    }

    /**
     * @param ?ProductVariantCollection $variants
     * @return $this
     */
    public function withVariants(?ProductVariantCollection $variants)
    {
        $this->variants = $variants;

        return $this;
    }

    /**
     * @param ?TaxCategoryReference $taxCategory
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @param ?StateReference $state
     * @return $this
     */
    public function withState(?StateReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?ReviewRatingStatistics $reviewRatingStatistics
     * @return $this
     */
    public function withReviewRatingStatistics(?ReviewRatingStatistics $reviewRatingStatistics)
    {
        $this->reviewRatingStatistics = $reviewRatingStatistics;

        return $this;
    }

    /**
     * @param ?string $priceMode
     * @return $this
     */
    public function withPriceMode(?string $priceMode)
    {
        $this->priceMode = $priceMode;

        return $this;
    }

    /**
     * @deprecated use withProductType() instead
     * @return $this
     */
    public function withProductTypeBuilder(?ProductTypeReferenceBuilder $productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withDescription() instead
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @deprecated use withSlug() instead
     * @return $this
     */
    public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @deprecated use withCategoryOrderHints() instead
     * @return $this
     */
    public function withCategoryOrderHintsBuilder(?CategoryOrderHintsBuilder $categoryOrderHints)
    {
        $this->categoryOrderHints = $categoryOrderHints;

        return $this;
    }

    /**
     * @deprecated use withMetaTitle() instead
     * @return $this
     */
    public function withMetaTitleBuilder(?LocalizedStringBuilder $metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * @deprecated use withMetaDescription() instead
     * @return $this
     */
    public function withMetaDescriptionBuilder(?LocalizedStringBuilder $metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * @deprecated use withMetaKeywords() instead
     * @return $this
     */
    public function withMetaKeywordsBuilder(?LocalizedStringBuilder $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * @deprecated use withSearchKeywords() instead
     * @return $this
     */
    public function withSearchKeywordsBuilder(?SearchKeywordsBuilder $searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;

        return $this;
    }

    /**
     * @deprecated use withMasterVariant() instead
     * @return $this
     */
    public function withMasterVariantBuilder(?ProductVariantBuilder $masterVariant)
    {
        $this->masterVariant = $masterVariant;

        return $this;
    }

    /**
     * @deprecated use withTaxCategory() instead
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryReferenceBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @deprecated use withState() instead
     * @return $this
     */
    public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @deprecated use withReviewRatingStatistics() instead
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
            $this->reviewRatingStatistics instanceof ReviewRatingStatisticsBuilder ? $this->reviewRatingStatistics->build() : $this->reviewRatingStatistics,
            $this->priceMode
        );
    }

    public static function of(): ProductProjectionBuilder
    {
        return new self();
    }
}
