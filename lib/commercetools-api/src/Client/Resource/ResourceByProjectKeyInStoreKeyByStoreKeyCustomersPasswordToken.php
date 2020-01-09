<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\CustomerCreatePasswordResetToken;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordToken extends ApiResource
{
    /**
     * @psalm-param ?CustomerCreatePasswordResetToken $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerCreatePasswordResetToken $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersPasswordTokenPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersPasswordTokenPost((string) $args['projectKey'], (string) $args['storeKey'], $body, $headers, $this->getClient());
    }
}
