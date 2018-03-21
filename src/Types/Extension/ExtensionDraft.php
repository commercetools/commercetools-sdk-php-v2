<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\JsonObject;

interface ExtensionDraft extends JsonObject {
    const FIELD_KEY = 'key';
    const FIELD_DESTINATION = 'destination';
    const FIELD_TRIGGERS = 'triggers';

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return ExtensionDestination
     */
    public function getDestination();

    /**
     * @return ExtensionTriggerCollection
     */
    public function getTriggers();

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param ExtensionDestination $destination
     * @return $this
     */
    public function setDestination(ExtensionDestination $destination);

    /**
     * @param ExtensionTriggerCollection $triggers
     * @return $this
     */
    public function setTriggers(ExtensionTriggerCollection $triggers);

}
