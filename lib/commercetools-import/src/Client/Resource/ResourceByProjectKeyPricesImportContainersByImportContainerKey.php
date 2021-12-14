<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\PriceImportRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyPricesImportContainersByImportContainerKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/prices/import-containers/{importContainerKey}', $args, $client);
    }

    /**
     * @psalm-param ?PriceImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?PriceImportRequest $body = null, array $headers = []): ByProjectKeyPricesImportContainersByImportContainerKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyPricesImportContainersByImportContainerKeyPost($args['projectKey'], $args['importContainerKey'], $body, $headers, $this->getClient());
    }
}
