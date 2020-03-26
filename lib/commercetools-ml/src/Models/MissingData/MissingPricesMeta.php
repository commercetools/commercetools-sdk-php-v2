<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MissingPricesMeta extends JsonObject
{
    public const FIELD_PRODUCT_LEVEL = 'productLevel';
    public const FIELD_VARIANT_LEVEL = 'variantLevel';

    /**
     * @return null|MissingPricesProductLevel
     */
    public function getProductLevel();

    /**
     * @return null|MissingPricesVariantLevel
     */
    public function getVariantLevel();

    public function setProductLevel(?MissingPricesProductLevel $productLevel): void;

    public function setVariantLevel(?MissingPricesVariantLevel $variantLevel): void;
}
