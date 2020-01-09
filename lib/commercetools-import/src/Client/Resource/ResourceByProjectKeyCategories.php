<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyCategories extends ApiResource
{
    public function importSinkKeyWithImportSinkKeyValue(string $importSinkKey = null): ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKey
    {
        $args = $this->getArgs();
        if (!is_null($importSinkKey)) {
            $args['importSinkKey'] = $importSinkKey;
        }

        return new ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKey($this->getUri().'/importSinkKey={importSinkKey}', $args, $this->getClient());
    }
}
