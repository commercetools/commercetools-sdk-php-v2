<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Category\CategoryReferenceCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductData>
 */
final class ProductDataBuilder implements Builder
{
    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

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
    private $description;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $slug;

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
     * @var null|ProductVariant|ProductVariantBuilder
     */
    private $masterVariant;

    /**
     * @var ?ProductVariantCollection
     */
    private $variants;

    /**
     * @var null|SearchKeywords|SearchKeywordsBuilder
     */
    private $searchKeywords;

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
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
     * @return null|SearchKeywords
     */
    public function getSearchKeywords()
    {
        return $this->searchKeywords instanceof SearchKeywordsBuilder ? $this->searchKeywords->build() : $this->searchKeywords;
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
    public function withSearchKeywords(?SearchKeywords $searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;

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
    public function withCategoryOrderHintsBuilder(?CategoryOrderHintsBuilder $categoryOrderHints)
    {
        $this->categoryOrderHints = $categoryOrderHints;

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
    public function withMasterVariantBuilder(?ProductVariantBuilder $masterVariant)
    {
        $this->masterVariant = $masterVariant;

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

    public function build(): ProductData
    {
        return new ProductDataModel(
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->categories,
            $this->categoryOrderHints instanceof CategoryOrderHintsBuilder ? $this->categoryOrderHints->build() : $this->categoryOrderHints,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug,
            $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle,
            $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription,
            $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords,
            $this->masterVariant instanceof ProductVariantBuilder ? $this->masterVariant->build() : $this->masterVariant,
            $this->variants,
            $this->searchKeywords instanceof SearchKeywordsBuilder ? $this->searchKeywords->build() : $this->searchKeywords
        );
    }

    public static function of(): ProductDataBuilder
    {
        return new self();
    }
}
