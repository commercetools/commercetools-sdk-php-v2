<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\CustomerSignin;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyLogin extends ApiResource
{
    /**
     * @psalm-param ?CustomerSignin $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerSignin $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyLoginPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyLoginPost((string) $args['projectKey'], (string) $args['storeKey'], $body, $headers, $this->getClient());
    }
}
