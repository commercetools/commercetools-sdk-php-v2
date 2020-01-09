<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyCustomersPasswordTokenByPasswordToken extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyCustomersPasswordTokenByPasswordTokenGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersPasswordTokenByPasswordTokenGet((string) $args['projectKey'], (string) $args['passwordToken'], $body, $headers, $this->getClient());
    }
}
