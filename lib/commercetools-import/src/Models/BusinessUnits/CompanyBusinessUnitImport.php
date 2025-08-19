<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\BusinessUnits;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CompanyBusinessUnitImport extends BusinessUnitImport
{
    public const FIELD_STORE_MODE = 'storeMode';

    /**

     * @return null|string
     */
    public function getStoreMode();

    /**
     * @param ?string $storeMode
     */
    public function setStoreMode(?string $storeMode): void;
}
