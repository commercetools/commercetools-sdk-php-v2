<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportItems extends ApiResource
{
    public function resourceKeyWithResourceKeyValue(string $resourceKey = null): ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportItemsResourceKeyByResourceKey
    {
        $args = $this->getArgs();
        if (!is_null($resourceKey)) {
            $args['resourceKey'] = $resourceKey;
        }

        return new ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportItemsResourceKeyByResourceKey($this->getUri().'/resourceKey={resourceKey}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportItemsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportItemsGet((string) $args['projectKey'], (string) $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}
