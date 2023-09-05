<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\TaxPortionDraftCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetOrderTotalTaxAction extends StagedOrderUpdateAction
{
    public const FIELD_EXTERNAL_TOTAL_GROSS = 'externalTotalGross';
    public const FIELD_EXTERNAL_TAX_PORTIONS = 'externalTaxPortions';

    /**
     * <p>Total gross amount of the Order (totalNet + taxes).</p>
     *

     * @return null|Money
     */
    public function getExternalTotalGross();

    /**
     * <p>Value to set.</p>
     *

     * @return null|TaxPortionDraftCollection
     */
    public function getExternalTaxPortions();

    /**
     * @param ?Money $externalTotalGross
     */
    public function setExternalTotalGross(?Money $externalTotalGross): void;

    /**
     * @param ?TaxPortionDraftCollection $externalTaxPortions
     */
    public function setExternalTaxPortions(?TaxPortionDraftCollection $externalTaxPortions): void;
}
