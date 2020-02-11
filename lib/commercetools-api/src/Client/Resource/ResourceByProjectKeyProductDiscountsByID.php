<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountUpdate;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyProductDiscountsByID extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductDiscountsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductDiscountsByIDGet((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ProductDiscountUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductDiscountUpdate $body = null, array $headers = []): ByProjectKeyProductDiscountsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductDiscountsByIDPost((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyProductDiscountsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductDiscountsByIDDelete((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }

}
