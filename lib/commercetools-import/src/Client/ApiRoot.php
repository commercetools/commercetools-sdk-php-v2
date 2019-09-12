<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Client\Resource\ResourceByProjectKey;
use GuzzleHttp\Client;

class ApiRoot extends ApiResource
{
    /**
     * @psalm-param array<string, scalar> $args
     */
    public function __construct(Client $client = null, array $args = [])
    {
        parent::__construct('', $args, $client);
    }

    /**
     * @psalm-param scalar $projectKey
     *
     * @param null|mixed $projectKey
     */
    public function withProjectKeyValue($projectKey = null): ResourceByProjectKey
    {
        $args = $this->getArgs();
        if (!is_null($projectKey)) {
            $args['projectKey'] = $projectKey;
        }

        return new ResourceByProjectKey($this->getUri().'/{projectKey}', $args, $this->getClient());
    }
}
