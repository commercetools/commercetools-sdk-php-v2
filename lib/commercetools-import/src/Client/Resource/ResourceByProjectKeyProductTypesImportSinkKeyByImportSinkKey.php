<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\ProductTypeImportRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/product-types/importSinkKey={importSinkKey}', $args, $client);
    }

    /**
     */
    public function importOperations(): ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportOperations
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportOperations($args, $this->getClient());
    }

    /**
     * @psalm-param ?ProductTypeImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductTypeImportRequest $body = null, array $headers = []): ByProjectKeyProductTypesImportSinkKeyByImportSinkKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductTypesImportSinkKeyByImportSinkKeyPost($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}
