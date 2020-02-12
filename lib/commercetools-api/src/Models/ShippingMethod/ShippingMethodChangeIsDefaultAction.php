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
     * <p>Only one ShippingMethod in a project can be default.</p>
     *
     * @return null|bool
     */
    public function getIsDefault();

    public function setIsDefault(?bool $isDefault): void;
}
