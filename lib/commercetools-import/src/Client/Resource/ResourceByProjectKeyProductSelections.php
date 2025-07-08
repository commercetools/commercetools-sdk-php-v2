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
class ResourceByProjectKeyProductSelections extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/product-selections', $args, $client);
    }

    /**
     */
    public function importContainers(): ResourceByProjectKeyProductSelectionsImportContainers
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductSelectionsImportContainers($args, $this->getClient());
    }
}
