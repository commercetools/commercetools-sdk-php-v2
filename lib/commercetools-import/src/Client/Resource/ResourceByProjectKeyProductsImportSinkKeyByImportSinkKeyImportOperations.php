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
class ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperations extends ApiResource
{
    public function withIdValue(string $id = null): ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperationsById
    {
        $args = $this->getArgs();
        if (!is_null($id)) {
            $args['id'] = $id;
        }

        return new ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperationsById($this->getUri() . '/{id}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperationsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperationsGet((string) $args['projectKey'], (string) $args['importSinkKey'], $body, $headers, $this->getClient());
    }

}
