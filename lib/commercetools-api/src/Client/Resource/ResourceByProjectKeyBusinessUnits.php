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
class ResourceByProjectKeyBusinessUnits extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/business-units', $args, $client);
    }

    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyBusinessUnitsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyBusinessUnitsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyBusinessUnitsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyBusinessUnitsByID($args, $this->getClient());
    }
    /**
     */
    public function search(): ResourceByProjectKeyBusinessUnitsSearch
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyBusinessUnitsSearch($args, $this->getClient());
    }
    /**
     */
    public function searchIndexingStatus(): ResourceByProjectKeyBusinessUnitsSearchIndexingStatus
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyBusinessUnitsSearchIndexingStatus($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyBusinessUnitsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyBusinessUnitsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyBusinessUnitsHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyBusinessUnitsHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?BusinessUnitDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?BusinessUnitDraft $body = null, array $headers = []): ByProjectKeyBusinessUnitsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyBusinessUnitsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
