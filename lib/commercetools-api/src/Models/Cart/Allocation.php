<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Allocation extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_TYPE = 'type';

    /**
     * <p>Type of the Allocation.</p>
     *

     * @return null|string
     */
    public function getType();
}
