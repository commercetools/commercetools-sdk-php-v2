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
     * <p>User-defined unique identifier for the Extension.
     * Keys can only contain alphanumeric characters, underscores, and hyphens.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>Defines where the Extension can be reached.</p>
     *
     * @return null|ExtensionDestination
     */
    public function getDestination();

    /**
     * <p>Describes what triggers the Extension.</p>
     *
     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers();

    /**
     * <p>Maximum time (in milliseconds) the commercetools Platform waits for a response from the Extension.
     * If no timeout is provided, the default value is used for all types of Extensions.
     * The maximum value is 10000 ms (10 seconds) for <code>payment</code> Extensions and 2000 ms (2 seconds) for all other Extensions.</p>
     * <p>This limit can be increased per Project after we review the performance impact.
     * Please contact our support via the <a href="https://support.commercetools.com">support portal</a> and provide the Region, Project key, and use case.</p>
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
