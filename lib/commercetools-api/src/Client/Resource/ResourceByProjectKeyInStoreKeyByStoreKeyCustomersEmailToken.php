<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Customer\CustomerCreateEmailToken;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailToken extends ApiResource
{
    /**
     * @psalm-param ?CustomerCreateEmailToken $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerCreateEmailToken $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenPost((string) $args['projectKey'], (string) $args['storeKey'], $body, $headers, $this->getClient());
    }

}
