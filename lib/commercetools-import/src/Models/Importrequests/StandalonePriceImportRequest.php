<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\StandalonePrices\StandalonePriceImportCollection;

interface StandalonePriceImportRequest extends ImportRequest
{
    public const FIELD_RESOURCES = 'resources';

    /**
     * <p>The Standalone Price import resources of this request.</p>
     *

     * @return null|StandalonePriceImportCollection
     */
    public function getResources();

    /**
     * @param ?StandalonePriceImportCollection $resources
     */
    public function setResources(?StandalonePriceImportCollection $resources): void;
}
