<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CustomerToken extends JsonObject
{
    
    const FIELD_ID = 'id';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    const FIELD_CUSTOMER_ID = 'customerId';
    const FIELD_EXPIRES_AT = 'expiresAt';
    const FIELD_VALUE = 'value';

    /**
     *
     * @return string|null
     */
    public function getId();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getCreatedAt();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getLastModifiedAt();
    
    /**
     *
     * @return string|null
     */
    public function getCustomerId();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getExpiresAt();
    
    /**
     *
     * @return string|null
     */
    public function getValue();
    public function setId(?string $id): void;
    
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;
    
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;
    
    public function setCustomerId(?string $customerId): void;
    
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void;
    
    public function setValue(?string $value): void;
}