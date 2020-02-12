<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ProductDiscount\ProductDiscountMatchQuery;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyProductDiscountsMatching extends ApiResource
{
    /**
     * @psalm-param ?ProductDiscountMatchQuery $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductDiscountMatchQuery $body = null, array $headers = []): ByProjectKeyProductDiscountsMatchingPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductDiscountsMatchingPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
