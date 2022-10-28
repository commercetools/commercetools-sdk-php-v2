<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerLastNameSetMessage extends Message
{
    public const FIELD_LAST_NAME = 'lastName';

    /**
     * <p>The <code>lastName</code> that was set during the <a href="ctp:api:type:CustomerSetLastNameAction">Set Last Name</a> update action.</p>
     *

     * @return null|string
     */
    public function getLastName();

    /**
     * @param ?string $lastName
     */
    public function setLastName(?string $lastName): void;
}
