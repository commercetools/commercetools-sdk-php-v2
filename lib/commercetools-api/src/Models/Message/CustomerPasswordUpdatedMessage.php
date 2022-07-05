<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerPasswordUpdatedMessage extends Message
{
    public const FIELD_RESET = 'reset';

    /**
     * <p>true, if password has been updated during Customer's Password Reset workflow.</p>
     *

     * @return null|bool
     */
    public function getReset();

    /**
     * @param ?bool $reset
     */
    public function setReset(?bool $reset): void;
}
