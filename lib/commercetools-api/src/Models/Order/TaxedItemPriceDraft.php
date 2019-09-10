<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\JsonObject;

interface TaxedItemPriceDraft extends JsonObject
{
    const FIELD_TOTAL_NET = 'totalNet';
    const FIELD_TOTAL_GROSS = 'totalGross';

    /**
     * @return null|Money
     */
    public function getTotalNet();

    /**
     * @return null|Money
     */
    public function getTotalGross();

    public function setTotalNet(?Money $totalNet): void;

    public function setTotalGross(?Money $totalGross): void;
}
