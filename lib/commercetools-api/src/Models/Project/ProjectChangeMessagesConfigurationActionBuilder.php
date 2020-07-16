<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Message\MessageConfigurationDraft;
use Commercetools\Api\Models\Message\MessageConfigurationDraftBuilder;
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
     * @var null|MessageConfigurationDraft|MessageConfigurationDraftBuilder
     */
    private $messagesConfiguration;

    /**
     * @return null|MessageConfigurationDraft
     */
    public function getMessagesConfiguration()
    {
        return $this->messagesConfiguration instanceof MessageConfigurationDraftBuilder ? $this->messagesConfiguration->build() : $this->messagesConfiguration;
    }

    /**
     * @param ?MessageConfigurationDraft $messagesConfiguration
     * @return $this
     */
    public function withMessagesConfiguration(?MessageConfigurationDraft $messagesConfiguration)
    {
        $this->messagesConfiguration = $messagesConfiguration;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMessagesConfigurationBuilder(?MessageConfigurationDraftBuilder $messagesConfiguration)
    {
        $this->messagesConfiguration = $messagesConfiguration;

        return $this;
    }

    public function build(): ProjectChangeMessagesConfigurationAction
    {
        return new ProjectChangeMessagesConfigurationActionModel(
            $this->messagesConfiguration instanceof MessageConfigurationDraftBuilder ? $this->messagesConfiguration->build() : $this->messagesConfiguration
        );
    }

    public static function of(): ProjectChangeMessagesConfigurationActionBuilder
    {
        return new self();
    }
}
