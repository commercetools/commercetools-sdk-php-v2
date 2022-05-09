<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetPriceModeAction extends ProductUpdateAction
{
    public const FIELD_PRICE_MODE = 'priceMode';

    /**
     * <p>Specifies which type of prices should be used when looking up a price for this product. If not set, <code>Embedded</code> <a href="ctp:api:type:ProductPriceModeEnum">ProductPriceMode</a> is used.</p>
     *
     * @return null|string
     */
    public function getPriceMode();

    /**
     * @param ?string $priceMode
     */
    public function setPriceMode(?string $priceMode): void;
}
