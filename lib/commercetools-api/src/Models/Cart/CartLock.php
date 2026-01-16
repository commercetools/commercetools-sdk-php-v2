<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CartLock extends JsonObject
{
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_CLIENT_ID = 'clientId';

    /**
     * <p>Date and time (UTC) the Cart was locked.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ApiClient">API Client</a> that locked the Cart.</p>
     *

     * @return null|string
     */
    public function getClientId();

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?string $clientId
     */
    public function setClientId(?string $clientId): void;
}
