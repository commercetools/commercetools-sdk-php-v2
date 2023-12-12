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
class ResourceByProjectKeyStandalonePricesByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/standalone-prices/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyStandalonePricesByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyStandalonePricesByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyStandalonePricesByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyStandalonePricesByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?StandalonePriceUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?StandalonePriceUpdate $body = null, array $headers = []): ByProjectKeyStandalonePricesByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyStandalonePricesByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyStandalonePricesByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyStandalonePricesByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
