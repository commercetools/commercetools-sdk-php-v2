<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingMethodChangeActiveAction extends ShippingMethodUpdateAction
{
    public const FIELD_ACTIVE = 'active';

    /**
     * <p>Value to set.</p>
     * <p>If set to <code>false</code>, the ShippingMethod cannot be used during the creation or update of a Cart or Order.</p>
     *

     * @return null|bool
     */
    public function getActive();

    /**
     * @param ?bool $active
     */
    public function setActive(?bool $active): void;
}
