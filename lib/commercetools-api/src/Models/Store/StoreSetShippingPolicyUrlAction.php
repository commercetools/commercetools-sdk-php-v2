<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreSetShippingPolicyUrlAction extends StoreUpdateAction
{
    public const FIELD_SHIPPING_POLICY_URL = 'shippingPolicyUrl';

    /**
     * <p>Value to set. Must be an absolute <code>https</code> URL. If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getShippingPolicyUrl();

    /**
     * @param ?string $shippingPolicyUrl
     */
    public function setShippingPolicyUrl(?string $shippingPolicyUrl): void;
}
