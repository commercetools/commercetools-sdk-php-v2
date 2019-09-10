<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProjectChangeMessagesEnabledAction>
 */
final class ProjectChangeMessagesEnabledActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?bool
     */
    private $messagesEnabled;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|bool
     */
    public function getMessagesEnabled()
    {
        return $this->messagesEnabled;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
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
            $this->action,
            $this->messagesEnabled
        );
    }

    public static function of(): ProjectChangeMessagesEnabledActionBuilder
    {
        return new self();
    }
}
