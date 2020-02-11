<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use DateTimeImmutable;

interface CustomerToken extends JsonObject
{

    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    public const FIELD_CUSTOMER_ID = 'customerId';
    public const FIELD_EXPIRES_AT = 'expiresAt';
    public const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @return null|string
     */
    public function getCustomerId();

    /**
     * @return null|DateTimeImmutable
     */
    public function getExpiresAt();

    /**
     * @return null|string
     */
    public function getValue();

    public function setId(?string $id): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setCustomerId(?string $customerId): void;

    public function setExpiresAt(?DateTimeImmutable $expiresAt): void;

    public function setValue(?string $value): void;
}
