<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyMePassword extends ApiResource
{
    public function reset(): ResourceByProjectKeyMePasswordReset
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMePasswordReset($this->getUri().'/reset', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function post($body = null, array $headers = []): ByProjectKeyMePasswordPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMePasswordPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
