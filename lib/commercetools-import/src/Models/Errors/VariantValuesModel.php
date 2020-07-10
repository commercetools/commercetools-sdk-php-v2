<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

use Models\Prices\PriceImportCollection;
use Models\Productvariants\AttributeCollection;

/**
 * @internal
 */
final class VariantValuesModel extends JsonObjectModel implements VariantValues
{

    /**
     * @var ?string
     */
    protected $sku;

    /**
     * @var ?PriceImportCollection
     */
    protected $prices;

    /**
     * @var ?AttributeCollection
     */
    protected $attributes;


    public function __construct(
        string $sku = null,
        PriceImportCollection $prices = null,
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

    public function setPrices(?PriceImportCollection $prices): void
    {
        $this->prices = $prices;
    }

    public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }



}
