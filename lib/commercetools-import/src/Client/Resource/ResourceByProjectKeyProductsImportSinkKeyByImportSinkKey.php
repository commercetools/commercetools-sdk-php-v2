<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Client\Resource;

use Shared\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;
use Models\Importrequests\ProductImportRequest;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductsImportSinkKeyByImportSinkKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null) {
        parent::__construct('/{projectKey}/products/importSinkKey={importSinkKey}', $args, $client);
    }

    public function resourceKeyWithResourceKeyValue(string $resourceKey = null): ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey
    {
        $args = $this->getArgs();
        if (!is_null($resourceKey)) {
            $args['resourceKey'] = $resourceKey;
        }

        return new ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey($args, $this->getClient());
    }
    public function importOperations(): ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperations
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperations($args, $this->getClient());
    }

    /**
     * @psalm-param ?ProductImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductImportRequest $body = null, array $headers = []): ByProjectKeyProductsImportSinkKeyByImportSinkKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductsImportSinkKeyByImportSinkKeyPost($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }

}
