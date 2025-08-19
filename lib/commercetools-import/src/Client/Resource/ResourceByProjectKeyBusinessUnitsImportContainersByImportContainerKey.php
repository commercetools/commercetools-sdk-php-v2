<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\BusinessUnitImportRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyBusinessUnitsImportContainersByImportContainerKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/business-units/import-containers/{importContainerKey}', $args, $client);
    }

    /**
     * @psalm-param ?BusinessUnitImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?BusinessUnitImportRequest $body = null, array $headers = []): ByProjectKeyBusinessUnitsImportContainersByImportContainerKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyBusinessUnitsImportContainersByImportContainerKeyPost($args['projectKey'], $args['importContainerKey'], $body, $headers, $this->getClient());
    }
}
