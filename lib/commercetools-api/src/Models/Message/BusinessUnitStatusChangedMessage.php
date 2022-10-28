<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitStatusChangedMessage extends Message
{
    public const FIELD_ACTIVE = 'active';

    /**
     * <p>Updated status of the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *

     * @return null|string
     */
    public function getActive();

    /**
     * @param ?string $active
     */
    public function setActive(?string $active): void;
}
