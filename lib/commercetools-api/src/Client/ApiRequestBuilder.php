<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client;

use Commercetools\Api\Client\Resource\ResourceByProjectKey;
use Commercetools\Client\ApiResource;
use GuzzleHttp\Client;

/**
 * @psalm-immutable
 */
class ApiRequestBuilder extends ApiResource
{
    /**
     * @psalm-param array<string, scalar> $args
     */
    public function __construct(Client $client = null, array $args = [])
    {
        parent::__construct('', $args, $client);
    }

    public function withProjectKey(string $projectKey = null): ResourceByProjectKey
    {
        $args = $this->getArgs();
        if (!is_null($projectKey)) {
            $args['projectKey'] = $projectKey;
        }

        return new ResourceByProjectKey($this->getUri().'/{projectKey}', $args, $this->getClient());
    }
}
