<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\CategoryImportRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/categories/importSinkKey={importSinkKey}', $args, $client);
    }

    public function resourceKeyWithResourceKeyValue(string $resourceKey = null): ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey
    {
        $args = $this->getArgs();
        if (!is_null($resourceKey)) {
            $args['resourceKey'] = $resourceKey;
        }

        return new ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey($args, $this->getClient());
    }
    public function importOperations(): ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperations
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperations($args, $this->getClient());
    }

    /**
     * @psalm-param ?CategoryImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CategoryImportRequest $body = null, array $headers = []): ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyPost($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}
