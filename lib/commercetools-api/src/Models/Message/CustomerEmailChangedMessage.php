<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerEmailChangedMessage extends Message
{
    public const FIELD_EMAIL = 'email';

    /**
     * <p>The <code>email</code> that was set during the <a href="ctp:api:type:CustomerChangeEmailAction">Change Email</a> update action.</p>
     *

     * @return null|string
     */
    public function getEmail();

    /**
     * @param ?string $email
     */
    public function setEmail(?string $email): void;
}
