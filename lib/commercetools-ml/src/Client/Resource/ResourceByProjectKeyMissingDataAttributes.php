<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Ml\Models\MissingData\MissingAttributesSearchRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMissingDataAttributes extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/missing-data/attributes', $args, $client);
    }

    public function status(): ResourceByProjectKeyMissingDataAttributesStatus
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMissingDataAttributesStatus($args, $this->getClient());
    }

    /**
     * @psalm-param ?MissingAttributesSearchRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MissingAttributesSearchRequest $body = null, array $headers = []): ByProjectKeyMissingDataAttributesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMissingDataAttributesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
