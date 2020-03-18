<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\CartDiscount\CartDiscountUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCartDiscountsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/cart-discounts/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyCartDiscountsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartDiscountsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CartDiscountUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CartDiscountUpdate $body = null, array $headers = []): ByProjectKeyCartDiscountsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartDiscountsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyCartDiscountsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartDiscountsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
