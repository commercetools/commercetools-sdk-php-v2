<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\StandalonePrice\StandalonePrice;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceCreatedMessage extends Message
{
    public const FIELD_STANDALONE_PRICE = 'standalonePrice';

    /**
     * <p>The Standalone Price as it was created.</p>
     *

     * @return null|StandalonePrice
     */
    public function getStandalonePrice();

    /**
     * @param ?StandalonePrice $standalonePrice
     */
    public function setStandalonePrice(?StandalonePrice $standalonePrice): void;
}
