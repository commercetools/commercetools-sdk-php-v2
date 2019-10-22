<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\PriceImportRequest;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyPricesImportSinkKeyByImportSinkKey extends ApiResource
{
    /**
     * @psalm-param scalar $resourceKey
     *
     * @param null|mixed $resourceKey
     */
    public function resourceKeyWithResourceKeyValue($resourceKey = null): ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey
    {
        $args = $this->getArgs();
        if (!is_null($resourceKey)) {
            $args['resourceKey'] = $resourceKey;
        }

        return new ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey($this->getUri().'/resourceKey={resourceKey}', $args, $this->getClient());
    }

    public function importItems(): ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyImportItems
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyImportItems($this->getUri().'/import-items', $args, $this->getClient());
    }

    /**
     * @psalm-param ?PriceImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?PriceImportRequest $body = null, array $headers = []): ByProjectKeyPricesImportSinkKeyByImportSinkKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyPricesImportSinkKeyByImportSinkKeyPost($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}
