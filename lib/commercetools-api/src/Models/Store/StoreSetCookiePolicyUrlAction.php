<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreSetCookiePolicyUrlAction extends StoreUpdateAction
{
    public const FIELD_COOKIE_POLICY_URL = 'cookiePolicyUrl';

    /**
     * <p>Value to set. Must be an absolute <code>https</code> URL. If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getCookiePolicyUrl();

    /**
     * @param ?string $cookiePolicyUrl
     */
    public function setCookiePolicyUrl(?string $cookiePolicyUrl): void;
}
