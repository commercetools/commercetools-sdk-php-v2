<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Base\JsonObject;

interface TaxedItemPrice extends JsonObject
{
    const FIELD_TOTAL_NET = 'totalNet';
    const FIELD_TOTAL_GROSS = 'totalGross';

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

    public function setTotalNet(?TypedMoney $totalNet): void;

    public function setTotalGross(?TypedMoney $totalGross): void;
}
