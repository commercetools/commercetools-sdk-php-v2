<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\ProductVariantPatchRequest;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKey extends ApiResource
{
    public function importItems(): ResourceByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportItems
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportItems($this->getUri().'/import-items', $args, $this->getClient());
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
