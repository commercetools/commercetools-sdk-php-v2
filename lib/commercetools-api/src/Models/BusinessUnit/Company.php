<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Company extends BusinessUnit
{
    /**
     * <p>Is always <code>Explicit</code> since a Company does not have a parent Business Unit the Stores can be inherited from.</p>
     *

     * @return null|string
     */
    public function getStoreMode();

    /**
     * @param ?string $storeMode
     */
    public function setStoreMode(?string $storeMode): void;
}
