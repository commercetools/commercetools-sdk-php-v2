<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyImportItemsResourceKeyByResourceKey extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyPricesImportSinkKeyByImportSinkKeyImportItemsResourceKeyByResourceKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyPricesImportSinkKeyByImportSinkKeyImportItemsResourceKeyByResourceKeyGet($args['projectKey'], $args['importSinkKey'], $args['resourceKey'], $body, $headers, $this->getClient());
    }
}
