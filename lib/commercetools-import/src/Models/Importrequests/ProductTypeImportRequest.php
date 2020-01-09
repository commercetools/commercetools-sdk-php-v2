<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Import\Models\Producttypes\ProductTypeImportCollection;

interface ProductTypeImportRequest extends ImportRequest
{
    const FIELD_RESOURCES = 'resources';

    /**
     * <p>The product type import resources of this request.</p>
     *
     * @return null|ProductTypeImportCollection
     */
    public function getResources();

    public function setResources(?ProductTypeImportCollection $resources): void;
}
