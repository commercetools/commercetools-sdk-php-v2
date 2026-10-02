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
class ResourceByProjectKeyAgentsIntake extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/agents/intake', $args, $client);
    }

    /**
     */
    public function v1(): ResourceByProjectKeyAgentsIntakeV1
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyAgentsIntakeV1($args, $this->getClient());
    }
}
