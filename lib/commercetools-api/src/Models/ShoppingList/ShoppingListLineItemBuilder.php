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

     * @var null|ProductTypeReference|ProductTypeReferenceBuilder
     */
    private $productType;

    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @var null|ProductVariant|ProductVariantBuilder
     */
    private $variant;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $productSlug;

    /**
     * <p>Date and time (UTC) the ShoppingListLineItem was added to the ShoppingList.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getAddedAt()
    {
        return $this->addedAt;
    }

    /**
     * <p>Custom Fields of the ShoppingListLineItem.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>If the Product or Product Variant is deleted, <code>deactivatedAt</code> is the date and time (UTC) of deletion.</p>
     * <p>This data is updated in an <a href="/general-concepts#eventual-consistency">eventual consistent manner</a> when the Product Variant cannot be ordered anymore.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getDeactivatedAt()
    {
        return $this->deactivatedAt;
    }

    /**
     * <p>Unique identifier of the ShoppingListLineItem.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Name of the Product.</p>
     * <p>This data is updated in an <a href="/general-concepts#eventual-consistency">eventual consistent manner</a> when the Product's name changes.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Unique identifier of a <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * <p>The Product Type defining the Attributes of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|ProductTypeReference
     */
    public function getProductType()
    {
        return $this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType;
    }

    /**
     * <p>Number of Products in the ShoppingListLineItem.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> the ShoppingListLineItem refers to. If not set, the ShoppingListLineItem refers to the Master Variant.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>Data of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.
     * Returned when expanded using <code>expand=lineItems[*].variant</code>.</p>
     * <p><em>Limitation: <code>expand=lineItems[0].variant</code> is not supported.</em></p>
     *

     * @return null|ProductVariant
     */
    public function getVariant()
    {
        return $this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant;
    }

    /**
     * <p>Slug of the current <a href="ctp:api:type:ProductData">ProductData</a>.
     * Only returned when expanded using <code>expand=lineItems[*].productSlug</code>.</p>
     * <p><em>Limitation: <code>expand=lineItems[0].productSlug</code> is not supported.</em></p>
     *

     * @return null|LocalizedString
     */
    public function getProductSlug()
    {
        return $this->productSlug instanceof LocalizedStringBuilder ? $this->productSlug->build() : $this->productSlug;
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
     * @param ?int $variantId
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

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
     * @param ?LocalizedString $productSlug
     * @return $this
     */
    public function withProductSlug(?LocalizedString $productSlug)
    {
        $this->productSlug = $productSlug;

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

    /**
     * @deprecated use withProductSlug() instead
     * @return $this
     */
    public function withProductSlugBuilder(?LocalizedStringBuilder $productSlug)
    {
        $this->productSlug = $productSlug;

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
            $this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType,
            $this->quantity,
            $this->variantId,
            $this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant,
            $this->productSlug instanceof LocalizedStringBuilder ? $this->productSlug->build() : $this->productSlug
        );
    }

    public static function of(): ShoppingListLineItemBuilder
    {
        return new self();
    }
}
