<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\Money;

interface TaxedItemPriceDraft extends JsonObject
{

    public const FIELD_TOTAL_NET = 'totalNet';
    public const FIELD_TOTAL_GROSS = 'totalGross';

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
