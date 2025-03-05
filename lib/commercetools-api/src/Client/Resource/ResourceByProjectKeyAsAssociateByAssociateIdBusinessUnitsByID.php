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
class ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/as-associate/{associateId}/business-units/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDGet($args['projectKey'], $args['associateId'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDHead($args['projectKey'], $args['associateId'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?BusinessUnitUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?BusinessUnitUpdate $body = null, array $headers = []): ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost($args['projectKey'], $args['associateId'], $args['ID'], $body, $headers, $this->getClient());
    }
}
