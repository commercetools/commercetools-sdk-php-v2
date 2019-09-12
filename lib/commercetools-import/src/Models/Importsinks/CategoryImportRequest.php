<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Import\Models\Categories\CategoryImportCollection;

interface CategoryImportRequest extends ImportRequest
{
    const FIELD_RESOURCES = 'resources';

    /**
     * <p>The individual categories to import.</p>.
     *
     * @return null|CategoryImportCollection
     */
    public function getResources();

    public function setResources(?CategoryImportCollection $resources): void;
}
