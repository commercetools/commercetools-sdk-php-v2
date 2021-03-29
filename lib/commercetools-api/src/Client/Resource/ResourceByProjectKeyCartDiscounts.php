<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\CartDiscount\CartDiscountDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCartDiscounts extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/cart-discounts', $args, $client);
    }

    public function withKey(string $key = null): ResourceByProjectKeyCartDiscountsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyCartDiscountsKeyByKey($args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyCartDiscountsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyCartDiscountsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyCartDiscountsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartDiscountsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CartDiscountDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CartDiscountDraft$body = null, array $headers = []): ByProjectKeyCartDiscountsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartDiscountsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
