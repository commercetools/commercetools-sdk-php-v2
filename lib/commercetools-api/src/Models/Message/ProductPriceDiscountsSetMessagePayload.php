<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductPriceDiscountsSetMessagePayload extends MessagePayload
{
    public const FIELD_UPDATED_PRICES = 'updatedPrices';

    /**
     * <p>Array containing details about the <a href="ctp:api:type:Price">Embedded Prices</a> that were updated.</p>
     *

     * @return null|ProductPriceDiscountsSetUpdatedPriceCollection
     */
    public function getUpdatedPrices();

    /**
     * @param ?ProductPriceDiscountsSetUpdatedPriceCollection $updatedPrices
     */
    public function setUpdatedPrices(?ProductPriceDiscountsSetUpdatedPriceCollection $updatedPrices): void;
}
