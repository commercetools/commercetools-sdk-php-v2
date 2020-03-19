<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

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

    public function setTotal(?int $total): void;

    public function setMissingPrices(?int $missingPrices): void;
}
