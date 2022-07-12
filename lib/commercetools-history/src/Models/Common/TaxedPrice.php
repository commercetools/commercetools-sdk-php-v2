<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface TaxedPrice extends JsonObject
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

    /**
     * @param ?Money $totalNet
     */
    public function setTotalNet(?Money $totalNet): void;

    /**
     * @param ?Money $totalGross
     */
    public function setTotalGross(?Money $totalGross): void;
}
