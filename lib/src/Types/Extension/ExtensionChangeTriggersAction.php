<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

interface ExtensionChangeTriggersAction extends ExtensionUpdateAction {
    const FIELD_MESSAGES = 'messages';

    /**
     * @return ExtensionTriggerCollection
     */
    public function getMessages();

    /**
     * @param ExtensionTriggerCollection $messages
     * @return $this
     */
    public function setMessages(ExtensionTriggerCollection $messages);

}
