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
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class OrderCustomerSetMessageModel extends JsonObjectModel implements OrderCustomerSetMessage
{
    const DISCRIMINATOR_VALUE = 'OrderCustomerSet';
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
        CustomerGroupReference $oldCustomerGroup = null,
        CustomerGroupReference $customerGroup = null,
        CustomerReference $oldCustomer = null,
        CustomerReference $customer = null
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
        $this->oldCustomerGroup = $oldCustomerGroup;
        $this->customerGroup = $customerGroup;
        $this->oldCustomer = $oldCustomer;
        $this->customer = $customer;
        
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
     * @var ?CustomerGroupReference
     */
    protected $oldCustomerGroup;
    
    /**
     * @var ?CustomerGroupReference
     */
    protected $customerGroup;
    
    /**
     * @var ?CustomerReference
     */
    protected $oldCustomer;
    
    /**
     * @var ?CustomerReference
     */
    protected $customer;

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
     * @return CustomerGroupReference|null
     */
    final public function getOldCustomerGroup()
    {
       if (is_null($this->oldCustomerGroup)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderCustomerSetMessage::FIELD_OLD_CUSTOMER_GROUP);
           if (is_null($data)) {
               return null;
           }
           
           $this->oldCustomerGroup = CustomerGroupReferenceModel::of($data);
       }
       return $this->oldCustomerGroup;
    }
    
    /**
     *
     * @return CustomerGroupReference|null
     */
    final public function getCustomerGroup()
    {
       if (is_null($this->customerGroup)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderCustomerSetMessage::FIELD_CUSTOMER_GROUP);
           if (is_null($data)) {
               return null;
           }
           
           $this->customerGroup = CustomerGroupReferenceModel::of($data);
       }
       return $this->customerGroup;
    }
    
    /**
     *
     * @return CustomerReference|null
     */
    final public function getOldCustomer()
    {
       if (is_null($this->oldCustomer)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderCustomerSetMessage::FIELD_OLD_CUSTOMER);
           if (is_null($data)) {
               return null;
           }
           
           $this->oldCustomer = CustomerReferenceModel::of($data);
       }
       return $this->oldCustomer;
    }
    
    /**
     *
     * @return CustomerReference|null
     */
    final public function getCustomer()
    {
       if (is_null($this->customer)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderCustomerSetMessage::FIELD_CUSTOMER);
           if (is_null($data)) {
               return null;
           }
           
           $this->customer = CustomerReferenceModel::of($data);
       }
       return $this->customer;
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
    
    final public function setOldCustomerGroup(?CustomerGroupReference $oldCustomerGroup): void
    {
        $this->oldCustomerGroup = $oldCustomerGroup;
    }
    
    final public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }
    
    final public function setOldCustomer(?CustomerReference $oldCustomer): void
    {
        $this->oldCustomer = $oldCustomer;
    }
    
    final public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
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