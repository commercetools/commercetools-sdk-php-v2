<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectChangeMessagesEnabledAction extends ProjectUpdateAction
{
    public const FIELD_MESSAGES_ENABLED = 'messagesEnabled';

    /**
     * @return null|bool
     */
    public function getMessagesEnabled();

    public function setMessagesEnabled(?bool $messagesEnabled): void;
}
