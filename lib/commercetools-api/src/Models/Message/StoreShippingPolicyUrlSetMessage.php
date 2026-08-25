<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreShippingPolicyUrlSetMessage extends Message
{
    public const FIELD_SHIPPING_POLICY_URL = 'shippingPolicyUrl';

    /**
     * <p>The <code>shippingPolicyUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetShippingPolicyUrlAction">Set Shipping Policy Url</a> update action.</p>
     *

     * @return null|string
     */
    public function getShippingPolicyUrl();

    /**
     * @param ?string $shippingPolicyUrl
     */
    public function setShippingPolicyUrl(?string $shippingPolicyUrl): void;
}
