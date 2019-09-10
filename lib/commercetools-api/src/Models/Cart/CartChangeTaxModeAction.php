<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

interface CartChangeTaxModeAction extends CartUpdateAction
{
    const FIELD_TAX_MODE = 'taxMode';

    /**
     * @return null|string
     */
    public function getTaxMode();

    public function setTaxMode(?string $taxMode): void;
}
