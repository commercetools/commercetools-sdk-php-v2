<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperations extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/products/importSinkKey={importSinkKey}/import-operations', $args, $client);
    }

    public function withIdValue(string $id = null): ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperationsById
    {
        $args = $this->getArgs();
        if (!is_null($id)) {
            $args['id'] = $id;
        }

        return new ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperationsById($args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperationsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperationsGet($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}
