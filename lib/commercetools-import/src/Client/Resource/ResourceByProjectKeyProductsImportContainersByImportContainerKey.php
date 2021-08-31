<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\ProductImportRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductsImportContainersByImportContainerKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/products/import-containers/{importContainerKey}', $args, $client);
    }

    /**
     * @psalm-param ?ProductImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductImportRequest $body = null, array $headers = []): ByProjectKeyProductsImportContainersByImportContainerKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductsImportContainersByImportContainerKeyPost($args['projectKey'], $args['importContainerKey'], $body, $headers, $this->getClient());
    }
}
