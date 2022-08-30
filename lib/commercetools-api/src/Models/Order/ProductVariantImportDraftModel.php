<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductVariantImportDraftModel extends JsonObjectModel implements ProductVariantImportDraft
{
    /**
     *
     * @var ?int
     */
    protected $id;

    /**
     *
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @var ?PriceDraftCollection
     */
    protected $prices;

    /**
     *
     * @var ?AttributeCollection
     */
    protected $attributes;

    /**
     *
     * @var ?ImageCollection
     */
    protected $images;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $id = null,
        ?string $sku = null,
        ?PriceDraftCollection $prices = null,
        ?AttributeCollection $attributes = null,
        ?ImageCollection $images = null
    ) {
        $this->id = $id;
        $this->sku = $sku;
        $this->prices = $prices;
        $this->attributes = $attributes;
        $this->images = $images;
    }

    /**
     * <p>The sequential ID of the variant within the product.
     * The variant with provided ID should exist in some existing product, so you also need to specify the productId if this property is set,
     * or alternatively you can just specify SKU of the product variant.</p>
     *
     *
     * @return null|int
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (int) $data;
        }

        return $this->id;
    }

    /**
     * <p>The SKU of the existing variant.</p>
     *
     *
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * <p>The <a href="ctp:api:type:EmbeddedPrice">EmbeddedPrices</a> of the variant.
     * The prices should not contain two prices for the same price scope (same currency, country, customer group, channel, valid from and valid until).
     * If this property is defined, then it will override the <code>prices</code> property from the original product variant, otherwise <code>prices</code> property from the original product variant would be copied in the resulting order.</p>
     *
     *
     * @return null|PriceDraftCollection
     */
    public function getPrices()
    {
        if (is_null($this->prices)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PRICES);
            if (is_null($data)) {
                return null;
            }
            $this->prices = PriceDraftCollection::fromArray($data);
        }

        return $this->prices;
    }

    /**
     * <p>If this property is defined, then it will override the <code>attributes</code> property from the original
     * product variant, otherwise <code>attributes</code> property from the original product variant would be copied in the resulting order.</p>
     *
     *
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeCollection::fromArray($data);
        }

        return $this->attributes;
    }

    /**
     * <p>If this property is defined, then it will override the <code>images</code> property from the original
     * product variant, otherwise <code>images</code> property from the original product variant would be copied in the resulting order.</p>
     *
     *
     * @return null|ImageCollection
     */
    public function getImages()
    {
        if (is_null($this->images)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_IMAGES);
            if (is_null($data)) {
                return null;
            }
            $this->images = ImageCollection::fromArray($data);
        }

        return $this->images;
    }


    /**
     * @param ?int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?PriceDraftCollection $prices
     */
    public function setPrices(?PriceDraftCollection $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void
    {
        $this->images = $images;
    }
}
