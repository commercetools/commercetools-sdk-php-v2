<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnits extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/as-associate/{associateId}/business-units', $args, $client);
    }

    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet($args['projectKey'], $args['associateId'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?BusinessUnitDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?BusinessUnitDraft $body = null, array $headers = []): ByProjectKeyAsAssociateByAssociateIdBusinessUnitsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyAsAssociateByAssociateIdBusinessUnitsPost($args['projectKey'], $args['associateId'], $body, $headers, $this->getClient());
    }
}
