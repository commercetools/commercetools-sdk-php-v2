<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;
use Models\Prices\PriceImportCollection;
use Models\Productvariants\AttributeCollection;

/**
 * @implements Builder<VariantValues>
 */
final class VariantValuesBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var ?PriceImportCollection
     */
    private $prices;

    /**
     * @var ?AttributeCollection
     */
    private $attributes;

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return null|PriceImportCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPrices(?PriceImportCollection $prices)
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }


    public function build(): VariantValues
    {
        return new VariantValuesModel(
            $this->sku,
            $this->prices,
            $this->attributes
        );
    }

    public static function of(): VariantValuesBuilder
    {
        return new self();
    }
}
