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
class ResourceByProjectKeyInStoreKeyByStoreKeyBusinessUnitsByBusinessUnitIdAssociatesByAssociateId extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/business-units/{businessUnitId}/associates/{associateId}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsByBusinessUnitIdAssociatesByAssociateIdGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyBusinessUnitsByBusinessUnitIdAssociatesByAssociateIdGet($args['projectKey'], $args['storeKey'], $args['businessUnitId'], $args['associateId'], $body, $headers, $this->getClient());
    }
}
