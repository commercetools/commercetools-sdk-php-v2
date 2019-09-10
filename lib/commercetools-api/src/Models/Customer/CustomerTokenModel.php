<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use DateTimeImmutable;
use DateTimeImmutableModel;

final class CustomerTokenModel extends JsonObjectModel implements CustomerToken
{
    
    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $customerId = null,
        string $id = null,
        string $value = null,
        DateTimeImmutable $expiresAt = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->customerId = $customerId;
        $this->id = $id;
        $this->value = $value;
        $this->expiresAt = $expiresAt;
        
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
    protected $customerId;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?string
     */
    protected $value;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $expiresAt;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       if (is_null($this->createdAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerToken::FIELD_CREATED_AT);
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
           $data = $this->raw(CustomerToken::FIELD_LAST_MODIFIED_AT);
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
    final public function getCustomerId()
    {
       if (is_null($this->customerId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerToken::FIELD_CUSTOMER_ID);
           if (is_null($data)) {
               return null;
           }
           $this->customerId = (string)$data;
       }
       return $this->customerId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerToken::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getValue()
    {
       if (is_null($this->value)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerToken::FIELD_VALUE);
           if (is_null($data)) {
               return null;
           }
           $this->value = (string)$data;
       }
       return $this->value;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getExpiresAt()
    {
       if (is_null($this->expiresAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerToken::FIELD_EXPIRES_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->expiresAt = $data;
       }
       return $this->expiresAt;
    }
    final public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    
    final public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }
    
    final public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setValue(?string $value): void
    {
        $this->value = $value;
    }
    
    final public function setExpiresAt(?DateTimeImmutable $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[CustomerToken::FIELD_CREATED_AT]) && $data[CustomerToken::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
           $data[CustomerToken::FIELD_CREATED_AT] = $data[CustomerToken::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[CustomerToken::FIELD_LAST_MODIFIED_AT]) && $data[CustomerToken::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
           $data[CustomerToken::FIELD_LAST_MODIFIED_AT] = $data[CustomerToken::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[CustomerToken::FIELD_EXPIRES_AT]) && $data[CustomerToken::FIELD_EXPIRES_AT] instanceof \DateTimeImmutable) {
           $data[CustomerToken::FIELD_EXPIRES_AT] = $data[CustomerToken::FIELD_EXPIRES_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}