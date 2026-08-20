<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreRefundPolicyUrlSetMessagePayload extends MessagePayload
{
    public const FIELD_REFUND_POLICY_URL = 'refundPolicyUrl';

    /**
     * <p>The <code>refundPolicyUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetRefundPolicyUrlAction">Set Refund Policy Url</a> update action.</p>
     *

     * @return null|string
     */
    public function getRefundPolicyUrl();

    /**
     * @param ?string $refundPolicyUrl
     */
    public function setRefundPolicyUrl(?string $refundPolicyUrl): void;
}
