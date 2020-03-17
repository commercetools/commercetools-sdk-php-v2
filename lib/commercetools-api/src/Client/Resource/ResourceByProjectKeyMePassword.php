<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMePassword extends ApiResource
{
    /**
     * @psalm-param array<string, scalar> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/password', $args, $client);
    }

    public function reset(): ResourceByProjectKeyMePasswordReset
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMePasswordReset($args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post($body = null, array $headers = []): ByProjectKeyMePasswordPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMePasswordPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
