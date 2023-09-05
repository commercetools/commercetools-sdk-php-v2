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

interface StagedOrderChangeTaxRoundingModeAction extends StagedOrderUpdateAction
{
    public const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';

    /**
     * <p>New value to set.</p>
     *

     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * @param ?string $taxRoundingMode
     */
    public function setTaxRoundingMode(?string $taxRoundingMode): void;
}
