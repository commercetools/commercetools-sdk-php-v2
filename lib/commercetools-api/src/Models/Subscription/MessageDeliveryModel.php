<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Api\Models\Message\UserProvidedIdentifiers;
use Commercetools\Api\Models\Message\UserProvidedIdentifiersModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class MessageDeliveryModel extends JsonObjectModel implements MessageDelivery
{
    const DISCRIMINATOR_VALUE = 'Message';
    public function __construct(
        string $projectKey = null,
        Reference $resource = null,
        UserProvidedIdentifiers $resourceUserProvidedIdentifiers = null,
        string $notificationType = null,
        int $sequenceNumber = null,
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        int $resourceVersion = null,
        PayloadNotIncluded $payloadNotIncluded = null,
        string $id = null,
        int $version = null
    ) {
        $this->projectKey = $projectKey;
        $this->resource = $resource;
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
        $this->notificationType = $notificationType;
        $this->sequenceNumber = $sequenceNumber;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->resourceVersion = $resourceVersion;
        $this->payloadNotIncluded = $payloadNotIncluded;
        $this->id = $id;
        $this->version = $version;
        
    }

    /**
     * @var ?string
     */
    protected $projectKey;
    
    /**
     * @var ?Reference
     */
    protected $resource;
    
    /**
     * @var ?UserProvidedIdentifiers
     */
    protected $resourceUserProvidedIdentifiers;
    
    /**
     * @var ?string
     */
    protected $notificationType;
    
    /**
     * @var ?int
     */
    protected $sequenceNumber;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;
    
    /**
     * @var ?int
     */
    protected $resourceVersion;
    
    /**
     * @var ?PayloadNotIncluded
     */
    protected $payloadNotIncluded;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?int
     */
    protected $version;

    /**
     *
     * @return string|null
     */
    final public function getProjectKey()
    {
       if (is_null($this->projectKey)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(SubscriptionDelivery::FIELD_PROJECT_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->projectKey = (string)$data;
       }
       return $this->projectKey;
    }
    
    /**
     *
     * @return Reference|null
     */
    final public function getResource()
    {
       if (is_null($this->resource)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(SubscriptionDelivery::FIELD_RESOURCE);
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
           $data = $this->raw(SubscriptionDelivery::FIELD_RESOURCE_USER_PROVIDED_IDENTIFIERS);
           if (is_null($data)) {
               return null;
           }
           
           $this->resourceUserProvidedIdentifiers = UserProvidedIdentifiersModel::of($data);
       }
       return $this->resourceUserProvidedIdentifiers;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getNotificationType()
    {
       if (is_null($this->notificationType)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(SubscriptionDelivery::FIELD_NOTIFICATION_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->notificationType = (string)$data;
       }
       return $this->notificationType;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getSequenceNumber()
    {
       if (is_null($this->sequenceNumber)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(MessageDelivery::FIELD_SEQUENCE_NUMBER);
           if (is_null($data)) {
               return null;
           }
           $this->sequenceNumber = (int)$data;
       }
       return $this->sequenceNumber;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       if (is_null($this->createdAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessageDelivery::FIELD_CREATED_AT);
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
           $data = $this->raw(MessageDelivery::FIELD_LAST_MODIFIED_AT);
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
     * @return int|null
     */
    final public function getResourceVersion()
    {
       if (is_null($this->resourceVersion)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(MessageDelivery::FIELD_RESOURCE_VERSION);
           if (is_null($data)) {
               return null;
           }
           $this->resourceVersion = (int)$data;
       }
       return $this->resourceVersion;
    }
    
    /**
     *
     * @return PayloadNotIncluded|null
     */
    final public function getPayloadNotIncluded()
    {
       if (is_null($this->payloadNotIncluded)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(MessageDelivery::FIELD_PAYLOAD_NOT_INCLUDED);
           if (is_null($data)) {
               return null;
           }
           
           $this->payloadNotIncluded = PayloadNotIncludedModel::of($data);
       }
       return $this->payloadNotIncluded;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessageDelivery::FIELD_ID);
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
           $data = $this->raw(MessageDelivery::FIELD_VERSION);
           if (is_null($data)) {
               return null;
           }
           $this->version = (int)$data;
       }
       return $this->version;
    }
    final public function setProjectKey(?string $projectKey): void
    {
        $this->projectKey = $projectKey;
    }
    
    final public function setResource(?Reference $resource): void
    {
        $this->resource = $resource;
    }
    
    final public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
    }
    
    final public function setNotificationType(?string $notificationType): void
    {
        $this->notificationType = $notificationType;
    }
    
    final public function setSequenceNumber(?int $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }
    
    final public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    
    final public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }
    
    final public function setResourceVersion(?int $resourceVersion): void
    {
        $this->resourceVersion = $resourceVersion;
    }
    
    final public function setPayloadNotIncluded(?PayloadNotIncluded $payloadNotIncluded): void
    {
        $this->payloadNotIncluded = $payloadNotIncluded;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[MessageDelivery::FIELD_CREATED_AT]) && $data[MessageDelivery::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
           $data[MessageDelivery::FIELD_CREATED_AT] = $data[MessageDelivery::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[MessageDelivery::FIELD_LAST_MODIFIED_AT]) && $data[MessageDelivery::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
           $data[MessageDelivery::FIELD_LAST_MODIFIED_AT] = $data[MessageDelivery::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}