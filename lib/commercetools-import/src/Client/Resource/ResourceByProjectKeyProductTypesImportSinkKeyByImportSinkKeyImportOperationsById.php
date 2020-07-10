<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Client\Resource;

use Shared\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportOperationsById extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null) {
        parent::__construct('/{projectKey}/product-types/importSinkKey={importSinkKey}/import-operations/{id}', $args, $client);
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportOperationsByIdGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportOperationsByIdGet($args['projectKey'], $args['importSinkKey'], $args['id'], $body, $headers, $this->getClient());
    }

}
