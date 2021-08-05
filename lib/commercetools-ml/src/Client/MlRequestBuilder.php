<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Ml\Client;

use Commercetools\Client\ApiResource;
use Commercetools\Ml\Client\Resource\ResourceByProjectKey;
use GuzzleHttp\ClientInterface;

class MlRequestBuilder extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(ClientInterface $client = null, array $args = [])
    {
        parent::__construct('', $args, $client);
    }

    /**
     */
    public function withProjectKey(string $projectKey = null): ResourceByProjectKey
    {
        $args = $this->getArgs();
        if (!is_null($projectKey)) {
            $args['projectKey'] = $projectKey;
        }

        return new ResourceByProjectKey($args, $this->getClient());
    }
}
