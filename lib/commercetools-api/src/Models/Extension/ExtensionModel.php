<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class ExtensionModel extends JsonObjectModel implements Extension
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     *
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     *
     * @var ?CreatedBy
     */
    protected $createdBy;

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
     * @var ?ExtensionReferenceCollection
     */
    protected $dependencies;

    /**
     *
     * @var ?array
     */
    protected $expansionPaths;

    /**
     *
     * @var ?ExtensionAdditionalContext
     */
    protected $additionalContext;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?LastModifiedBy $lastModifiedBy = null,
        ?CreatedBy $createdBy = null,
        ?string $key = null,
        ?ExtensionDestination $destination = null,
        ?ExtensionTriggerCollection $triggers = null,
        ?int $timeoutInMs = null,
        ?ExtensionReferenceCollection $dependencies = null,
        ?array $expansionPaths = null,
        ?ExtensionAdditionalContext $additionalContext = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->key = $key;
        $this->destination = $destination;
        $this->triggers = $triggers;
        $this->timeoutInMs = $timeoutInMs;
        $this->dependencies = $dependencies;
        $this->expansionPaths = $expansionPaths;
        $this->additionalContext = $additionalContext;
    }

    /**
     * <p>Unique identifier of the Extension.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Current version of the Extension.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Extension was initially created.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the Extension was last updated.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>IDs and references that last modified the Extension.</p>
     *
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the Extension.</p>
     *
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * <p>User-defined unique identifier of the Extension.</p>
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
     * <p>The configuration for the Extension, including its type, location and authentication details.</p>
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
     * <p>Maximum time (in milliseconds) that the Extension can respond within.
     * If no timeout is provided, the default value is used for all <a href="ctp:api:type:ExtensionResourceTypeId">types of Extensions</a>.</p>
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
     * <p>References to other Extensions that must complete before this Extension is called. The Extension receives the resource state after all transitive ancestors' update actions have been applied. Maximum 5 entries.</p>
     *
     *
     * @return null|ExtensionReferenceCollection
     */
    public function getDependencies()
    {
        if (is_null($this->dependencies)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_DEPENDENCIES);
            if (is_null($data)) {
                return null;
            }
            $this->dependencies = ExtensionReferenceCollection::fromArray($data);
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
     * @return null|ExtensionAdditionalContext
     */
    public function getAdditionalContext()
    {
        if (is_null($this->additionalContext)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ADDITIONAL_CONTEXT);
            if (is_null($data)) {
                return null;
            }

            $this->additionalContext = ExtensionAdditionalContextModel::of($data);
        }

        return $this->additionalContext;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
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
     * @param ?ExtensionReferenceCollection $dependencies
     */
    public function setDependencies(?ExtensionReferenceCollection $dependencies): void
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
     * @param ?ExtensionAdditionalContext $additionalContext
     */
    public function setAdditionalContext(?ExtensionAdditionalContext $additionalContext): void
    {
        $this->additionalContext = $additionalContext;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Extension::FIELD_CREATED_AT]) && $data[Extension::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Extension::FIELD_CREATED_AT] = $data[Extension::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Extension::FIELD_LAST_MODIFIED_AT]) && $data[Extension::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Extension::FIELD_LAST_MODIFIED_AT] = $data[Extension::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
