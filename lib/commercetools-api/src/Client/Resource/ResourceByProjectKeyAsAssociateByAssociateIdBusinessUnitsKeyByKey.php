<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/as-associate/{associateId}/business-units/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyGet($args['projectKey'], $args['associateId'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyHead($args['projectKey'], $args['associateId'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?BusinessUnitUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?BusinessUnitUpdate $body = null, array $headers = []): ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost($args['projectKey'], $args['associateId'], $args['key'], $body, $headers, $this->getClient());
    }
}
