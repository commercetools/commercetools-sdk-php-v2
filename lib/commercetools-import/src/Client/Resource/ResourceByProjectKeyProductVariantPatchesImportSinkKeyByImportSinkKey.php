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
use Models\Importrequests\ProductVariantPatchRequest;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null) {
        parent::__construct('/{projectKey}/product-variant-patches/importSinkKey={importSinkKey}', $args, $client);
    }

    public function importOperations(): ResourceByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportOperations
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportOperations($args, $this->getClient());
    }

    /**
     * @psalm-param ?ProductVariantPatchRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductVariantPatchRequest $body = null, array $headers = []): ByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyPost($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }

}
