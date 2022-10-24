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
     * <p>Whether the Customer's password was updated during the <a href="/../api/projects/customers#password-reset-of-customer">Reset password</a> or <a href="/../api/projects/customers#change-password-of-customer">Change password</a> flow.</p>
     *

     * @return null|bool
     */
    public function getReset();

    /**
     * @param ?bool $reset
     */
    public function setReset(?bool $reset): void;
}
