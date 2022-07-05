<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Prices\PriceImportCollection;
use Commercetools\Import\Models\Productvariants\AttributeCollection;

interface VariantValues extends JsonObject
{
    public const FIELD_SKU = 'sku';
    public const FIELD_PRICES = 'prices';
    public const FIELD_ATTRIBUTES = 'attributes';

    /**

     * @return null|string
     */
    public function getSku();

    /**

     * @return null|PriceImportCollection
     */
    public function getPrices();

    /**

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?PriceImportCollection $prices
     */
    public function setPrices(?PriceImportCollection $prices): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;
}
