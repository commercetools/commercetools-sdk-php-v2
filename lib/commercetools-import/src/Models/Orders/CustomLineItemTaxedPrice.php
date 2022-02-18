<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\TypedMoney;

interface CustomLineItemTaxedPrice extends JsonObject
{
    public const FIELD_TOTAL_NET = 'totalNet';
    public const FIELD_TOTAL_GROSS = 'totalGross';

    /**
     * @return null|TypedMoney
     */
    public function getTotalNet();

    /**
     * @return null|TypedMoney
     */
    public function getTotalGross();

    /**
     * @param ?TypedMoney $totalNet
     */
    public function setTotalNet(?TypedMoney $totalNet): void;

    /**
     * @param ?TypedMoney $totalGross
     */
    public function setTotalGross(?TypedMoney $totalGross): void;
}
