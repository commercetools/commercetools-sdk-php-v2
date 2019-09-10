<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyMeLogin extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function post($body = null, array $headers = []): ByProjectKeyMeLoginPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeLoginPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
