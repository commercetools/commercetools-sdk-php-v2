<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\ProductTypeImportRequest;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKey extends ApiResource
{
    public function resourceKeyWithResourceKeyValue(string $resourceKey = null): ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey
    {
        $args = $this->getArgs();
        if (!is_null($resourceKey)) {
            $args['resourceKey'] = $resourceKey;
        }

        return new ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey($this->getUri() . '/resourceKey={resourceKey}', $args, $this->getClient());
    }
    public function importOperations(): ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportOperations
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportOperations($this->getUri() . '/import-operations', $args, $this->getClient());
    }

    /**
     * @psalm-param ?ProductTypeImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductTypeImportRequest $body = null, array $headers = []): ByProjectKeyProductTypesImportSinkKeyByImportSinkKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductTypesImportSinkKeyByImportSinkKeyPost((string) $args['projectKey'], (string) $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}
