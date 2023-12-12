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
class ResourceByProjectKeyMeBusinessUnitsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/business-units/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeBusinessUnitsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeBusinessUnitsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyMeBusinessUnitsByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeBusinessUnitsByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyBusinessUnitUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyBusinessUnitUpdate $body = null, array $headers = []): ByProjectKeyMeBusinessUnitsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeBusinessUnitsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyMeBusinessUnitsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeBusinessUnitsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
