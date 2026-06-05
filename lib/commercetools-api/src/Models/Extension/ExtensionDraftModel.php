<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ExtensionDraftModel extends JsonObjectModel implements ExtensionDraft
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?ExtensionDestination
     */
    protected $destination;

    /**
     *
     * @var ?ExtensionTriggerCollection
     */
    protected $triggers;

    /**
     *
     * @var ?int
     */
    protected $timeoutInMs;

    /**
     *
     * @var ?ExtensionResourceIdentifierCollection
     */
    protected $dependencies;

    /**
     *
     * @var ?array
     */
    protected $expansionPaths;

    /**
     *
     * @var ?ExtensionAdditionalContextDraft
     */
    protected $additionalContext;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?ExtensionDestination $destination = null,
        ?ExtensionTriggerCollection $triggers = null,
        ?int $timeoutInMs = null,
        ?ExtensionResourceIdentifierCollection $dependencies = null,
        ?array $expansionPaths = null,
        ?ExtensionAdditionalContextDraft $additionalContext = null
    ) {
        $this->key = $key;
        $this->destination = $destination;
        $this->triggers = $triggers;
        $this->timeoutInMs = $timeoutInMs;
        $this->dependencies = $dependencies;
        $this->expansionPaths = $expansionPaths;
        $this->additionalContext = $additionalContext;
    }

    /**
     * <p>User-defined unique identifier for the Extension.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Defines where the Extension can be reached.</p>
     *
     *
     * @return null|ExtensionDestination
     */
    public function getDestination()
    {
        if (is_null($this->destination)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DESTINATION);
            if (is_null($data)) {
                return null;
            }
            $className = ExtensionDestinationModel::resolveDiscriminatorClass($data);
            $this->destination = $className::of($data);
        }

        return $this->destination;
    }

    /**
     * <p>Describes what triggers the Extension.</p>
     *
     *
     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers()
    {
        if (is_null($this->triggers)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TRIGGERS);
            if (is_null($data)) {
                return null;
            }
            $this->triggers = ExtensionTriggerCollection::fromArray($data);
        }

        return $this->triggers;
    }

    /**
     * <p>Maximum time (in milliseconds) the Extension can respond within.
     * If no timeout is provided, the default value is used for all <a href="ctp:api:type:ExtensionResourceTypeId">types of Extensions</a>.
     * We recommend keeping the timeout as low as possible to avoid performance issues.</p>
     * <p>The limit of 10000 ms (10 seconds) can be increased per Project after we review the performance impact.
     * Please contact the <a href="https://support.commercetools.com">commercetools support team</a> and provide the Region, Project key, and use case.</p>
     *
     *
     * @return null|int
     */
    public function getTimeoutInMs()
    {
        if (is_null($this->timeoutInMs)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_TIMEOUT_IN_MS);
            if (is_null($data)) {
                return null;
            }
            $this->timeoutInMs = (int) $data;
        }

        return $this->timeoutInMs;
    }

    /**
     * <p>Extensions that must complete before this Extension is called, identified by <code>id</code> or <code>key</code>. Maximum 5 entries. If omitted, the Extension has no dependencies and may run concurrently with other independent Extensions.</p>
     *
     *
     * @return null|ExtensionResourceIdentifierCollection
     */
    public function getDependencies()
    {
        if (is_null($this->dependencies)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_DEPENDENCIES);
            if (is_null($data)) {
                return null;
            }
            $this->dependencies = ExtensionResourceIdentifierCollection::fromArray($data);
        }

        return $this->dependencies;
    }

    /**
     * <p><a href="/api/general-concepts#expansion-paths">Expansion paths</a> used for reference expansion of the payload.</p>
     * <p>Be aware of the <a href="/api/limits#api-extensions">limits</a> of this feature and its <a href="/api/performance-tips#api-extensions">performance impact</a>.</p>
     *
     *
     * @return null|array
     */
    public function getExpansionPaths()
    {
        if (is_null($this->expansionPaths)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_EXPANSION_PATHS);
            if (is_null($data)) {
                return null;
            }
            $this->expansionPaths = $data;
        }

        return $this->expansionPaths;
    }

    /**
     * <p>Configures additional information included in the payload sent to the API Extension.</p>
     *
     *
     * @return null|ExtensionAdditionalContextDraft
     */
    public function getAdditionalContext()
    {
        if (is_null($this->additionalContext)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ADDITIONAL_CONTEXT);
            if (is_null($data)) {
                return null;
            }

            $this->additionalContext = ExtensionAdditionalContextDraftModel::of($data);
        }

        return $this->additionalContext;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?ExtensionDestination $destination
     */
    public function setDestination(?ExtensionDestination $destination): void
    {
        $this->destination = $destination;
    }

    /**
     * @param ?ExtensionTriggerCollection $triggers
     */
    public function setTriggers(?ExtensionTriggerCollection $triggers): void
    {
        $this->triggers = $triggers;
    }

    /**
     * @param ?int $timeoutInMs
     */
    public function setTimeoutInMs(?int $timeoutInMs): void
    {
        $this->timeoutInMs = $timeoutInMs;
    }

    /**
     * @param ?ExtensionResourceIdentifierCollection $dependencies
     */
    public function setDependencies(?ExtensionResourceIdentifierCollection $dependencies): void
    {
        $this->dependencies = $dependencies;
    }

    /**
     * @param ?array $expansionPaths
     */
    public function setExpansionPaths(?array $expansionPaths): void
    {
        $this->expansionPaths = $expansionPaths;
    }

    /**
     * @param ?ExtensionAdditionalContextDraft $additionalContext
     */
    public function setAdditionalContext(?ExtensionAdditionalContextDraft $additionalContext): void
    {
        $this->additionalContext = $additionalContext;
    }
}
