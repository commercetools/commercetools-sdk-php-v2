<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerPasswordUpdatedMessagePayload extends MessagePayload
{
    public const FIELD_RESET = 'reset';

    /**
     * <p>Whether the Customer's password was updated during the <a href="/../api/projects/customers#customers-password-reset">Customer's Password Reset</a> workflow.</p>
     *

     * @return null|bool
     */
    public function getReset();

    /**
     * @param ?bool $reset
     */
    public function setReset(?bool $reset): void;
}
