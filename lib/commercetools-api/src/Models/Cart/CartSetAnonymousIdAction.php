<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetAnonymousIdAction extends CartUpdateAction
{
    public const FIELD_ANONYMOUS_ID = 'anonymousId';

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;
}
