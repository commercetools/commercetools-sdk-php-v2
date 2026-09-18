<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyAgentsIntakeV1 extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/agents/intake/v1', $args, $client);
    }

    /**
     */
    public function responses(): ResourceByProjectKeyAgentsIntakeV1Responses
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyAgentsIntakeV1Responses($args, $this->getClient());
    }
}
