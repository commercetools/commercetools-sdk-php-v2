<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MessagePayload extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_TYPE = 'type';

    /**

     * @return null|string
     */
    public function getType();
}
