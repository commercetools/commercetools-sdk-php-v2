<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Import\Client;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Client\Resource\ResourceByProjectKey;
use GuzzleHttp\ClientInterface;

class ImportRequestBuilder extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(ClientInterface $client = null, array $args = [])
    {
        parent::__construct('', $args, $client);
    }

    public function withProjectKeyValue(string $projectKey = null): ResourceByProjectKey
    {
        $args = $this->getArgs();
        if (!is_null($projectKey)) {
            $args['projectKey'] = $projectKey;
        }

        return new ResourceByProjectKey($args, $this->getClient());
    }
}
