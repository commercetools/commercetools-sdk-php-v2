<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyTypes extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/types', $args, $client);
    }

    /**
     */
    public function importContainers(): ResourceByProjectKeyTypesImportContainers
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyTypesImportContainers($args, $this->getClient());
    }
}
