<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Customer\CustomerReference;

interface ClientLogging extends JsonObject
{

    public const FIELD_CLIENT_ID = 'clientId';
    public const FIELD_EXTERNAL_USER_ID = 'externalUserId';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';

    /**
     * @return null|string
     */
    public function getClientId();

    /**
     * @return null|string
     */
    public function getExternalUserId();

    /**
     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * @return null|string
     */
    public function getAnonymousId();

    public function setClientId(?string $clientId): void;

    public function setExternalUserId(?string $externalUserId): void;

    public function setCustomer(?CustomerReference $customer): void;

    public function setAnonymousId(?string $anonymousId): void;
}
