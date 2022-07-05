<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingMethodChangeIsDefaultAction extends ShippingMethodUpdateAction
{
    public const FIELD_IS_DEFAULT = 'isDefault';

    /**
     * <p>Value to set. Only one ShippingMethod can be default in a <a href="ctp:api:type:Project">Project</a>.</p>
     *

     * @return null|bool
     */
    public function getIsDefault();

    /**
     * @param ?bool $isDefault
     */
    public function setIsDefault(?bool $isDefault): void;
}
