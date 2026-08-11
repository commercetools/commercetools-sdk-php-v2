<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReviewSetKeyAction extends ReviewUpdateAction
{
    public const FIELD_KEY = 'key';

    /**
     * <p>Value to set. If omitted, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
