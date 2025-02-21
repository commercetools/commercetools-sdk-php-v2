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
     * <p>The total gross amount of the Cart, including tax. This value is used to calculate the <code>totalNet</code> and <code>totalTax</code> fields of the Cart's <code>taxedPrice</code>.</p>
     *

     * @return null|Money
     */
    public function getExternalTotalGross();

    /**
     * <p>Set if the <code>externalTotalGross</code> price is a sum of portions with different tax rates.</p>
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
