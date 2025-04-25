<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Category\CategoryResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifier;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifierBuilder;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductDraft>
 */
final class ProductDraftBuilder implements Builder
{
    /**

     * @var null|ProductTypeResourceIdentifier|ProductTypeResourceIdentifierBuilder
     */
    private $productType;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $slug;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $description;

    /**

     * @var ?CategoryResourceIdentifierCollection
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

     * @var null|ProductVariantDraft|ProductVariantDraftBuilder
     */
    private $masterVariant;

    /**

     * @var ?ProductVariantDraftCollection
     */
    private $variants;

    /**

     * @var null|TaxCategoryResourceIdentifier|TaxCategoryResourceIdentifierBuilder
     */
    private $taxCategory;

    /**

     * @var null|SearchKeywords|SearchKeywordsBuilder
     */
    private $searchKeywords;

    /**

     * @var null|StateResourceIdentifier|StateResourceIdentifierBuilder
     */
    private $state;

    /**

     * @var ?bool
     */
    private $publish;

    /**

     * @var ?string
     */
    private $priceMode;

    /**
     * <p>The Product Type defining the Attributes for the Product. Cannot be changed later.</p>
     *

     * @return null|ProductTypeResourceIdentifier
     */
    public function getProductType()
    {
        return $this->productType instanceof ProductTypeResourceIdentifierBuilder ? $this->productType->build() : $this->productType;
    }

    /**
     * <p>Name of the Product.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>User-defined identifier used in a deep-link URL for the Product.
     * It must be unique across a Project, but a Product can have the same slug in different <a href="ctp:api:type:Locale">Locales</a>.
     * It must match the pattern <code>[a-zA-Z0-9_-]{2,256}</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug()
    {
        return $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug;
    }

    /**
     * <p>User-defined unique identifier for the Product.</p>
     * <p>This field is optional for backwards compatibility reasons, but we strongly recommend setting it. Keys are mandatory for importing Products with the <a href="/../api/import-export/overview">Import API</a> and the <a href="/../merchant-center/import-data">Merchant Center</a>.</p>
     * <p>To update a Product using the Import API or Merchant Center, the Product <code>key</code> must match the pattern <code>^[A-Za-z0-9_-]{2,256}$</code>.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Description of the Product.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>Categories assigned to the Product.</p>
     *

     * @return null|CategoryResourceIdentifierCollection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * <p>Numerical values to allow ordering of Products within a specified Category.</p>
     *

     * @return null|CategoryOrderHints
     */
    public function getCategoryOrderHints()
    {
        return $this->categoryOrderHints instanceof CategoryOrderHintsBuilder ? $this->categoryOrderHints->build() : $this->categoryOrderHints;
    }

    /**
     * <p>Title of the Product as used by search engines.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        return $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle;
    }

    /**
     * <p>Description of the Product as used by search engines.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaDescription()
    {
        return $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription;
    }

    /**
     * <p>Keywords that give additional information about the Product to search engines.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords;
    }

    /**
     * <p>The Product Variant to be the Master Variant for the Product. Required if <code>variants</code> are provided also.</p>
     *

     * @return null|ProductVariantDraft
     */
    public function getMasterVariant()
    {
        return $this->masterVariant instanceof ProductVariantDraftBuilder ? $this->masterVariant->build() : $this->masterVariant;
    }

    /**
     * <p>The additional Product Variants for the Product.</p>
     *

     * @return null|ProductVariantDraftCollection
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * <p>The Tax Category to be assigned to the Product.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * <p>Used by <a href="/projects/products-suggestions">Product Suggestions</a>, but is also considered for a <a href="/projects/product-projection-search#full-text-search">full text search</a>.</p>
     *

     * @return null|SearchKeywords
     */
    public function getSearchKeywords()
    {
        return $this->searchKeywords instanceof SearchKeywordsBuilder ? $this->searchKeywords->build() : $this->searchKeywords;
    }

    /**
     * <p>State to be assigned to the Product.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        return $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p>If <code>true</code>, the Product is published immediately to the current projection.</p>
     *

     * @return null|bool
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * <p>Specifies the type of prices used when looking up a price for the Product.</p>
     *

     * @return null|string
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @param ?ProductTypeResourceIdentifier $productType
     * @return $this
     */
    public function withProductType(?ProductTypeResourceIdentifier $productType)
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
     * @param ?LocalizedString $slug
     * @return $this
     */
    public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;

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
     * @param ?LocalizedString $description
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param ?CategoryResourceIdentifierCollection $categories
     * @return $this
     */
    public function withCategories(?CategoryResourceIdentifierCollection $categories)
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
     * @param ?ProductVariantDraft $masterVariant
     * @return $this
     */
    public function withMasterVariant(?ProductVariantDraft $masterVariant)
    {
        $this->masterVariant = $masterVariant;

        return $this;
    }

    /**
     * @param ?ProductVariantDraftCollection $variants
     * @return $this
     */
    public function withVariants(?ProductVariantDraftCollection $variants)
    {
        $this->variants = $variants;

        return $this;
    }

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryResourceIdentifier $taxCategory)
    {
        $this->taxCategory = $taxCategory;

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
     * @param ?StateResourceIdentifier $state
     * @return $this
     */
    public function withState(?StateResourceIdentifier $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?bool $publish
     * @return $this
     */
    public function withPublish(?bool $publish)
    {
        $this->publish = $publish;

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
    public function withProductTypeBuilder(?ProductTypeResourceIdentifierBuilder $productType)
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
     * @deprecated use withSlug() instead
     * @return $this
     */
    public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;

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
     * @deprecated use withMasterVariant() instead
     * @return $this
     */
    public function withMasterVariantBuilder(?ProductVariantDraftBuilder $masterVariant)
    {
        $this->masterVariant = $masterVariant;

        return $this;
    }

    /**
     * @deprecated use withTaxCategory() instead
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryResourceIdentifierBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

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
     * @deprecated use withState() instead
     * @return $this
     */
    public function withStateBuilder(?StateResourceIdentifierBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    public function build(): ProductDraft
    {
        return new ProductDraftModel(
            $this->productType instanceof ProductTypeResourceIdentifierBuilder ? $this->productType->build() : $this->productType,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug,
            $this->key,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->categories,
            $this->categoryOrderHints instanceof CategoryOrderHintsBuilder ? $this->categoryOrderHints->build() : $this->categoryOrderHints,
            $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle,
            $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription,
            $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords,
            $this->masterVariant instanceof ProductVariantDraftBuilder ? $this->masterVariant->build() : $this->masterVariant,
            $this->variants,
            $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory,
            $this->searchKeywords instanceof SearchKeywordsBuilder ? $this->searchKeywords->build() : $this->searchKeywords,
            $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state,
            $this->publish,
            $this->priceMode
        );
    }

    public static function of(): ProductDraftBuilder
    {
        return new self();
    }
}
