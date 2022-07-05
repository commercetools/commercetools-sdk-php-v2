<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<LineItem>
 */
final class LineItemBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $addedAt;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var ?string
     */
    private $productId;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $productSlug;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $productType;

    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @var null|Variant|VariantBuilder
     */
    private $variant;

    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @return null|string
     */
    public function getAddedAt()
    {
        return $this->addedAt;
    }

    /**

     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**

     * @return null|string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**

     * @return null|LocalizedString
     */
    public function getProductSlug()
    {
        return $this->productSlug instanceof LocalizedStringBuilder ? $this->productSlug->build() : $this->productSlug;
    }

    /**

     * @return null|Reference
     */
    public function getProductType()
    {
        return $this->productType instanceof ReferenceBuilder ? $this->productType->build() : $this->productType;
    }

    /**

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**

     * @return null|Variant
     */
    public function getVariant()
    {
        return $this->variant instanceof VariantBuilder ? $this->variant->build() : $this->variant;
    }

    /**

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @param ?string $addedAt
     * @return $this
     */
    public function withAddedAt(?string $addedAt)
    {
        $this->addedAt = $addedAt;

        return $this;
    }

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
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
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $productId
     * @return $this
     */
    public function withProductId(?string $productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @param ?LocalizedString $productSlug
     * @return $this
     */
    public function withProductSlug(?LocalizedString $productSlug)
    {
        $this->productSlug = $productSlug;

        return $this;
    }

    /**
     * @param ?Reference $productType
     * @return $this
     */
    public function withProductType(?Reference $productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param ?Variant $variant
     * @return $this
     */
    public function withVariant(?Variant $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @param ?int $variantId
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

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
     * @deprecated use withProductSlug() instead
     * @return $this
     */
    public function withProductSlugBuilder(?LocalizedStringBuilder $productSlug)
    {
        $this->productSlug = $productSlug;

        return $this;
    }

    /**
     * @deprecated use withProductType() instead
     * @return $this
     */
    public function withProductTypeBuilder(?ReferenceBuilder $productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @deprecated use withVariant() instead
     * @return $this
     */
    public function withVariantBuilder(?VariantBuilder $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    public function build(): LineItem
    {
        return new LineItemModel(
            $this->addedAt,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom,
            $this->id,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->productId,
            $this->productSlug instanceof LocalizedStringBuilder ? $this->productSlug->build() : $this->productSlug,
            $this->productType instanceof ReferenceBuilder ? $this->productType->build() : $this->productType,
            $this->quantity,
            $this->variant instanceof VariantBuilder ? $this->variant->build() : $this->variant,
            $this->variantId
        );
    }

    public static function of(): LineItemBuilder
    {
        return new self();
    }
}
