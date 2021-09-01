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
class ResourceByProjectKeyProductTypesImportContainers extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/product-types/import-containers', $args, $client);
    }

    /**
     */
    public function withImportContainerKeyValue(string $importContainerKey = null): ResourceByProjectKeyProductTypesImportContainersByImportContainerKey
    {
        $args = $this->getArgs();
        if (!is_null($importContainerKey)) {
            $args['importContainerKey'] = $importContainerKey;
        }

        return new ResourceByProjectKeyProductTypesImportContainersByImportContainerKey($args, $this->getClient());
    }
}
