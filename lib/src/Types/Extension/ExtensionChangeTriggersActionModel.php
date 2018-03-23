<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\Extension\ExtensionUpdateActionModel;

class ExtensionChangeTriggersActionModel extends ExtensionUpdateActionModel implements ExtensionChangeTriggersAction {
    const DISCRIMINATOR_VALUE = 'changeTriggers';

    /**
     * @var ExtensionTriggerCollection
     */
    protected $messages;

    /**
     * @return ExtensionTriggerCollection
     */
    public function getMessages()
    {
        if (is_null($this->messages)) {
            $value = $this->raw(ExtensionChangeTriggersAction::FIELD_MESSAGES);
            if (is_null($value)) {
                return $this->mapData(ExtensionTriggerCollection::class, null);
            }
            $value = $this->mapData(ExtensionTriggerCollection::class, $value);
            $this->messages = $value;
        }
        return $this->messages;
    }

    /**
     * @param ExtensionTriggerCollection $messages
     * @return $this
     */
    public function setMessages(ExtensionTriggerCollection $messages)
    {
        $this->messages = $messages;

        return $this;
    }

}
