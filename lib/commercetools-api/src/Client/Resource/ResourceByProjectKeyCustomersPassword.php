<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\CustomerChangePassword;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCustomersPassword extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/customers/password', $args, $client);
    }

    /**
     * @psalm-param ?CustomerChangePassword $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerChangePassword $body = null, array $headers = []): ByProjectKeyCustomersPasswordPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersPasswordPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
