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
use Models\Importrequests\ProductDraftImportRequest;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null) {
        parent::__construct('/{projectKey}/product-drafts/importSinkKey={importSinkKey}', $args, $client);
    }

    public function resourceKeyWithResourceKeyValue(string $resourceKey = null): ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey
    {
        $args = $this->getArgs();
        if (!is_null($resourceKey)) {
            $args['resourceKey'] = $resourceKey;
        }

        return new ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey($args, $this->getClient());
    }
    public function importOperations(): ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyImportOperations
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyImportOperations($args, $this->getClient());
    }

    /**
     * @psalm-param ?ProductDraftImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductDraftImportRequest $body = null, array $headers = []): ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyPost($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }

}
