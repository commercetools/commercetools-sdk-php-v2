<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Project\ProjectUpdateActionModel;

class ProjectChangeMessagesEnabledActionModel extends ProjectUpdateActionModel implements ProjectChangeMessagesEnabledAction
{
    const DISCRIMINATOR_VALUE = 'changeMessagesEnabled';

    /**
     * @var mixed
     */
    protected $messagesEnabled;

    /**
     * @return mixed
     */
    public function getMessagesEnabled()
    {
        if (is_null($this->messagesEnabled)) {
            $value = $this->raw(ProjectChangeMessagesEnabledAction::FIELD_MESSAGES_ENABLED);
            $this->messagesEnabled = $value;
        }
        return $this->messagesEnabled;
    }

    /**
     * @param $messagesEnabled
     * @return $this
     */
    public function setMessagesEnabled($messagesEnabled)
    {
        $this->messagesEnabled = $messagesEnabled;

        return $this;
    }

}
