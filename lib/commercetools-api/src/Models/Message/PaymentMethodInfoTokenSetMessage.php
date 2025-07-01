<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\PaymentMethod\PaymentMethodToken;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodInfoTokenSetMessage extends Message
{
    public const FIELD_TOKEN = 'token';
    public const FIELD_OLD_TOKEN = 'oldToken';

    /**
     * <p>Token of the Payment Method after the <a href="ctp:api:type:PaymentSetMethodInfoTokenAction">Set MethodInfo Token</a> update action.</p>
     *

     * @return null|PaymentMethodToken
     */
    public function getToken();

    /**
     * <p>Token of the Payment Method before the <a href="ctp:api:type:PaymentSetMethodInfoTokenAction">Set MethodInfo Token</a> update action.</p>
     *

     * @return null|PaymentMethodToken
     */
    public function getOldToken();

    /**
     * @param ?PaymentMethodToken $token
     */
    public function setToken(?PaymentMethodToken $token): void;

    /**
     * @param ?PaymentMethodToken $oldToken
     */
    public function setOldToken(?PaymentMethodToken $oldToken): void;
}
