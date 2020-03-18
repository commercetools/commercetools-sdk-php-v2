<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\GraphQL\GraphQLRequest;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyGraphql extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/graphql', $args, $client);
    }

    /**
     * @psalm-param ?GraphQLRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?GraphQLRequest $body = null, array $headers = []): ByProjectKeyGraphqlPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyGraphqlPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
