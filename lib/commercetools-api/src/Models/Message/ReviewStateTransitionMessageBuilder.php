<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<ReviewStateTransitionMessage>
 */
final class ReviewStateTransitionMessageBuilder implements Builder
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

     * @var ?int
     */
    private $sequenceNumber;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $resource;

    /**

     * @var ?int
     */
    private $resourceVersion;

    /**

     * @var null|UserProvidedIdentifiers|UserProvidedIdentifiersBuilder
     */
    private $resourceUserProvidedIdentifiers;

    /**

     * @var null|StateReference|StateReferenceBuilder
     */
    private $oldState;

    /**

     * @var null|StateReference|StateReferenceBuilder
     */
    private $newState;

    /**

     * @var ?bool
     */
    private $oldIncludedInStatistics;

    /**

     * @var ?bool
     */
    private $newIncludedInStatistics;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $target;

    /**

     * @var ?bool
     */
    private $force;

    /**
     * <p>Unique identifier of the Message.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**

     * @return null|int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * <p>A Reference represents a loose reference to another resource in the same Project identified by its <code>id</code>. The <code>typeId</code> indicates the type of the referenced resource. Each resource type has its corresponding Reference type, like <a href="ctp:api:type:ChannelReference">ChannelReference</a>.  A referenced resource can be embedded through <a href="/general-concepts#reference-expansion">Reference Expansion</a>. The expanded reference is the value of an additional <code>obj</code> field then.</p>
     *

     * @return null|Reference
     */
    public function getResource()
    {
        return $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource;
    }

    /**

     * @return null|int
     */
    public function getResourceVersion()
    {
        return $this->resourceVersion;
    }

    /**

     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers()
    {
        return $this->resourceUserProvidedIdentifiers instanceof UserProvidedIdentifiersBuilder ? $this->resourceUserProvidedIdentifiers->build() : $this->resourceUserProvidedIdentifiers;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *

     * @return null|StateReference
     */
    public function getOldState()
    {
        return $this->oldState instanceof StateReferenceBuilder ? $this->oldState->build() : $this->oldState;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *

     * @return null|StateReference
     */
    public function getNewState()
    {
        return $this->newState instanceof StateReferenceBuilder ? $this->newState->build() : $this->newState;
    }

    /**

     * @return null|bool
     */
    public function getOldIncludedInStatistics()
    {
        return $this->oldIncludedInStatistics;
    }

    /**

     * @return null|bool
     */
    public function getNewIncludedInStatistics()
    {
        return $this->newIncludedInStatistics;
    }

    /**
     * <p>A Reference represents a loose reference to another resource in the same Project identified by its <code>id</code>. The <code>typeId</code> indicates the type of the referenced resource. Each resource type has its corresponding Reference type, like <a href="ctp:api:type:ChannelReference">ChannelReference</a>.  A referenced resource can be embedded through <a href="/general-concepts#reference-expansion">Reference Expansion</a>. The expanded reference is the value of an additional <code>obj</code> field then.</p>
     *

     * @return null|Reference
     */
    public function getTarget()
    {
        return $this->target instanceof ReferenceBuilder ? $this->target->build() : $this->target;
    }

    /**

     * @return null|bool
     */
    public function getForce()
    {
        return $this->force;
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
     * @param ?int $sequenceNumber
     * @return $this
     */
    public function withSequenceNumber(?int $sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * @param ?Reference $resource
     * @return $this
     */
    public function withResource(?Reference $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @param ?int $resourceVersion
     * @return $this
     */
    public function withResourceVersion(?int $resourceVersion)
    {
        $this->resourceVersion = $resourceVersion;

        return $this;
    }

    /**
     * @param ?UserProvidedIdentifiers $resourceUserProvidedIdentifiers
     * @return $this
     */
    public function withResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers)
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;

        return $this;
    }

    /**
     * @param ?StateReference $oldState
     * @return $this
     */
    public function withOldState(?StateReference $oldState)
    {
        $this->oldState = $oldState;

        return $this;
    }

    /**
     * @param ?StateReference $newState
     * @return $this
     */
    public function withNewState(?StateReference $newState)
    {
        $this->newState = $newState;

        return $this;
    }

    /**
     * @param ?bool $oldIncludedInStatistics
     * @return $this
     */
    public function withOldIncludedInStatistics(?bool $oldIncludedInStatistics)
    {
        $this->oldIncludedInStatistics = $oldIncludedInStatistics;

        return $this;
    }

    /**
     * @param ?bool $newIncludedInStatistics
     * @return $this
     */
    public function withNewIncludedInStatistics(?bool $newIncludedInStatistics)
    {
        $this->newIncludedInStatistics = $newIncludedInStatistics;

        return $this;
    }

    /**
     * @param ?Reference $target
     * @return $this
     */
    public function withTarget(?Reference $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @param ?bool $force
     * @return $this
     */
    public function withForce(?bool $force)
    {
        $this->force = $force;

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
     * @deprecated use withResource() instead
     * @return $this
     */
    public function withResourceBuilder(?ReferenceBuilder $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @deprecated use withResourceUserProvidedIdentifiers() instead
     * @return $this
     */
    public function withResourceUserProvidedIdentifiersBuilder(?UserProvidedIdentifiersBuilder $resourceUserProvidedIdentifiers)
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;

        return $this;
    }

    /**
     * @deprecated use withOldState() instead
     * @return $this
     */
    public function withOldStateBuilder(?StateReferenceBuilder $oldState)
    {
        $this->oldState = $oldState;

        return $this;
    }

    /**
     * @deprecated use withNewState() instead
     * @return $this
     */
    public function withNewStateBuilder(?StateReferenceBuilder $newState)
    {
        $this->newState = $newState;

        return $this;
    }

    /**
     * @deprecated use withTarget() instead
     * @return $this
     */
    public function withTargetBuilder(?ReferenceBuilder $target)
    {
        $this->target = $target;

        return $this;
    }

    public function build(): ReviewStateTransitionMessage
    {
        return new ReviewStateTransitionMessageModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->sequenceNumber,
            $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource,
            $this->resourceVersion,
            $this->resourceUserProvidedIdentifiers instanceof UserProvidedIdentifiersBuilder ? $this->resourceUserProvidedIdentifiers->build() : $this->resourceUserProvidedIdentifiers,
            $this->oldState instanceof StateReferenceBuilder ? $this->oldState->build() : $this->oldState,
            $this->newState instanceof StateReferenceBuilder ? $this->newState->build() : $this->newState,
            $this->oldIncludedInStatistics,
            $this->newIncludedInStatistics,
            $this->target instanceof ReferenceBuilder ? $this->target->build() : $this->target,
            $this->force
        );
    }

    public static function of(): ReviewStateTransitionMessageBuilder
    {
        return new self();
    }
}
