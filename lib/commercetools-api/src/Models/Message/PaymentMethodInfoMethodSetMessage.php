<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodInfoMethodSetMessage extends Message
{
    public const FIELD_METHOD = 'method';
    public const FIELD_OLD_METHOD = 'oldMethod';

    /**
     * <p>Payment Method after the <a href="ctp:api:type:PaymentSetMethodInfoMethodAction">Set MethodInfo Method</a> update action.</p>
     *

     * @return null|string
     */
    public function getMethod();

    /**
     * <p>Payment Method before the <a href="ctp:api:type:PaymentSetMethodInfoMethodAction">Set MethodInfo Method</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldMethod();

    /**
     * @param ?string $method
     */
    public function setMethod(?string $method): void;

    /**
     * @param ?string $oldMethod
     */
    public function setOldMethod(?string $oldMethod): void;
}
