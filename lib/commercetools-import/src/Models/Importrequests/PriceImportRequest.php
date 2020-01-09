<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Import\Models\Prices\PriceImportCollection;

interface PriceImportRequest extends ImportRequest
{
    const FIELD_RESOURCES = 'resources';

    /**
     * <p>The price import resources of this request.</p>
     *
     * @return null|PriceImportCollection
     */
    public function getResources();

    public function setResources(?PriceImportCollection $resources): void;
}
