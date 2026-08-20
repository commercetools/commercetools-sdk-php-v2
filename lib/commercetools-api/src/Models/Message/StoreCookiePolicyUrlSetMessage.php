<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreCookiePolicyUrlSetMessage extends Message
{
    public const FIELD_COOKIE_POLICY_URL = 'cookiePolicyUrl';

    /**
     * <p>The <code>cookiePolicyUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetCookiePolicyUrlAction">Set Cookie Policy Url</a> update action.</p>
     *

     * @return null|string
     */
    public function getCookiePolicyUrl();

    /**
     * @param ?string $cookiePolicyUrl
     */
    public function setCookiePolicyUrl(?string $cookiePolicyUrl): void;
}
