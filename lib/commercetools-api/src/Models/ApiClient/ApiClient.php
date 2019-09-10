<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ApiClient;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ApiClient extends JsonObject
{
    
    const FIELD_ID = 'id';
    const FIELD_NAME = 'name';
    const FIELD_SCOPE = 'scope';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_LAST_USED_AT = 'lastUsedAt';
    const FIELD_DELETE_AT = 'deleteAt';
    const FIELD_SECRET = 'secret';

    /**
     *
     * @return string|null
     */
    public function getId();
    
    /**
     *
     * @return string|null
     */
    public function getName();
    
    /**
     *
     * @return string|null
     */
    public function getScope();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getCreatedAt();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getLastUsedAt();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getDeleteAt();
    
    /**
     *
     * @return string|null
     */
    public function getSecret();
    public function setId(?string $id): void;
    
    public function setName(?string $name): void;
    
    public function setScope(?string $scope): void;
    
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;
    
    public function setLastUsedAt(?DateTimeImmutable $lastUsedAt): void;
    
    public function setDeleteAt(?DateTimeImmutable $deleteAt): void;
    
    public function setSecret(?string $secret): void;
}