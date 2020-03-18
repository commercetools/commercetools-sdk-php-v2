<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ApiClient\ApiClientDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyApiClients extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/api-clients', $args, $client);
    }

    public function withId(string $ID = null): ResourceByProjectKeyApiClientsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyApiClientsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyApiClientsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyApiClientsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ApiClientDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ApiClientDraft $body = null, array $headers = []): ByProjectKeyApiClientsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyApiClientsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
