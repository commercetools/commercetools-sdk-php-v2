<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\CartDiscount\CartDiscountUpdate;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyCartDiscountsByID extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyCartDiscountsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartDiscountsByIDGet((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CartDiscountUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CartDiscountUpdate $body = null, array $headers = []): ByProjectKeyCartDiscountsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartDiscountsByIDPost((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyCartDiscountsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartDiscountsByIDDelete((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
}
