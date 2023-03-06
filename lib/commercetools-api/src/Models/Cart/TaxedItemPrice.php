<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxedItemPrice extends JsonObject
{
    public const FIELD_TOTAL_NET = 'totalNet';
    public const FIELD_TOTAL_GROSS = 'totalGross';
    public const FIELD_TOTAL_TAX = 'totalTax';

    /**
     * <p>Total net amount of the Line Item or Custom Line Item.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getTotalNet();

    /**
     * <p>Total gross amount of the Line Item or Custom Line Item.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getTotalGross();

    /**
     * <p>Total tax applicable for the Line Item or Custom Line Item.
     * Automatically calculated as the difference between the <code>totalGross</code> and <code>totalNet</code> values.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getTotalTax();

    /**
     * @param ?CentPrecisionMoney $totalNet
     */
    public function setTotalNet(?CentPrecisionMoney $totalNet): void;

    /**
     * @param ?CentPrecisionMoney $totalGross
     */
    public function setTotalGross(?CentPrecisionMoney $totalGross): void;

    /**
     * @param ?CentPrecisionMoney $totalTax
     */
    public function setTotalTax(?CentPrecisionMoney $totalTax): void;
}
