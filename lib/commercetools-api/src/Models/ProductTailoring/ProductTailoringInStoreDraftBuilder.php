<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Product\ProductResourceIdentifier;
use Commercetools\Api\Models\Product\ProductResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTailoringInStoreDraft>
 */
final class ProductTailoringInStoreDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|ProductResourceIdentifier|ProductResourceIdentifierBuilder
     */
    private $product;

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

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $slug;

    /**

     * @var ?bool
     */
    private $publish;

    /**

     * @var ?ProductVariantTailoringDraftCollection
     */
    private $variants;

    /**

     * @var ?ProductTailoringAttributeCollection
     */
    private $attributes;

    /**
     * <p>User-defined unique identifier of the ProductTailoring.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>ResourceIdentifier of the Product the ProductTailoring belongs to.</p>
     *

     * @return null|ProductResourceIdentifier
     */
    public function getProduct()
    {
        return $this->product instanceof ProductResourceIdentifierBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>Tailored name of the Product.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Tailored description of the Product.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>Tailored title of the Product that is used by search engines.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        return $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle;
    }

    /**
     * <p>Tailored description of the Product that is used in search engine.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaDescription()
    {
        return $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription;
    }

    /**
     * <p>Tailored keywords related to the Product that are used by search engines.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords;
    }

    /**
     * <p>User-defined identifier used in a deep-link URL for the ProductTailoring.
     * Matches the pattern <code>[a-zA-Z0-9_-]{2,256}</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug()
    {
        return $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug;
    }

    /**
     * <p>If <code>true</code>, the ProductTailoring is published immediately.</p>
     *

     * @return null|bool
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * <p>Tailored Variants of the Product.</p>
     *

     * @return null|ProductVariantTailoringDraftCollection
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * <p>Attributes of the tailored Product.
     * If provided, these Attributes are selectively merged into the <code>attributes</code> of the corresponding <a href="ctp:api:type:Product">Product</a>. If the Product contains an Attribute with the same <code>name</code>, then its <code>value</code> is overwritten. Otherwise, the Attribute and its <code>value</code> are added to the Product.</p>
     *

     * @return null|ProductTailoringAttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
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
     * @param ?ProductResourceIdentifier $product
     * @return $this
     */
    public function withProduct(?ProductResourceIdentifier $product)
    {
        $this->product = $product;

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
     * @param ?LocalizedString $slug
     * @return $this
     */
    public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;

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
     * @param ?ProductVariantTailoringDraftCollection $variants
     * @return $this
     */
    public function withVariants(?ProductVariantTailoringDraftCollection $variants)
    {
        $this->variants = $variants;

        return $this;
    }

    /**
     * @param ?ProductTailoringAttributeCollection $attributes
     * @return $this
     */
    public function withAttributes(?ProductTailoringAttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ProductResourceIdentifierBuilder $product)
    {
        $this->product = $product;

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
     * @deprecated use withSlug() instead
     * @return $this
     */
    public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    public function build(): ProductTailoringInStoreDraft
    {
        return new ProductTailoringInStoreDraftModel(
            $this->key,
            $this->product instanceof ProductResourceIdentifierBuilder ? $this->product->build() : $this->product,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle,
            $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription,
            $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords,
            $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug,
            $this->publish,
            $this->variants,
            $this->attributes
        );
    }

    public static function of(): ProductTailoringInStoreDraftBuilder
    {
        return new self();
    }
}
