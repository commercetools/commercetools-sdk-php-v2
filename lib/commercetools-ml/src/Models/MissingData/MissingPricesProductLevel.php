<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface MissingPricesProductLevel extends MissingPricesProductCount
{


    /**
     * <p>Number of products scanned.</p>
     *
     * @return null|int
     */
    public function getTotal();

    /**
     * <p>Number of products missing prices.</p>
     *
     * @return null|int
     */
    public function getMissingPrices();

    public function setTotal(?int $total): void;

    public function setMissingPrices(?int $missingPrices): void;
}
