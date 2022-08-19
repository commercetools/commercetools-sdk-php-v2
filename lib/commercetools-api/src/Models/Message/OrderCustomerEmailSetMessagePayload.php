<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderCustomerEmailSetMessagePayload extends OrderMessagePayload
{
    public const FIELD_EMAIL = 'email';
    public const FIELD_OLD_EMAIL = 'oldEmail';

    /**
     * <p>Email address on the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:OrderSetCustomerEmailAction">Set Customer Email</a> update action.</p>
     *

     * @return null|string
     */
    public function getEmail();

    /**
     * <p>Email address on the <a href="ctp:api:type:Order">Order</a> before the <a href="ctp:api:type:OrderSetCustomerEmailAction">Set Customer Email</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldEmail();

    /**
     * @param ?string $email
     */
    public function setEmail(?string $email): void;

    /**
     * @param ?string $oldEmail
     */
    public function setOldEmail(?string $oldEmail): void;
}
