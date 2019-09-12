<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Prices\PriceImportCollection;
use Commercetools\Import\Models\Productvariants\AttributeCollection;

interface VariantValues extends JsonObject
{
    const FIELD_SKU = 'sku';
    const FIELD_PRICES = 'prices';
    const FIELD_ATTRIBUTES = 'attributes';

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

    public function setSku(?string $sku): void;

    public function setPrices(?PriceImportCollection $prices): void;

    public function setAttributes(?AttributeCollection $attributes): void;
}
