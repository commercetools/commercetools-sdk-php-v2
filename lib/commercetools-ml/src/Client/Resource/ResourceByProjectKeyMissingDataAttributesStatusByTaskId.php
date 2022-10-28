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
class ResourceByProjectKeyMissingDataAttributesStatusByTaskId extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/missing-data/attributes/status/{taskId}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     * @deprecated
     */
    public function get($body = null, array $headers = []): ByProjectKeyMissingDataAttributesStatusByTaskIdGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMissingDataAttributesStatusByTaskIdGet($args['projectKey'], $args['taskId'], $body, $headers, $this->getClient());
    }
}
