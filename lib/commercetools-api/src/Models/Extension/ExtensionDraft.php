<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObject;

interface ExtensionDraft extends JsonObject
{
    const FIELD_KEY = 'key';
    const FIELD_DESTINATION = 'destination';
    const FIELD_TRIGGERS = 'triggers';
    const FIELD_TIMEOUT_IN_MS = 'timeoutInMs';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|ExtensionDestination
     */
    public function getDestination();

    /**
     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers();

    /**
     * @return null|int
     */
    public function getTimeoutInMs();

    public function setKey(?string $key): void;

    public function setDestination(?ExtensionDestination $destination): void;

    public function setTriggers(?ExtensionTriggerCollection $triggers): void;

    public function setTimeoutInMs(?int $timeoutInMs): void;
}
