<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

interface PaymentSetAnonymousIdAction extends PaymentUpdateAction
{
    const FIELD_ANONYMOUS_ID = 'anonymousId';

    /**
     * <p>Anonymous ID of the anonymous customer that this payment belongs to.
     * If this field is not set any existing <code>anonymousId</code> is removed.</p>
     *
     * @return null|string
     */
    public function getAnonymousId();

    public function setAnonymousId(?string $anonymousId): void;
}
