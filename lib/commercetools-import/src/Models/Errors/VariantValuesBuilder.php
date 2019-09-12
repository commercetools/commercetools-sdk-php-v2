<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Prices\PriceImportCollection;
use Commercetools\Import\Models\Productvariants\AttributeCollection;

/**
 * @implements Builder<VariantValues>
 */
final class VariantValuesBuilder implements Builder
{
    /**
     * @var ?AttributeCollection
     */
    private $attributes;

    /**
     * @var ?PriceImportCollection
     */
    private $prices;

    /**
     * @var ?string
     */
    private $sku;

    public function __construct()
    {
    }

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return null|PriceImportCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return $this
     */
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

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
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    public function build(): VariantValues
    {
        return new VariantValuesModel(
            $this->attributes,
            $this->prices,
            $this->sku
        );
    }

    public static function of(): VariantValuesBuilder
    {
        return new self();
    }
}
