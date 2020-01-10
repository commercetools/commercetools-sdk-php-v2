<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\CustomerChangePassword;
use Commercetools\Client\ApiResource;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPassword extends ApiResource
{
    public function reset(): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordReset
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordReset($this->getUri().'/reset', $args, $this->getClient());
    }

    /**
     * @psalm-param ?CustomerChangePassword $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerChangePassword $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersPasswordPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersPasswordPost((string) $args['projectKey'], (string) $args['storeKey'], $body, $headers, $this->getClient());
    }
}
