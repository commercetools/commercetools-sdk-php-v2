<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Base\JsonObject;

interface ClientLogging extends JsonObject
{
    const FIELD_CLIENT_ID = 'clientId';
    const FIELD_EXTERNAL_USER_ID = 'externalUserId';
    const FIELD_CUSTOMER = 'customer';
    const FIELD_ANONYMOUS_ID = 'anonymousId';

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
