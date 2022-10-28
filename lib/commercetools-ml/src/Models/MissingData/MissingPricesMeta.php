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
     * @deprecated
     * @return null|MissingPricesProductLevel
     */
    public function getProductLevel();

    /**
     * @deprecated
     * @return null|MissingPricesVariantLevel
     */
    public function getVariantLevel();

    /**
     * @param ?MissingPricesProductLevel $productLevel
     */
    public function setProductLevel(?MissingPricesProductLevel $productLevel): void;

    /**
     * @param ?MissingPricesVariantLevel $variantLevel
     */
    public function setVariantLevel(?MissingPricesVariantLevel $variantLevel): void;
}
