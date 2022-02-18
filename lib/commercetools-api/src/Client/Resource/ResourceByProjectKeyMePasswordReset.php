<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\MyCustomerResetPassword;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMePasswordReset extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/password/reset', $args, $client);
    }

    /**
     * @psalm-param ?MyCustomerResetPassword $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyCustomerResetPassword $body = null, array $headers = []): ByProjectKeyMePasswordResetPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMePasswordResetPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
