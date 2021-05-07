<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ProductDiscount\ProductDiscountDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductDiscounts extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/product-discounts', $args, $client);
    }

    public function matching(): ResourceByProjectKeyProductDiscountsMatching
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductDiscountsMatching($args, $this->getClient());
    }
    public function withKey(string $key = null): ResourceByProjectKeyProductDiscountsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyProductDiscountsKeyByKey($args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyProductDiscountsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyProductDiscountsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductDiscountsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductDiscountsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ProductDiscountDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductDiscountDraft $body = null, array $headers = []): ByProjectKeyProductDiscountsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductDiscountsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
