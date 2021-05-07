<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\CustomerSignin;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyLogin extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/login', $args, $client);
    }

    /**
     * @psalm-param ?CustomerSignin $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerSignin $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyLoginPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyLoginPost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}
