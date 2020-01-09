<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\CartDiscount\CartDiscountUpdate;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyCartDiscountsKeyByKey extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyCartDiscountsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartDiscountsKeyByKeyGet((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?CartDiscountUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CartDiscountUpdate $body = null, array $headers = []): ByProjectKeyCartDiscountsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartDiscountsKeyByKeyPost((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function delete($body = null, array $headers = []): ByProjectKeyCartDiscountsKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartDiscountsKeyByKeyDelete((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }
}
