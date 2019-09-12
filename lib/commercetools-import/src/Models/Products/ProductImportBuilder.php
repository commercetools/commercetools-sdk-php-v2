<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Common\ImportReference;
use Commercetools\Import\Models\Common\ImportReferenceBuilder;
use Commercetools\Import\Models\Common\ImportReferenceCollection;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<ProductImport>
 */
final class ProductImportBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $metaKeywords;

    /**
     * @var CategoryOrderHints|?CategoryOrderHintsBuilder
     */
    private $categoryOrderHints;

    /**
     * @var SearchKeywords|?SearchKeywordsBuilder
     */
    private $searchKeywords;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $metaTitle;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $name;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $description;

    /**
     * @var ImportReference|?ImportReferenceBuilder
     */
    private $state;

    /**
     * @var ?ImportReferenceCollection
     */
    private $categories;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $metaDescription;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $slug;

    /**
     * @var ImportReference|?ImportReferenceBuilder
     */
    private $productType;

    /**
     * @var ImportReference|?ImportReferenceBuilder
     */
    private $taxCategory;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords;
    }

    /**
     * @return null|CategoryOrderHints
     */
    public function getCategoryOrderHints()
    {
        return $this->categoryOrderHints instanceof CategoryOrderHintsBuilder ? $this->categoryOrderHints->build() : $this->categoryOrderHints;
    }

    /**
     * @return null|SearchKeywords
     */
    public function getSearchKeywords()
    {
        return $this->searchKeywords instanceof SearchKeywordsBuilder ? $this->searchKeywords->build() : $this->searchKeywords;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        return $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle;
    }

    /**
     * <p>The human readable name of the product.</p>.
     *
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
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getState()
    {
        return $this->state instanceof ImportReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * @return null|ImportReferenceCollection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaDescription()
    {
        return $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription;
    }

    /**
     * <p>Human-readable identifiers usually used as deep-link URL to the related product. Each slug must be unique across a project,
     * but a product can have the same slug for different languages. Allowed are alphabetic, numeric, underscore (_) and hyphen (-) characters.</p>.
     *
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        return $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug;
    }

    /**
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getProductType()
    {
        return $this->productType instanceof ImportReferenceBuilder ? $this->productType->build() : $this->productType;
    }

    /**
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof ImportReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory;
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
    public function withMetaKeywords(?LocalizedString $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

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
    public function withSearchKeywords(?SearchKeywords $searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;

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
    public function withState(?ImportReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCategories(?ImportReferenceCollection $categories)
    {
        $this->categories = $categories;

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
    public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductType(?ImportReference $productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxCategory(?ImportReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

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
    public function withCategoryOrderHintsBuilder(?CategoryOrderHintsBuilder $categoryOrderHints)
    {
        $this->categoryOrderHints = $categoryOrderHints;

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
    public function withMetaTitleBuilder(?LocalizedStringBuilder $metaTitle)
    {
        $this->metaTitle = $metaTitle;

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
    public function withStateBuilder(?ImportReferenceBuilder $state)
    {
        $this->state = $state;

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
    public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductTypeBuilder(?ImportReferenceBuilder $productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxCategoryBuilder(?ImportReferenceBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    public function build(): ProductImport
    {
        return new ProductImportModel(
            $this->key,
            ($this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords),
            ($this->categoryOrderHints instanceof CategoryOrderHintsBuilder ? $this->categoryOrderHints->build() : $this->categoryOrderHints),
            ($this->searchKeywords instanceof SearchKeywordsBuilder ? $this->searchKeywords->build() : $this->searchKeywords),
            ($this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle),
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description),
            ($this->state instanceof ImportReferenceBuilder ? $this->state->build() : $this->state),
            $this->categories,
            ($this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription),
            ($this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug),
            ($this->productType instanceof ImportReferenceBuilder ? $this->productType->build() : $this->productType),
            ($this->taxCategory instanceof ImportReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory)
        );
    }

    public static function of(): ProductImportBuilder
    {
        return new self();
    }
}
