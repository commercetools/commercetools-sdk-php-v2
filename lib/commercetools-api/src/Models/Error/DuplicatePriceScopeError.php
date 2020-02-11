<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\PriceCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DuplicatePriceScopeError extends ErrorObject
{
    public const FIELD_CONFLICTING_PRICES = 'conflictingPrices';

    /**
     * @return null|PriceCollection
     */
    public function getConflictingPrices();

    public function setConflictingPrices(?PriceCollection $conflictingPrices): void;
}
