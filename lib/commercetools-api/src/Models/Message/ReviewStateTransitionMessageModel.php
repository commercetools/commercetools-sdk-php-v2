<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class ReviewStateTransitionMessageModel extends JsonObjectModel implements ReviewStateTransitionMessage
{
    const DISCRIMINATOR_VALUE = 'ReviewStateTransition';

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     * @var ?int
     */
    protected $sequenceNumber;

    /**
     * @var ?Reference
     */
    protected $resource;

    /**
     * @var ?UserProvidedIdentifiers
     */
    protected $resourceUserProvidedIdentifiers;

    /**
     * @var ?int
     */
    protected $resourceVersion;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?bool
     */
    protected $newIncludedInStatistics;

    /**
     * @var ?StateReference
     */
    protected $oldState;

    /**
     * @var ?bool
     */
    protected $force;

    /**
     * @var ?bool
     */
    protected $oldIncludedInStatistics;

    /**
     * @var ?StateReference
     */
    protected $newState;

    /**
     * @var ?Reference
     */
    protected $target;

    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
        CreatedBy $createdBy = null,
        LastModifiedBy $lastModifiedBy = null,
        int $sequenceNumber = null,
        Reference $resource = null,
        UserProvidedIdentifiers $resourceUserProvidedIdentifiers = null,
        int $resourceVersion = null,
        string $type = null,
        bool $newIncludedInStatistics = null,
        StateReference $oldState = null,
        bool $force = null,
        bool $oldIncludedInStatistics = null,
        StateReference $newState = null,
        Reference $target = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->id = $id;
        $this->version = $version;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->sequenceNumber = $sequenceNumber;
        $this->resource = $resource;
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
        $this->resourceVersion = $resourceVersion;
        $this->type = $type;
        $this->newIncludedInStatistics = $newIncludedInStatistics;
        $this->oldState = $oldState;
        $this->force = $force;
        $this->oldIncludedInStatistics = $oldIncludedInStatistics;
        $this->newState = $newState;
        $this->target = $target;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(BaseResource::FIELD_CREATED_AT);
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
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(BaseResource::FIELD_LAST_MODIFIED_AT);
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
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(BaseResource::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(BaseResource::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LoggedResource::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LoggedResource::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * @return null|int
     */
    public function getSequenceNumber()
    {
        if (is_null($this->sequenceNumber)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(Message::FIELD_SEQUENCE_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->sequenceNumber = (int) $data;
        }

        return $this->sequenceNumber;
    }

    /**
     * @return null|Reference
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Message::FIELD_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->resource = $className::of($data);
        }

        return $this->resource;
    }

    /**
     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers()
    {
        if (is_null($this->resourceUserProvidedIdentifiers)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Message::FIELD_RESOURCE_USER_PROVIDED_IDENTIFIERS);
            if (is_null($data)) {
                return null;
            }

            $this->resourceUserProvidedIdentifiers = UserProvidedIdentifiersModel::of($data);
        }

        return $this->resourceUserProvidedIdentifiers;
    }

    /**
     * @return null|int
     */
    public function getResourceVersion()
    {
        if (is_null($this->resourceVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(Message::FIELD_RESOURCE_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->resourceVersion = (int) $data;
        }

        return $this->resourceVersion;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Message::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|bool
     */
    public function getNewIncludedInStatistics()
    {
        if (is_null($this->newIncludedInStatistics)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ReviewStateTransitionMessage::FIELD_NEW_INCLUDED_IN_STATISTICS);
            if (is_null($data)) {
                return null;
            }
            $this->newIncludedInStatistics = (bool) $data;
        }

        return $this->newIncludedInStatistics;
    }

    /**
     * @return null|StateReference
     */
    public function getOldState()
    {
        if (is_null($this->oldState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ReviewStateTransitionMessage::FIELD_OLD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->oldState = StateReferenceModel::of($data);
        }

        return $this->oldState;
    }

    /**
     * @return null|bool
     */
    public function getForce()
    {
        if (is_null($this->force)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ReviewStateTransitionMessage::FIELD_FORCE);
            if (is_null($data)) {
                return null;
            }
            $this->force = (bool) $data;
        }

        return $this->force;
    }

    /**
     * @return null|bool
     */
    public function getOldIncludedInStatistics()
    {
        if (is_null($this->oldIncludedInStatistics)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ReviewStateTransitionMessage::FIELD_OLD_INCLUDED_IN_STATISTICS);
            if (is_null($data)) {
                return null;
            }
            $this->oldIncludedInStatistics = (bool) $data;
        }

        return $this->oldIncludedInStatistics;
    }

    /**
     * @return null|StateReference
     */
    public function getNewState()
    {
        if (is_null($this->newState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ReviewStateTransitionMessage::FIELD_NEW_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->newState = StateReferenceModel::of($data);
        }

        return $this->newState;
    }

    /**
     * @return null|Reference
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ReviewStateTransitionMessage::FIELD_TARGET);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->target = $className::of($data);
        }

        return $this->target;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    public function setSequenceNumber(?int $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    public function setResource(?Reference $resource): void
    {
        $this->resource = $resource;
    }

    public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
    }

    public function setResourceVersion(?int $resourceVersion): void
    {
        $this->resourceVersion = $resourceVersion;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setNewIncludedInStatistics(?bool $newIncludedInStatistics): void
    {
        $this->newIncludedInStatistics = $newIncludedInStatistics;
    }

    public function setOldState(?StateReference $oldState): void
    {
        $this->oldState = $oldState;
    }

    public function setForce(?bool $force): void
    {
        $this->force = $force;
    }

    public function setOldIncludedInStatistics(?bool $oldIncludedInStatistics): void
    {
        $this->oldIncludedInStatistics = $oldIncludedInStatistics;
    }

    public function setNewState(?StateReference $newState): void
    {
        $this->newState = $newState;
    }

    public function setTarget(?Reference $target): void
    {
        $this->target = $target;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[BaseResource::FIELD_CREATED_AT]) && $data[BaseResource::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[BaseResource::FIELD_CREATED_AT] = $data[BaseResource::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[BaseResource::FIELD_LAST_MODIFIED_AT]) && $data[BaseResource::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[BaseResource::FIELD_LAST_MODIFIED_AT] = $data[BaseResource::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
