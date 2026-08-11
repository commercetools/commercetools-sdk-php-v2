<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\VariantAttributes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class VariantAttributesModel extends JsonObjectModel implements VariantAttributes
{
    /**
     *
     * @var ?string
     */
    protected $productId;

    /**
     *
     * @var ?string
     */
    protected $productKey;

    /**
     *
     * @var ?VariantAttributesAttributeMetadataCollection
     */
    protected $attributes;

    /**
     *
     * @var ?VariantAttributesVariantCollection
     */
    protected $variants;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $productId = null,
        ?string $productKey = null,
        ?VariantAttributesAttributeMetadataCollection $attributes = null,
        ?VariantAttributesVariantCollection $variants = null
    ) {
        $this->productId = $productId;
        $this->productKey = $productKey;
        $this->attributes = $attributes;
        $this->variants = $variants;
    }

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Product">Product</a>.</p>
     *
     *
     * @return null|string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRODUCT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->productId = (string) $data;
        }

        return $this->productId;
    }

    /**
     * <p>User-defined unique identifier of the <a href="ctp:api:type:Product">Product</a>.</p>
     *
     *
     * @return null|string
     */
    public function getProductKey()
    {
        if (is_null($this->productKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRODUCT_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->productKey = (string) $data;
        }

        return $this->productKey;
    }

    /**
     * <p>Metadata for the requested Attributes, derived from the <a href="ctp:api:type:ProductType">ProductType</a>.
     * Attributes not found in the ProductType are silently omitted.</p>
     *
     *
     * @return null|VariantAttributesAttributeMetadataCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = VariantAttributesAttributeMetadataCollection::fromArray($data);
        }

        return $this->attributes;
    }

    /**
     * <p>All Variants of the Product with their requested Attributes and availability.</p>
     *
     *
     * @return null|VariantAttributesVariantCollection
     */
    public function getVariants()
    {
        if (is_null($this->variants)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_VARIANTS);
            if (is_null($data)) {
                return null;
            }
            $this->variants = VariantAttributesVariantCollection::fromArray($data);
        }

        return $this->variants;
    }


    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @param ?string $productKey
     */
    public function setProductKey(?string $productKey): void
    {
        $this->productKey = $productKey;
    }

    /**
     * @param ?VariantAttributesAttributeMetadataCollection $attributes
     */
    public function setAttributes(?VariantAttributesAttributeMetadataCollection $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @param ?VariantAttributesVariantCollection $variants
     */
    public function setVariants(?VariantAttributesVariantCollection $variants): void
    {
        $this->variants = $variants;
    }
}
