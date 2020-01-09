<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\DiscountCode\DiscountCodeUpdate;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyDiscountCodesByID extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyDiscountCodesByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountCodesByIDGet((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?DiscountCodeUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?DiscountCodeUpdate $body = null, array $headers = []): ByProjectKeyDiscountCodesByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountCodesByIDPost((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function delete($body = null, array $headers = []): ByProjectKeyDiscountCodesByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountCodesByIDDelete((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
}
