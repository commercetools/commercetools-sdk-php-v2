<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ApiClient;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use DateTimeImmutable;
use DateTimeImmutableModel;

final class ApiClientModel extends JsonObjectModel implements ApiClient
{
    
    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $deleteAt = null,
        DateTimeImmutable $lastUsedAt = null,
        string $scope = null,
        string $name = null,
        string $secret = null,
        string $id = null
    ) {
        $this->createdAt = $createdAt;
        $this->deleteAt = $deleteAt;
        $this->lastUsedAt = $lastUsedAt;
        $this->scope = $scope;
        $this->name = $name;
        $this->secret = $secret;
        $this->id = $id;
        
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $deleteAt;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $lastUsedAt;
    
    /**
     * @var ?string
     */
    protected $scope;
    
    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $secret;
    
    /**
     * @var ?string
     */
    protected $id;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       if (is_null($this->createdAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ApiClient::FIELD_CREATED_AT);
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
    final public function getDeleteAt()
    {
       if (is_null($this->deleteAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ApiClient::FIELD_DELETE_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->deleteAt = $data;
       }
       return $this->deleteAt;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getLastUsedAt()
    {
       if (is_null($this->lastUsedAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ApiClient::FIELD_LAST_USED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->lastUsedAt = $data;
       }
       return $this->lastUsedAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getScope()
    {
       if (is_null($this->scope)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ApiClient::FIELD_SCOPE);
           if (is_null($data)) {
               return null;
           }
           $this->scope = (string)$data;
       }
       return $this->scope;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ApiClient::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->name = (string)$data;
       }
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSecret()
    {
       if (is_null($this->secret)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ApiClient::FIELD_SECRET);
           if (is_null($data)) {
               return null;
           }
           $this->secret = (string)$data;
       }
       return $this->secret;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ApiClient::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    final public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    
    final public function setDeleteAt(?DateTimeImmutable $deleteAt): void
    {
        $this->deleteAt = $deleteAt;
    }
    
    final public function setLastUsedAt(?DateTimeImmutable $lastUsedAt): void
    {
        $this->lastUsedAt = $lastUsedAt;
    }
    
    final public function setScope(?string $scope): void
    {
        $this->scope = $scope;
    }
    
    final public function setName(?string $name): void
    {
        $this->name = $name;
    }
    
    final public function setSecret(?string $secret): void
    {
        $this->secret = $secret;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[ApiClient::FIELD_CREATED_AT]) && $data[ApiClient::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
           $data[ApiClient::FIELD_CREATED_AT] = $data[ApiClient::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[ApiClient::FIELD_DELETE_AT]) && $data[ApiClient::FIELD_DELETE_AT] instanceof \DateTimeImmutable) {
           $data[ApiClient::FIELD_DELETE_AT] = $data[ApiClient::FIELD_DELETE_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[ApiClient::FIELD_LAST_USED_AT]) && $data[ApiClient::FIELD_LAST_USED_AT] instanceof \DateTimeImmutable) {
           $data[ApiClient::FIELD_LAST_USED_AT] = $data[ApiClient::FIELD_LAST_USED_AT]->format('Y-m-d');
        }
        return (object)$data;
    }
    
}