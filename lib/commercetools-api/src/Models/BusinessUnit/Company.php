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
     * <p>Is always <code>Explicit</code> since a Company cannot have a parent Business Unit that Stores can be inherited from.</p>
     *

     * @return null|string
     */
    public function getStoreMode();

    /**
     * <p>Is always <code>Explicit</code> since a Company cannot have a parent Business Unit that Associates can be inherited from.</p>
     *

     * @return null|string
     */
    public function getAssociateMode();

    /**
     * @param ?string $storeMode
     */
    public function setStoreMode(?string $storeMode): void;

    /**
     * @param ?string $associateMode
     */
    public function setAssociateMode(?string $associateMode): void;
}
