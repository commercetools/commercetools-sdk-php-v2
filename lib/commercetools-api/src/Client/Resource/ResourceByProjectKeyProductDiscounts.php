<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ProductDiscount\ProductDiscountDraft;
use Commercetools\Client\ApiResource;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyProductDiscounts extends ApiResource
{
    public function matching(): ResourceByProjectKeyProductDiscountsMatching
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductDiscountsMatching($this->getUri().'/matching', $args, $this->getClient());
    }

    public function withKey(string $key = null): ResourceByProjectKeyProductDiscountsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyProductDiscountsKeyByKey($this->getUri().'/key={key}', $args, $this->getClient());
    }

    public function withId(string $ID = null): ResourceByProjectKeyProductDiscountsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyProductDiscountsByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductDiscountsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductDiscountsGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?ProductDiscountDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductDiscountDraft $body = null, array $headers = []): ByProjectKeyProductDiscountsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductDiscountsPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
