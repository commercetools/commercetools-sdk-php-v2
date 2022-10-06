<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyBusinessUnitUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMeBusinessUnitsKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/business-units/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeBusinessUnitsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeBusinessUnitsKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyBusinessUnitUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyBusinessUnitUpdate $body = null, array $headers = []): ByProjectKeyMeBusinessUnitsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeBusinessUnitsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyMeBusinessUnitsKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeBusinessUnitsKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
