<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\PaymentMethod\PaymentMethodToken;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentSetMethodInfoTokenAction extends PaymentUpdateAction
{
    public const FIELD_TOKEN = 'token';

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|PaymentMethodToken
     */
    public function getToken();

    /**
     * @param ?PaymentMethodToken $token
     */
    public function setToken(?PaymentMethodToken $token): void;
}
