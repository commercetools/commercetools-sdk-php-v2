<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Import\Models\Importrequests\CategoryImportRequest;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKey extends ApiResource
{
    public function resourceKeyWithResourceKeyValue(string $resourceKey = null): ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey
    {
        $args = $this->getArgs();
        if (!is_null($resourceKey)) {
            $args['resourceKey'] = $resourceKey;
        }

        return new ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey($this->getUri() . '/resourceKey={resourceKey}', $args, $this->getClient());
    }
    public function importOperations(): ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperations
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperations($this->getUri() . '/import-operations', $args, $this->getClient());
    }

    /**
     * @psalm-param ?CategoryImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CategoryImportRequest $body = null, array $headers = []): ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyPost((string) $args['projectKey'], (string) $args['importSinkKey'], $body, $headers, $this->getClient());
    }

}
