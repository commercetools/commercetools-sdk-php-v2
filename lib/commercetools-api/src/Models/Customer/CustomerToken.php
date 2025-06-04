<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CustomerToken extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_CUSTOMER_ID = 'customerId';
    public const FIELD_VALUE = 'value';
    public const FIELD_EXPIRES_AT = 'expiresAt';
    public const FIELD_INVALIDATE_OLDER_TOKENS = 'invalidateOlderTokens';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';

    /**
     * <p>Unique identifier of the token.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>The <code>id</code> of the Customer.</p>
     *

     * @return null|string
     */
    public function getCustomerId();

    /**
     * <p>Value of the token.</p>
     *

     * @return null|string
     */
    public function getValue();

    /**
     * <p>Date and time (UTC) the token expires.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt();

    /**
     * <p>If <code>true</code>, all tokens issued previously for the Customer will be invalidated.</p>
     *

     * @return null|bool
     */
    public function getInvalidateOlderTokens();

    /**
     * <p>Date and time (UTC) the token was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>When the token is created, <code>lastModifiedAt</code> is set to <code>createdAt</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $customerId
     */
    public function setCustomerId(?string $customerId): void;

    /**
     * @param ?string $value
     */
    public function setValue(?string $value): void;

    /**
     * @param ?DateTimeImmutable $expiresAt
     */
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void;

    /**
     * @param ?bool $invalidateOlderTokens
     */
    public function setInvalidateOlderTokens(?bool $invalidateOlderTokens): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;
}
