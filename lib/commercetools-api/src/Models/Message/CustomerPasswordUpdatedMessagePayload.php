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
     * <p>Whether the Customer's password was updated during the <a href="ctp:api:endpoint:/{projectKey}/customers/password/reset:POST">Reset password</a> or <a href="ctp:api:endpoint:/{projectKey}/customers/password:POST">Change password</a> flow.</p>
     *

     * @return null|bool
     */
    public function getReset();

    /**
     * @param ?bool $reset
     */
    public function setReset(?bool $reset): void;
}
