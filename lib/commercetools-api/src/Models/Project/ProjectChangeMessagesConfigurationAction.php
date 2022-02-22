<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Message\MessagesConfigurationDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectChangeMessagesConfigurationAction extends ProjectUpdateAction
{
    public const FIELD_MESSAGES_CONFIGURATION = 'messagesConfiguration';

    /**
     * <p>Configuration for the <a href="/../api/projects/messages">Messages Query</a> feature.</p>
     *
     * @return null|MessagesConfigurationDraft
     */
    public function getMessagesConfiguration();

    /**
     * @param ?MessagesConfigurationDraft $messagesConfiguration
     */
    public function setMessagesConfiguration(?MessagesConfigurationDraft $messagesConfiguration): void;
}
