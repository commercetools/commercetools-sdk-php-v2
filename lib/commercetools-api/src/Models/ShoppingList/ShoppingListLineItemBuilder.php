<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Product\ProductVariantBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\ProductType\ProductTypeReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<ShoppingListLineItem>
 */
final class ShoppingListLineItemBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $addedAt;

    /**
     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**
     * @var ?DateTimeImmutable
     */
    private $deactivatedAt;

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
     * @var null|ProductTypeReference|ProductTypeReferenceBuilder
     */
    private $productType;

    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @var null|ProductVariant|ProductVariantBuilder
     */
    private $variant;

    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @return null|DateTimeImmutable
     */
    public function getAddedAt()
    {
        return $this->addedAt;
    }

    /**
     * <p>Serves as value of the <code>custom</code> field on a resource or data type customized with a <a href="ctp:api:type:Type">Type</a>.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getDeactivatedAt()
    {
        return $this->deactivatedAt;
    }

    /**
     * <p>Platform-generated unique identifier of the ShoppingListLineItem.</p>
     *
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
     * <p><a href="/../api/types#reference">Reference</a> to a <a href="ctp:api:type:ProductType">ProductType</a>.</p>
     *
     * @return null|ProductTypeReference
     */
    public function getProductType()
    {
        return $this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return null|ProductVariant
     */
    public function getVariant()
    {
        return $this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @param ?DateTimeImmutable $addedAt
     * @return $this
     */
    public function withAddedAt(?DateTimeImmutable $addedAt)
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
     * @param ?DateTimeImmutable $deactivatedAt
     * @return $this
     */
    public function withDeactivatedAt(?DateTimeImmutable $deactivatedAt)
    {
        $this->deactivatedAt = $deactivatedAt;

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
     * @param ?ProductTypeReference $productType
     * @return $this
     */
    public function withProductType(?ProductTypeReference $productType)
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
     * @param ?ProductVariant $variant
     * @return $this
     */
    public function withVariant(?ProductVariant $variant)
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
    public function withProductTypeBuilder(?ProductTypeReferenceBuilder $productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @deprecated use withVariant() instead
     * @return $this
     */
    public function withVariantBuilder(?ProductVariantBuilder $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    public function build(): ShoppingListLineItem
    {
        return new ShoppingListLineItemModel(
            $this->addedAt,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom,
            $this->deactivatedAt,
            $this->id,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->productId,
            $this->productSlug instanceof LocalizedStringBuilder ? $this->productSlug->build() : $this->productSlug,
            $this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType,
            $this->quantity,
            $this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant,
            $this->variantId
        );
    }

    public static function of(): ShoppingListLineItemBuilder
    {
        return new self();
    }
}
