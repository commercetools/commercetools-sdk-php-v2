<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Ml\Models\MissingData\MissingImagesSearchRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @deprecated
 */
class ResourceByProjectKeyMissingDataImages extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/missing-data/images', $args, $client);
    }

    /**
     * @deprecated
     */
    public function status(): ResourceByProjectKeyMissingDataImagesStatus
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMissingDataImagesStatus($args, $this->getClient());
    }

    /**
     * @psalm-param ?MissingImagesSearchRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     * @deprecated
     */
    public function post(?MissingImagesSearchRequest $body = null, array $headers = []): ByProjectKeyMissingDataImagesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMissingDataImagesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
