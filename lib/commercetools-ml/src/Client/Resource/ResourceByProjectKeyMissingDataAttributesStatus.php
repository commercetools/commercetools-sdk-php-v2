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
 * @deprecated
 */
class ResourceByProjectKeyMissingDataAttributesStatus extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/missing-data/attributes/status', $args, $client);
    }

    /**
     * @deprecated
     */
    public function withTaskId(string $taskId = null): ResourceByProjectKeyMissingDataAttributesStatusByTaskId
    {
        $args = $this->getArgs();
        if (!is_null($taskId)) {
            $args['taskId'] = $taskId;
        }

        return new ResourceByProjectKeyMissingDataAttributesStatusByTaskId($args, $this->getClient());
    }
}
