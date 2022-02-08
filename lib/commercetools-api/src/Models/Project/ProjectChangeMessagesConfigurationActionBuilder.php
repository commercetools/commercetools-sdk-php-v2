<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Message\MessagesConfigurationDraft;
use Commercetools\Api\Models\Message\MessagesConfigurationDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProjectChangeMessagesConfigurationAction>
 */
final class ProjectChangeMessagesConfigurationActionBuilder implements Builder
{
    /**
     * @var null|MessagesConfigurationDraft|MessagesConfigurationDraftBuilder
     */
    private $messagesConfiguration;

    /**
     * @return null|MessagesConfigurationDraft
     */
    public function getMessagesConfiguration()
    {
        return $this->messagesConfiguration instanceof MessagesConfigurationDraftBuilder ? $this->messagesConfiguration->build() : $this->messagesConfiguration;
    }

    /**
     * @param ?MessagesConfigurationDraft $messagesConfiguration
     * @return $this
     */
    public function withMessagesConfiguration(?MessagesConfigurationDraft $messagesConfiguration)
    {
        $this->messagesConfiguration = $messagesConfiguration;

        return $this;
    }

    /**
     * @deprecated use withMessagesConfiguration() instead
     * @return $this
     */
    public function withMessagesConfigurationBuilder(?MessagesConfigurationDraftBuilder $messagesConfiguration)
    {
        $this->messagesConfiguration = $messagesConfiguration;

        return $this;
    }

    public function build(): ProjectChangeMessagesConfigurationAction
    {
        return new ProjectChangeMessagesConfigurationActionModel(
            $this->messagesConfiguration instanceof MessagesConfigurationDraftBuilder ? $this->messagesConfiguration->build() : $this->messagesConfiguration
        );
    }

    public static function of(): ProjectChangeMessagesConfigurationActionBuilder
    {
        return new self();
    }
}
