<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MissingPricesProductCount extends JsonObject
{
    public const FIELD_TOTAL = 'total';
    public const FIELD_MISSING_PRICES = 'missingPrices';

    /**

     * @return null|int
     */
    public function getTotal();

    /**

     * @return null|int
     */
    public function getMissingPrices();

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void;

    /**
     * @param ?int $missingPrices
     */
    public function setMissingPrices(?int $missingPrices): void;
}
