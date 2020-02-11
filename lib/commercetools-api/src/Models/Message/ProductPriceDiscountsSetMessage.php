<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductPriceDiscountsSetMessage extends Message
{

    public const FIELD_UPDATED_PRICES = 'updatedPrices';

    /**
     * @return null|ProductPriceDiscountsSetUpdatedPriceCollection
     */
    public function getUpdatedPrices();

    public function setUpdatedPrices(?ProductPriceDiscountsSetUpdatedPriceCollection $updatedPrices): void;
}
