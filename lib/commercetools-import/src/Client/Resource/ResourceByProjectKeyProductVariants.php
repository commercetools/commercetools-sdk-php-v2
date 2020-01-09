<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyProductVariants extends ApiResource
{
    public function importSinkKeyWithImportSinkKeyValue(string $importSinkKey = null): ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKey
    {
        $args = $this->getArgs();
        if (!is_null($importSinkKey)) {
            $args['importSinkKey'] = $importSinkKey;
        }

        return new ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKey($this->getUri().'/importSinkKey={importSinkKey}', $args, $this->getClient());
    }
}
