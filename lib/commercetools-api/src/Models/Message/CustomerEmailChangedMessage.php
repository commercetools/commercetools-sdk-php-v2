<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CustomerEmailChangedMessage extends Message
{

    public const FIELD_EMAIL = 'email';

    /**
     * @return null|string
     */
    public function getEmail();

    public function setEmail(?string $email): void;
}
