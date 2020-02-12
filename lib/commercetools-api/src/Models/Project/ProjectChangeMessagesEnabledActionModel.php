<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class ProjectChangeMessagesEnabledActionModel extends JsonObjectModel implements ProjectChangeMessagesEnabledAction
{
    public const DISCRIMINATOR_VALUE = 'changeMessagesEnabled';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?bool
     */
    protected $messagesEnabled;


    public function __construct(
        bool $messagesEnabled = null
    ) {
        $this->messagesEnabled = $messagesEnabled;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProjectUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|bool
     */
    public function getMessagesEnabled()
    {
        if (is_null($this->messagesEnabled)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProjectChangeMessagesEnabledAction::FIELD_MESSAGES_ENABLED);
            if (is_null($data)) {
                return null;
            }
            $this->messagesEnabled = (bool) $data;
        }

        return $this->messagesEnabled;
    }

    public function setMessagesEnabled(?bool $messagesEnabled): void
    {
        $this->messagesEnabled = $messagesEnabled;
    }
}
