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

interface StagedOrderChangeTaxModeAction extends StagedOrderUpdateAction
{
    public const FIELD_TAX_MODE = 'taxMode';

    /**
     * <p>Indicates how taxes are set on the Cart.</p>
     *

     * @return null|string
     */
    public function getTaxMode();

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void;
}
