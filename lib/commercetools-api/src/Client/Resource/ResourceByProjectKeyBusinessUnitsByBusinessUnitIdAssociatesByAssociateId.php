<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyBusinessUnitsByBusinessUnitIdAssociatesByAssociateId extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/business-units/{businessUnitId}/associates/{associateId}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyBusinessUnitsByBusinessUnitIdAssociatesByAssociateIdGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyBusinessUnitsByBusinessUnitIdAssociatesByAssociateIdGet($args['projectKey'], $args['businessUnitId'], $args['associateId'], $body, $headers, $this->getClient());
    }
}
