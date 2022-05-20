<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\MyCustomerSignin;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMeLogin extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/login', $args, $client);
    }

    /**
     * @psalm-param ?MyCustomerSignin $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyCustomerSignin $body = null, array $headers = []): ByProjectKeyMeLoginPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeLoginPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
