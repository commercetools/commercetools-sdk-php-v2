<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Import\Models\Products\ProductImportCollection;

interface ProductImportRequest extends ImportRequest
{

    public const FIELD_RESOURCES = 'resources';

    /**
     * <p>The product import resources of this request.</p>
     *
     * @return null|ProductImportCollection
     */
    public function getResources();

    public function setResources(?ProductImportCollection $resources): void;
}
