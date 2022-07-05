<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetCartTotalTaxAction extends CartUpdateAction
{
    public const FIELD_EXTERNAL_TOTAL_GROSS = 'externalTotalGross';
    public const FIELD_EXTERNAL_TAX_PORTIONS = 'externalTaxPortions';

    /**
     * <p>The total gross amount of the cart (totalNet + taxes).</p>
     *

     * @return null|Money
     */
    public function getExternalTotalGross();

    /**

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
