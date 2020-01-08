<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class VariantValuesModel extends JsonObjectModel implements VariantValues
{
    /**
     * @var ?string
     */
    protected $sku;

    /**
     * @var ?PriceDraftCollection
     */
    protected $prices;

    /**
     * @var ?AttributeCollection
     */
    protected $attributes;

    public function __construct(
        string $sku = null,
        PriceDraftCollection $prices = null,
        AttributeCollection $attributes = null
    ) {
        $this->sku = $sku;
        $this->prices = $prices;
        $this->attributes = $attributes;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(VariantValues::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * @return null|PriceDraftCollection
     */
    public function getPrices()
    {
        if (is_null($this->prices)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(VariantValues::FIELD_PRICES);
            if (is_null($data)) {
                return null;
            }
            $this->prices = PriceDraftCollection::fromArray($data);
        }

        return $this->prices;
    }

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(VariantValues::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeCollection::fromArray($data);
        }

        return $this->attributes;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function setPrices(?PriceDraftCollection $prices): void
    {
        $this->prices = $prices;
    }

    public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }
}
