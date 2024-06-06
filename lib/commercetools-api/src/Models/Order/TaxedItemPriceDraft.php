<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxedItemPriceDraft extends JsonObject
{
    public const FIELD_TOTAL_NET = 'totalNet';
    public const FIELD_TOTAL_GROSS = 'totalGross';

    /**
     * <p>Draft object to store money in cent amounts for a specific currency.</p>
     *

     * @return null|Money
     */
    public function getTotalNet();

    /**
     * <p>Draft object to store money in cent amounts for a specific currency.</p>
     *

     * @return null|Money
     */
    public function getTotalGross();

    /**
     * @param ?Money $totalNet
     */
    public function setTotalNet(?Money $totalNet): void;

    /**
     * @param ?Money $totalGross
     */
    public function setTotalGross(?Money $totalGross): void;
}
