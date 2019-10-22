<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\ProductImportRequest;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyProductsImportSinkKeyByImportSinkKey extends ApiResource
{
    /**
     * @psalm-param scalar $resourceKey
     *
     * @param null|mixed $resourceKey
     */
    public function resourceKeyWithResourceKeyValue($resourceKey = null): ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey
    {
        $args = $this->getArgs();
        if (!is_null($resourceKey)) {
            $args['resourceKey'] = $resourceKey;
        }

        return new ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey($this->getUri().'/resourceKey={resourceKey}', $args, $this->getClient());
    }

    public function importItems(): ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportItems
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportItems($this->getUri().'/import-items', $args, $this->getClient());
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
