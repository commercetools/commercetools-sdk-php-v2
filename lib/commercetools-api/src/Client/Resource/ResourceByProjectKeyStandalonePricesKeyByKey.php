<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\StandalonePrice\StandalonePriceUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyStandalonePricesKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/standalone-prices/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyStandalonePricesKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyStandalonePricesKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyStandalonePricesKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyStandalonePricesKeyByKeyHead($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?StandalonePriceUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?StandalonePriceUpdate $body = null, array $headers = []): ByProjectKeyStandalonePricesKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyStandalonePricesKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyStandalonePricesKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyStandalonePricesKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
