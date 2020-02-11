<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class ReviewStateTransitionMessageModel extends JsonObjectModel implements ReviewStateTransitionMessage
{
    public const DISCRIMINATOR_VALUE = 'ReviewStateTransition';
    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     * @var ?int
     */
    protected $sequenceNumber;

    /**
     * @var ?Reference
     */
    protected $resource;

    /**
     * @var ?int
     */
    protected $resourceVersion;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?UserProvidedIdentifiers
     */
    protected $resourceUserProvidedIdentifiers;

    /**
     * @var ?StateReference
     */
    protected $oldState;

    /**
     * @var ?StateReference
     */
    protected $newState;

    /**
     * @var ?bool
     */
    protected $oldIncludedInStatistics;

    /**
     * @var ?bool
     */
    protected $newIncludedInStatistics;

    /**
     * @var ?Reference
     */
    protected $target;

    /**
     * @var ?bool
     */
    protected $force;


    public function __construct(
        string $id = null,
        int $version = null,
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        LastModifiedBy $lastModifiedBy = null,
        CreatedBy $createdBy = null,
        int $sequenceNumber = null,
        Reference $resource = null,
        int $resourceVersion = null,
        UserProvidedIdentifiers $resourceUserProvidedIdentifiers = null,
        StateReference $oldState = null,
        StateReference $newState = null,
        bool $oldIncludedInStatistics = null,
        bool $newIncludedInStatistics = null,
        Reference $target = null,
        bool $force = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->sequenceNumber = $sequenceNumber;
        $this->resource = $resource;
        $this->resourceVersion = $resourceVersion;
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
        $this->oldState = $oldState;
        $this->newState = $newState;
        $this->oldIncludedInStatistics = $oldIncludedInStatistics;
        $this->newIncludedInStatistics = $newIncludedInStatistics;
        $this->target = $target;
        $this->force = $force;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Message::FIELD_ID);
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
            $data = $this->raw(Message::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Message::FIELD_CREATED_AT);
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
            $data = $this->raw(Message::FIELD_LAST_MODIFIED_AT);
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
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Message::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Message::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
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

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function setSequenceNumber(?int $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    public function setResource(?Reference $resource): void
    {
        $this->resource = $resource;
    }

    public function setResourceVersion(?int $resourceVersion): void
    {
        $this->resourceVersion = $resourceVersion;
    }

    public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
    }

    public function setOldState(?StateReference $oldState): void
    {
        $this->oldState = $oldState;
    }

    public function setNewState(?StateReference $newState): void
    {
        $this->newState = $newState;
    }

    public function setOldIncludedInStatistics(?bool $oldIncludedInStatistics): void
    {
        $this->oldIncludedInStatistics = $oldIncludedInStatistics;
    }

    public function setNewIncludedInStatistics(?bool $newIncludedInStatistics): void
    {
        $this->newIncludedInStatistics = $newIncludedInStatistics;
    }

    public function setTarget(?Reference $target): void
    {
        $this->target = $target;
    }

    public function setForce(?bool $force): void
    {
        $this->force = $force;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Message::FIELD_CREATED_AT]) && $data[Message::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Message::FIELD_CREATED_AT] = $data[Message::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Message::FIELD_LAST_MODIFIED_AT]) && $data[Message::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Message::FIELD_LAST_MODIFIED_AT] = $data[Message::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }

}
