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
use DateTimeImmutable;

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
     * @var LastModifiedBy|?LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**
     * @var CreatedBy|?CreatedByBuilder
     */
    private $createdBy;

    /**
     * @var ?int
     */
    private $sequenceNumber;

    /**
     * @var Reference|?ReferenceBuilder
     */
    private $resource;

    /**
     * @var ?int
     */
    private $resourceVersion;

    /**
     * @var UserProvidedIdentifiers|?UserProvidedIdentifiersBuilder
     */
    private $resourceUserProvidedIdentifiers;

    /**
     * @var StateReference|?StateReferenceBuilder
     */
    private $oldState;

    /**
     * @var StateReference|?StateReferenceBuilder
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
     * @var Reference|?ReferenceBuilder
     */
    private $target;

    /**
     * @var ?bool
     */
    private $force;

    /**
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
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
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
     * @return null|StateReference
     */
    public function getOldState()
    {
        return $this->oldState instanceof StateReferenceBuilder ? $this->oldState->build() : $this->oldState;
    }

    /**
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
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSequenceNumber(?int $sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResource(?Reference $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceVersion(?int $resourceVersion)
    {
        $this->resourceVersion = $resourceVersion;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers)
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldState(?StateReference $oldState)
    {
        $this->oldState = $oldState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNewState(?StateReference $newState)
    {
        $this->newState = $newState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldIncludedInStatistics(?bool $oldIncludedInStatistics)
    {
        $this->oldIncludedInStatistics = $oldIncludedInStatistics;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNewIncludedInStatistics(?bool $newIncludedInStatistics)
    {
        $this->newIncludedInStatistics = $newIncludedInStatistics;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTarget(?Reference $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @return $this
     */
    public function withForce(?bool $force)
    {
        $this->force = $force;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceBuilder(?ReferenceBuilder $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceUserProvidedIdentifiersBuilder(?UserProvidedIdentifiersBuilder $resourceUserProvidedIdentifiers)
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldStateBuilder(?StateReferenceBuilder $oldState)
    {
        $this->oldState = $oldState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNewStateBuilder(?StateReferenceBuilder $newState)
    {
        $this->newState = $newState;

        return $this;
    }

    /**
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
            ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy),
            ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy),
            $this->sequenceNumber,
            ($this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource),
            $this->resourceVersion,
            ($this->resourceUserProvidedIdentifiers instanceof UserProvidedIdentifiersBuilder ? $this->resourceUserProvidedIdentifiers->build() : $this->resourceUserProvidedIdentifiers),
            ($this->oldState instanceof StateReferenceBuilder ? $this->oldState->build() : $this->oldState),
            ($this->newState instanceof StateReferenceBuilder ? $this->newState->build() : $this->newState),
            $this->oldIncludedInStatistics,
            $this->newIncludedInStatistics,
            ($this->target instanceof ReferenceBuilder ? $this->target->build() : $this->target),
            $this->force
        );
    }

    public static function of(): ReviewStateTransitionMessageBuilder
    {
        return new self();
    }
}
