<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null) {
        parent::__construct('/{projectKey}', $args, $client);
    }

    public function withResourceTypeValue(string $resourceType = null): ResourceByProjectKeyByResourceType
    {
        $args = $this->getArgs();
        if (!is_null($resourceType)) {
            $args['resourceType'] = $resourceType;
        }

        return new ResourceByProjectKeyByResourceType($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyGet($args['projectKey'], $body, $headers, $this->getClient());
    }

}
