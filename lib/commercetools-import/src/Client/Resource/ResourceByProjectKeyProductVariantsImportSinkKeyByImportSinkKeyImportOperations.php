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
class ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperations extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/product-variants/importSinkKey={importSinkKey}/import-operations', $args, $client);
    }

    /**
     */
    public function withIdValue(string $id = null): ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsById
    {
        $args = $this->getArgs();
        if (!is_null($id)) {
            $args['id'] = $id;
        }

        return new ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsById($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}
