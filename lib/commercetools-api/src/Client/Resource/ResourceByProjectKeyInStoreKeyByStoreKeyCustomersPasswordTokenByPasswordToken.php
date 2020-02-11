<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordTokenByPasswordToken extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersPasswordTokenByPasswordTokenGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersPasswordTokenByPasswordTokenGet((string) $args['projectKey'], (string) $args['storeKey'], (string) $args['passwordToken'], $body, $headers, $this->getClient());
    }

}
