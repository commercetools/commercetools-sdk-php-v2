<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<Extension>
 */
final class ExtensionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**

     * @var null|LastModifiedBy|LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**

     * @var null|CreatedBy|CreatedByBuilder
     */
    private $createdBy;

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

     * @var ?ExtensionReferenceCollection
     */
    private $dependencies;

    /**

     * @var ?array
     */
    private $expansionPaths;

    /**

     * @var null|ExtensionAdditionalContext|ExtensionAdditionalContextBuilder
     */
    private $additionalContext;

    /**
     * <p>Unique identifier of the Extension.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the Extension.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Extension was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the Extension was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>IDs and references that last modified the Extension.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the Extension.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>User-defined unique identifier of the Extension.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The configuration for the Extension, including its type, location and authentication details.</p>
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
     * <p>Maximum time (in milliseconds) that the Extension can respond within.
     * If no timeout is provided, the default value is used for all <a href="ctp:api:type:ExtensionResourceTypeId">types of Extensions</a>.</p>
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
     * <p>References to other Extensions that must complete before this Extension is called. The Extension receives the resource state after all transitive ancestors' update actions have been applied. Maximum 5 entries.</p>
     *

     * @return null|ExtensionReferenceCollection
     */
    public function getDependencies()
    {
        return $this->dependencies;
    }

    /**
     * <p><a href="/../api/general-concepts#expansion-paths">Expansion paths</a> used for reference expansion of the payload.</p>
     * <p>Be aware of the <a href="/../api/limits#api-extensions">limits</a> of this feature and its <a href="/../api/performance-tips#api-extensions">performance impact</a>.</p>
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

     * @return null|ExtensionAdditionalContext
     */
    public function getAdditionalContext()
    {
        return $this->additionalContext instanceof ExtensionAdditionalContextBuilder ? $this->additionalContext->build() : $this->additionalContext;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @param ?CreatedBy $createdBy
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
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
     * @param ?ExtensionReferenceCollection $dependencies
     * @return $this
     */
    public function withDependencies(?ExtensionReferenceCollection $dependencies)
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
     * @param ?ExtensionAdditionalContext $additionalContext
     * @return $this
     */
    public function withAdditionalContext(?ExtensionAdditionalContext $additionalContext)
    {
        $this->additionalContext = $additionalContext;

        return $this;
    }

    /**
     * @deprecated use withLastModifiedBy() instead
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @deprecated use withCreatedBy() instead
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

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
    public function withAdditionalContextBuilder(?ExtensionAdditionalContextBuilder $additionalContext)
    {
        $this->additionalContext = $additionalContext;

        return $this;
    }

    public function build(): Extension
    {
        return new ExtensionModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->key,
            $this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination,
            $this->triggers,
            $this->timeoutInMs,
            $this->dependencies,
            $this->expansionPaths,
            $this->additionalContext instanceof ExtensionAdditionalContextBuilder ? $this->additionalContext->build() : $this->additionalContext
        );
    }

    public static function of(): ExtensionBuilder
    {
        return new self();
    }
}
