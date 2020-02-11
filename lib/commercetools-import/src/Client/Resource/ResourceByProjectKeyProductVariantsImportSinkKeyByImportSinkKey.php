<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\ProductVariantImportRequest;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKey extends ApiResource
{
    public function resourceKeyWithResourceKeyValue(string $resourceKey = null): ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey
    {
        $args = $this->getArgs();
        if (!is_null($resourceKey)) {
            $args['resourceKey'] = $resourceKey;
        }

        return new ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey($this->getUri() . '/resourceKey={resourceKey}', $args, $this->getClient());
    }
    public function importOperations(): ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperations
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperations($this->getUri() . '/import-operations', $args, $this->getClient());
    }

    /**
     * @psalm-param ?ProductVariantImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductVariantImportRequest $body = null, array $headers = []): ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyPost((string) $args['projectKey'], (string) $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}
