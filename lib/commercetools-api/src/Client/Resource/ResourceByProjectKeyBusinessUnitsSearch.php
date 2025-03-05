<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\BusinessUnitSearch\BusinessUnitSearchRequest;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyBusinessUnitsSearch extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/business-units/search', $args, $client);
    }

    /**
     * @psalm-param ?BusinessUnitSearchRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?BusinessUnitSearchRequest $body = null, array $headers = []): ByProjectKeyBusinessUnitsSearchPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyBusinessUnitsSearchPost($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyBusinessUnitsSearchHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyBusinessUnitsSearchHead($args['projectKey'], $body, $headers, $this->getClient());
    }
}
