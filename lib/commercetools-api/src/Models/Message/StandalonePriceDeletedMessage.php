<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceDeletedMessage extends Message
{
    public const FIELD_SKU = 'sku';

    /**
     * <p>SKU of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> to which the deleted Standalone Price was associated.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;
}
