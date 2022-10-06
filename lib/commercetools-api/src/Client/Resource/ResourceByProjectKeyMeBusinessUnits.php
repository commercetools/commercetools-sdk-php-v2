<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyBusinessUnitDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMeBusinessUnits extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/business-units', $args, $client);
    }

    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyMeBusinessUnitsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyMeBusinessUnitsByID($args, $this->getClient());
    }
    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyMeBusinessUnitsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyMeBusinessUnitsKeyByKey($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeBusinessUnitsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeBusinessUnitsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyBusinessUnitDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyBusinessUnitDraft $body = null, array $headers = []): ByProjectKeyMeBusinessUnitsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeBusinessUnitsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
