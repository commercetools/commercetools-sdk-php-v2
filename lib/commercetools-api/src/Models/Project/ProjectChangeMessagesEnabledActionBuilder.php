<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProjectChangeMessagesEnabledAction>
 */
final class ProjectChangeMessagesEnabledActionBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $messagesEnabled;

    /**
     * @return null|bool
     */
    public function getMessagesEnabled()
    {
        return $this->messagesEnabled;
    }

    /**
     * @param ?bool $messagesEnabled
     * @return $this
     */
    public function withMessagesEnabled(?bool $messagesEnabled)
    {
        $this->messagesEnabled = $messagesEnabled;

        return $this;
    }


    public function build(): ProjectChangeMessagesEnabledAction
    {
        return new ProjectChangeMessagesEnabledActionModel(
            $this->messagesEnabled
        );
    }

    public static function of(): ProjectChangeMessagesEnabledActionBuilder
    {
        return new self();
    }
}
