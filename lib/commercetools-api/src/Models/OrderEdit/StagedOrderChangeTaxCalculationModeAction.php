<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderChangeTaxCalculationModeAction extends StagedOrderUpdateAction
{
    public const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';

    /**
     * <p>Determines in which <a href="/carts-orders-overview#tax-calculation-mode">Tax calculation mode</a> taxed prices are calculated.</p>
     *

     * @return null|string
     */
    public function getTaxCalculationMode();

    /**
     * @param ?string $taxCalculationMode
     */
    public function setTaxCalculationMode(?string $taxCalculationMode): void;
}
