<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentSetKeyAction extends PaymentUpdateAction
{
    public const FIELD_KEY = 'key';

    /**
     * <p>Value to set.
     * If <code>key</code> is absent or <code>null</code>, the existing key, if any, will be removed.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
