<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyImportSinksByImportSinkKeyItems extends ApiResource
{
    /**
     * @psalm-param scalar $resourceKey
     *
     * @param null|mixed $resourceKey
     */
    public function withResourceKeyValue($resourceKey = null): ResourceByProjectKeyImportSinksByImportSinkKeyItemsByResourceKey
    {
        $args = $this->getArgs();
        if (!is_null($resourceKey)) {
            $args['resourceKey'] = $resourceKey;
        }

        return new ResourceByProjectKeyImportSinksByImportSinkKeyItemsByResourceKey($this->getUri().'/{resourceKey}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyImportSinksByImportSinkKeyItemsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportSinksByImportSinkKeyItemsGet($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}
