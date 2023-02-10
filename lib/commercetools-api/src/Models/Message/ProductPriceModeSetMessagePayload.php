<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductPriceModeSetMessagePayload extends MessagePayload
{
    public const FIELD_TO = 'to';

    /**
     * <p>The <a href="ctp:api:type:ProductPriceModeEnum">PriceMode</a> that was set.</p>
     *

     * @return null|string
     */
    public function getTo();

    /**
     * @param ?string $to
     */
    public function setTo(?string $to): void;
}
