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
    public const FIELD_DEPENDENCIES = 'dependencies';
    public const FIELD_EXPANSION_PATHS = 'expansionPaths';
    public const FIELD_ADDITIONAL_CONTEXT = 'additionalContext';

    /**
     * <p>User-defined unique identifier for the Extension.</p>
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
     * <p>Maximum time (in milliseconds) the Extension can respond within.
     * If no timeout is provided, the default value is used for all <a href="ctp:api:type:ExtensionResourceTypeId">types of Extensions</a>.
     * We recommend keeping the timeout as low as possible to avoid performance issues.</p>
     * <p>The limit of 10000 ms (10 seconds) can be increased per Project after we review the performance impact.
     * Please contact the <a href="https://support.commercetools.com">commercetools support team</a> and provide the Region, Project key, and use case.</p>
     *

     * @return null|int
     */
    public function getTimeoutInMs();

    /**
     * <p>Extensions that must complete before this Extension is called, identified by <code>id</code> or <code>key</code>. Maximum 5 entries. If omitted, the Extension has no dependencies and may run concurrently with other independent Extensions.</p>
     *

     * @return null|ExtensionResourceIdentifierCollection
     */
    public function getDependencies();

    /**
     * <p><a href="/api/general-concepts#expansion-paths">Expansion paths</a> used for reference expansion of the payload.</p>
     * <p>Be aware of the <a href="/api/limits#api-extensions">limits</a> of this feature and its <a href="/api/performance-tips#api-extensions">performance impact</a>.</p>
     *

     * @return null|array
     */
    public function getExpansionPaths();

    /**
     * <p>Configures additional information included in the payload sent to the API Extension.</p>
     *

     * @return null|ExtensionAdditionalContextDraft
     */
    public function getAdditionalContext();

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

    /**
     * @param ?ExtensionResourceIdentifierCollection $dependencies
     */
    public function setDependencies(?ExtensionResourceIdentifierCollection $dependencies): void;

    /**
     * @param ?array $expansionPaths
     */
    public function setExpansionPaths(?array $expansionPaths): void;

    /**
     * @param ?ExtensionAdditionalContextDraft $additionalContext
     */
    public function setAdditionalContext(?ExtensionAdditionalContextDraft $additionalContext): void;
}
