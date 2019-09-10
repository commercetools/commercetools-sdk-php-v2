<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class ReviewStateTransitionMessageModel extends JsonObjectModel implements ReviewStateTransitionMessage
{
    const DISCRIMINATOR_VALUE = 'ReviewStateTransition';
    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
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

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       if (is_null($this->createdAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(BaseResource::FIELD_CREATED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->createdAt = $data;
       }
       return $this->createdAt;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getLastModifiedAt()
    {
       if (is_null($this->lastModifiedAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(BaseResource::FIELD_LAST_MODIFIED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->lastModifiedAt = $data;
       }
       return $this->lastModifiedAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(BaseResource::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       if (is_null($this->version)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(BaseResource::FIELD_VERSION);
           if (is_null($data)) {
               return null;
           }
           $this->version = (int)$data;
       }
       return $this->version;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getSequenceNumber()
    {
       if (is_null($this->sequenceNumber)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(Message::FIELD_SEQUENCE_NUMBER);
           if (is_null($data)) {
               return null;
           }
           $this->sequenceNumber = (int)$data;
       }
       return $this->sequenceNumber;
    }
    
    /**
     *
     * @return Reference|null
     */
    final public function getResource()
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
     *
     * @return UserProvidedIdentifiers|null
     */
    final public function getResourceUserProvidedIdentifiers()
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
     *
     * @return int|null
     */
    final public function getResourceVersion()
    {
       if (is_null($this->resourceVersion)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(Message::FIELD_RESOURCE_VERSION);
           if (is_null($data)) {
               return null;
           }
           $this->resourceVersion = (int)$data;
       }
       return $this->resourceVersion;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Message::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getNewIncludedInStatistics()
    {
       if (is_null($this->newIncludedInStatistics)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ReviewStateTransitionMessage::FIELD_NEW_INCLUDED_IN_STATISTICS);
           if (is_null($data)) {
               return null;
           }
           $this->newIncludedInStatistics = (bool)$data;
       }
       return $this->newIncludedInStatistics;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getOldState()
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
     *
     * @return bool|null
     */
    final public function getForce()
    {
       if (is_null($this->force)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ReviewStateTransitionMessage::FIELD_FORCE);
           if (is_null($data)) {
               return null;
           }
           $this->force = (bool)$data;
       }
       return $this->force;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getOldIncludedInStatistics()
    {
       if (is_null($this->oldIncludedInStatistics)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ReviewStateTransitionMessage::FIELD_OLD_INCLUDED_IN_STATISTICS);
           if (is_null($data)) {
               return null;
           }
           $this->oldIncludedInStatistics = (bool)$data;
       }
       return $this->oldIncludedInStatistics;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getNewState()
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
     *
     * @return Reference|null
     */
    final public function getTarget()
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
    final public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    
    final public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
    
    final public function setSequenceNumber(?int $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }
    
    final public function setResource(?Reference $resource): void
    {
        $this->resource = $resource;
    }
    
    final public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
    }
    
    final public function setResourceVersion(?int $resourceVersion): void
    {
        $this->resourceVersion = $resourceVersion;
    }
    
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setNewIncludedInStatistics(?bool $newIncludedInStatistics): void
    {
        $this->newIncludedInStatistics = $newIncludedInStatistics;
    }
    
    final public function setOldState(?StateReference $oldState): void
    {
        $this->oldState = $oldState;
    }
    
    final public function setForce(?bool $force): void
    {
        $this->force = $force;
    }
    
    final public function setOldIncludedInStatistics(?bool $oldIncludedInStatistics): void
    {
        $this->oldIncludedInStatistics = $oldIncludedInStatistics;
    }
    
    final public function setNewState(?StateReference $newState): void
    {
        $this->newState = $newState;
    }
    
    final public function setTarget(?Reference $target): void
    {
        $this->target = $target;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[BaseResource::FIELD_CREATED_AT]) && $data[BaseResource::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
           $data[BaseResource::FIELD_CREATED_AT] = $data[BaseResource::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[BaseResource::FIELD_LAST_MODIFIED_AT]) && $data[BaseResource::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
           $data[BaseResource::FIELD_LAST_MODIFIED_AT] = $data[BaseResource::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}