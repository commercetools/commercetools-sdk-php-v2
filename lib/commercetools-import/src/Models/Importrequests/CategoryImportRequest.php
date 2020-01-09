<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Import\Models\Categories\CategoryImportCollection;

interface CategoryImportRequest extends ImportRequest
{
    const FIELD_RESOURCES = 'resources';

    /**
     * <p>The category import resources of this request.</p>
     *
     * @return null|CategoryImportCollection
     */
    public function getResources();

    public function setResources(?CategoryImportCollection $resources): void;
}
