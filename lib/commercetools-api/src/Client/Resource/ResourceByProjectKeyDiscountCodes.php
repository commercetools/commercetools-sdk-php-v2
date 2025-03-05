<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\DiscountCode\DiscountCodeDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyDiscountCodes extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/discount-codes', $args, $client);
    }

    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyDiscountCodesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyDiscountCodesByID($args, $this->getClient());
    }
    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyDiscountCodesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyDiscountCodesKeyByKey($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyDiscountCodesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountCodesGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyDiscountCodesHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountCodesHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?DiscountCodeDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?DiscountCodeDraft $body = null, array $headers = []): ByProjectKeyDiscountCodesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountCodesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
