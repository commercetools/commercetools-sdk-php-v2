<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MissingPricesVariantLevel extends MissingPricesProductCount
{
    /**
     * <p>Number of product variants scanned.</p>
     *
     * @return null|int
     */
    public function getTotal();

    /**
     * <p>Number of product variants missing prices.</p>
     *
     * @return null|int
     */
    public function getMissingPrices();

    public function setTotal(?int $total): void;

    public function setMissingPrices(?int $missingPrices): void;
}
