<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Import\Models\Prices\PriceImportCollection;
use Commercetools\Import\Models\Productvariants\AttributeCollection;
use stdClass;

final class VariantValuesModel extends JsonObjectModel implements VariantValues
{
    /**
     * @var ?AttributeCollection
     */
    protected $attributes;

    /**
     * @var ?PriceImportCollection
     */
    protected $prices;

    /**
     * @var ?string
     */
    protected $sku;

    public function __construct(
        AttributeCollection $attributes = null,
        PriceImportCollection $prices = null,
        string $sku = null
    ) {
        $this->attributes = $attributes;
        $this->prices = $prices;
        $this->sku = $sku;
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

    /**
     * @return null|PriceImportCollection
     */
    public function getPrices()
    {
        if (is_null($this->prices)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(VariantValues::FIELD_PRICES);
            if (is_null($data)) {
                return null;
            }
            $this->prices = PriceImportCollection::fromArray($data);
        }

        return $this->prices;
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

    public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }

    public function setPrices(?PriceImportCollection $prices): void
    {
        $this->prices = $prices;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }
}
