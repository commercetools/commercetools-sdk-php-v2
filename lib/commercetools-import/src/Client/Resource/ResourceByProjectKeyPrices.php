<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyPrices extends ApiResource
{
    /**
     * @psalm-param scalar $importSinkKey
     *
     * @param null|mixed $importSinkKey
     */
    public function importSinkKeyWithImportSinkKeyValue($importSinkKey = null): ResourceByProjectKeyPricesImportSinkKeyByImportSinkKey
    {
        $args = $this->getArgs();
        if (!is_null($importSinkKey)) {
            $args['importSinkKey'] = $importSinkKey;
        }

        return new ResourceByProjectKeyPricesImportSinkKeyByImportSinkKey($this->getUri().'/importSinkKey={importSinkKey}', $args, $this->getClient());
    }
}
