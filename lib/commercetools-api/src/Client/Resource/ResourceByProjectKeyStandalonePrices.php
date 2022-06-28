<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\StandalonePrice\StandalonePriceDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyStandalonePrices extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/standalone-prices', $args, $client);
    }

    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyStandalonePricesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyStandalonePricesKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyStandalonePricesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyStandalonePricesByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyStandalonePricesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyStandalonePricesGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?StandalonePriceDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?StandalonePriceDraft $body = null, array $headers = []): ByProjectKeyStandalonePricesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyStandalonePricesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
