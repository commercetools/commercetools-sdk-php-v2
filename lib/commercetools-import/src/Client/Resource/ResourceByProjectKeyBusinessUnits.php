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
class ResourceByProjectKeyBusinessUnits extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/business-units', $args, $client);
    }

    /**
     */
    public function importContainers(): ResourceByProjectKeyBusinessUnitsImportContainers
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyBusinessUnitsImportContainers($args, $this->getClient());
    }
}
