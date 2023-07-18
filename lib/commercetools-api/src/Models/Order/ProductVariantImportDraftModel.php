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
     * <p>The <code>id</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>. Required if you do not set a value for <code>sku</code>.
     * If set, you must specify a <code>productId</code> in the <a href="ctp:api:type:LineItemImportDraft">LineItemImportDraft</a> also.</p>
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
     * <p>The <code>sku</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>. Required if you do not set a value for <code>id</code>.</p>
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
     * <p>The <a href="ctp:api:type:Price">Prices</a> of the Product Variant if you want to override the <code>prices</code> property in the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a>.
     * If not set, the <code>prices</code> from the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a> are used in the resulting Order.
     * If set, each Price must have its unique price scope (same <code>value.currencyCode</code>, <code>country</code>, <code>customerGroup</code>, <code>channel</code>, <code>validFrom</code> and <code>validUntil</code>).</p>
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
     * <p>The <a href="ctp:api:type:Attribute">Attributes</a> of the Product Variant if you want to override the <code>attributes</code> property in the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a>.
     * If not set, the <code>attributes</code> from the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a> are copied to the resulting Order.</p>
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
     * <p>The <a href="ctp:api:type:Image">Images</a> of the Product Variant if you want to override the <code>images</code> property in the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a>.
     * If not set, the <code>images</code> from the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a> are copied to the resulting Order.</p>
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
