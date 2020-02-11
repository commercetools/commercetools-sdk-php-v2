<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey extends ApiResource
{
    public function importOperation(): ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyImportOperation
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyImportOperation($this->getUri() . '/import-operation', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyDelete((string) $args['projectKey'], (string) $args['importSinkKey'], (string) $args['resourceKey'], $body, $headers, $this->getClient());
    }

}
