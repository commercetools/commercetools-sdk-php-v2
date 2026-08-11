<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionDraft>
 */
final class ExtensionDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|ExtensionDestination|ExtensionDestinationBuilder
     */
    private $destination;

    /**

     * @var ?ExtensionTriggerCollection
     */
    private $triggers;

    /**

     * @var ?int
     */
    private $timeoutInMs;

    /**

     * @var ?ExtensionResourceIdentifierCollection
     */
    private $dependencies;

    /**

     * @var ?array
     */
    private $expansionPaths;

    /**

     * @var null|ExtensionAdditionalContextDraft|ExtensionAdditionalContextDraftBuilder
     */
    private $additionalContext;

    /**
     * <p>User-defined unique identifier for the Extension.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Defines where the Extension can be reached.</p>
     *

     * @return null|ExtensionDestination
     */
    public function getDestination()
    {
        return $this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination;
    }

    /**
     * <p>Describes what triggers the Extension.</p>
     *

     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers()
    {
        return $this->triggers;
    }

    /**
     * <p>Maximum time (in milliseconds) the Extension can respond within.
     * If no timeout is provided, the default value is used for all <a href="ctp:api:type:ExtensionResourceTypeId">types of Extensions</a>.
     * We recommend keeping the timeout as low as possible to avoid performance issues.</p>
     * <p>The limit of 10000 ms (10 seconds) can be increased per Project after we review the performance impact.
     * Please contact the <a href="https://support.commercetools.com">commercetools support team</a> and provide the Region, Project key, and use case.</p>
     *

     * @return null|int
     */
    public function getTimeoutInMs()
    {
        return $this->timeoutInMs;
    }

    /**
     * <p>Extensions that must complete before this Extension is called, identified by <code>id</code> or <code>key</code>. Maximum 5 entries. If omitted, the Extension has no dependencies and may run concurrently with other independent Extensions.</p>
     *

     * @return null|ExtensionResourceIdentifierCollection
     */
    public function getDependencies()
    {
        return $this->dependencies;
    }

    /**
     * <p><a href="/api/general-concepts#expansion-paths">Expansion paths</a> used for reference expansion of the payload.</p>
     * <p>Be aware of the <a href="/api/limits#api-extensions">limits</a> of this feature and its <a href="/api/performance-tips#api-extensions">performance impact</a>.</p>
     *

     * @return null|array
     */
    public function getExpansionPaths()
    {
        return $this->expansionPaths;
    }

    /**
     * <p>Configures additional information included in the payload sent to the API Extension.</p>
     *

     * @return null|ExtensionAdditionalContextDraft
     */
    public function getAdditionalContext()
    {
        return $this->additionalContext instanceof ExtensionAdditionalContextDraftBuilder ? $this->additionalContext->build() : $this->additionalContext;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?ExtensionDestination $destination
     * @return $this
     */
    public function withDestination(?ExtensionDestination $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @param ?ExtensionTriggerCollection $triggers
     * @return $this
     */
    public function withTriggers(?ExtensionTriggerCollection $triggers)
    {
        $this->triggers = $triggers;

        return $this;
    }

    /**
     * @param ?int $timeoutInMs
     * @return $this
     */
    public function withTimeoutInMs(?int $timeoutInMs)
    {
        $this->timeoutInMs = $timeoutInMs;

        return $this;
    }

    /**
     * @param ?ExtensionResourceIdentifierCollection $dependencies
     * @return $this
     */
    public function withDependencies(?ExtensionResourceIdentifierCollection $dependencies)
    {
        $this->dependencies = $dependencies;

        return $this;
    }

    /**
     * @param ?array $expansionPaths
     * @return $this
     */
    public function withExpansionPaths(?array $expansionPaths)
    {
        $this->expansionPaths = $expansionPaths;

        return $this;
    }

    /**
     * @param ?ExtensionAdditionalContextDraft $additionalContext
     * @return $this
     */
    public function withAdditionalContext(?ExtensionAdditionalContextDraft $additionalContext)
    {
        $this->additionalContext = $additionalContext;

        return $this;
    }

    /**
     * @deprecated use withDestination() instead
     * @return $this
     */
    public function withDestinationBuilder(?ExtensionDestinationBuilder $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @deprecated use withAdditionalContext() instead
     * @return $this
     */
    public function withAdditionalContextBuilder(?ExtensionAdditionalContextDraftBuilder $additionalContext)
    {
        $this->additionalContext = $additionalContext;

        return $this;
    }

    public function build(): ExtensionDraft
    {
        return new ExtensionDraftModel(
            $this->key,
            $this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination,
            $this->triggers,
            $this->timeoutInMs,
            $this->dependencies,
            $this->expansionPaths,
            $this->additionalContext instanceof ExtensionAdditionalContextDraftBuilder ? $this->additionalContext->build() : $this->additionalContext
        );
    }

    public static function of(): ExtensionDraftBuilder
    {
        return new self();
    }
}
