<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Message\MessagesConfigurationDraft;
use Commercetools\Api\Models\Message\MessagesConfigurationDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProjectChangeMessagesConfigurationActionModel extends JsonObjectModel implements ProjectChangeMessagesConfigurationAction
{
    public const DISCRIMINATOR_VALUE = 'changeMessagesConfiguration';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?MessagesConfigurationDraft
     */
    protected $messagesConfiguration;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?MessagesConfigurationDraft $messagesConfiguration = null
    ) {
        $this->messagesConfiguration = $messagesConfiguration;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|MessagesConfigurationDraft
     */
    public function getMessagesConfiguration()
    {
        if (is_null($this->messagesConfiguration)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_MESSAGES_CONFIGURATION);
            if (is_null($data)) {
                return null;
            }

            $this->messagesConfiguration = MessagesConfigurationDraftModel::of($data);
        }

        return $this->messagesConfiguration;
    }


    /**
     * @param ?MessagesConfigurationDraft $messagesConfiguration
     */
    public function setMessagesConfiguration(?MessagesConfigurationDraft $messagesConfiguration): void
    {
        $this->messagesConfiguration = $messagesConfiguration;
    }
}
