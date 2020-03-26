<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMissingDataPricesStatus extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/missing-data/prices/status', $args, $client);
    }

    public function withTaskId(string $taskId = null): ResourceByProjectKeyMissingDataPricesStatusByTaskId
    {
        $args = $this->getArgs();
        if (!is_null($taskId)) {
            $args['taskId'] = $taskId;
        }

        return new ResourceByProjectKeyMissingDataPricesStatusByTaskId($args, $this->getClient());
    }
}
