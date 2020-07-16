<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ExtensionDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_DESTINATION = 'destination';
    public const FIELD_TRIGGERS = 'triggers';
    public const FIELD_TIMEOUT_IN_MS = 'timeoutInMs';

    /**
     * <p>User-specific unique identifier for the extension</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>Details where the extension can be reached</p>
     *
     * @return null|ExtensionDestination
     */
    public function getDestination();

    /**
     * <p>Describes what triggers the extension</p>
     *
     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers();

    /**
     * <p>The maximum time the commercetools platform waits for a response from the extension.
     * The maximum value is 2000 ms (2 seconds).
     * This limit can be increased per project after we review the performance impact.
     * Please contact Support via the <a href="https://support.commercetools.com">Support Portal</a> and provide the region, project key and use case.</p>
     *
     * @return null|int
     */
    public function getTimeoutInMs();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?ExtensionDestination $destination
     */
    public function setDestination(?ExtensionDestination $destination): void;

    /**
     * @param ?ExtensionTriggerCollection $triggers
     */
    public function setTriggers(?ExtensionTriggerCollection $triggers): void;

    /**
     * @param ?int $timeoutInMs
     */
    public function setTimeoutInMs(?int $timeoutInMs): void;
}
