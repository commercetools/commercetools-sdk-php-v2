<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCartChangeTaxModeAction extends MyCartUpdateAction
{
    public const FIELD_TAX_MODE = 'taxMode';

    /**
     * <p>The new TaxMode.</p>
     *

     * @return null|string
     */
    public function getTaxMode();

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void;
}
