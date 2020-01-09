<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

interface ShippingMethodChangeIsDefaultAction extends ShippingMethodUpdateAction
{
    const FIELD_IS_DEFAULT = 'isDefault';

    /**
     * <p>Only one ShippingMethod in a project can be default.</p>
     *
     * @return null|bool
     */
    public function getIsDefault();

    public function setIsDefault(?bool $isDefault): void;
}
