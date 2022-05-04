<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxedItemPrice extends JsonObject
{
    public const FIELD_TOTAL_NET = 'totalNet';
    public const FIELD_TOTAL_GROSS = 'totalGross';
    public const FIELD_TOTAL_TAX = 'totalTax';

    /**
     * @return null|TypedMoney
     */
    public function getTotalNet();

    /**
     * <p>TaxedItemPrice fields can not be used in query predicates.</p>
     *
     * @return null|TypedMoney
     */
    public function getTotalGross();

    /**
     * <p>Platform-calculated value as subtraction of <code>totalGross</code> - <code>totalNet</code>.</p>
     *
     * @return null|TypedMoney
     */
    public function getTotalTax();

    /**
     * @param ?TypedMoney $totalNet
     */
    public function setTotalNet(?TypedMoney $totalNet): void;

    /**
     * @param ?TypedMoney $totalGross
     */
    public function setTotalGross(?TypedMoney $totalGross): void;

    /**
     * @param ?TypedMoney $totalTax
     */
    public function setTotalTax(?TypedMoney $totalTax): void;
}
