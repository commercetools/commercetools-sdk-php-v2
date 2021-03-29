<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\CustomerCreatePasswordResetToken;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCustomersPasswordToken extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/customers/password-token', $args, $client);
    }

    /**
     * @psalm-param ?CustomerCreatePasswordResetToken $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerCreatePasswordResetToken$body = null, array $headers = []): ByProjectKeyCustomersPasswordTokenPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersPasswordTokenPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
