<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

interface ProjectChangeMessagesEnabledAction extends ProjectUpdateAction {
    const FIELD_MESSAGES_ENABLED = 'messagesEnabled';

    /**
     * @return mixed
     */
    public function getMessagesEnabled();

    /**
     * @param mixed $messagesEnabled
     * @return $this
     */
    public function setMessagesEnabled($messagesEnabled);

}
