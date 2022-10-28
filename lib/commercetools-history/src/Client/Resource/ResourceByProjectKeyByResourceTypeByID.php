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
class ResourceByProjectKeyByResourceTypeByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null) {
        parent::__construct('/{projectKey}/{resourceType}/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers 
     */
    public function get($body = null, array $headers = []): ByProjectKeyByResourceTypeByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyByResourceTypeByIDGet($args['projectKey'], $args['resourceType'], $args['ID'], $body, $headers, $this->getClient());
    }

}
