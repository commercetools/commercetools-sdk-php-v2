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
class ResourceByProjectKeyMissingData extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/missing-data', $args, $client);
    }

    public function attributes(): ResourceByProjectKeyMissingDataAttributes
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMissingDataAttributes($args, $this->getClient());
    }
    public function images(): ResourceByProjectKeyMissingDataImages
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMissingDataImages($args, $this->getClient());
    }
    public function prices(): ResourceByProjectKeyMissingDataPrices
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMissingDataPrices($args, $this->getClient());
    }
}
