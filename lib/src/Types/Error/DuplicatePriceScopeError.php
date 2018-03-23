<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Common\PriceCollection;
use Commercetools\Types\Common\Price;

interface DuplicatePriceScopeError extends ErrorObject {
    const FIELD_CONFLICTING_PRICES = 'conflictingPrices';

    /**
     * @return PriceCollection
     */
    public function getConflictingPrices();

    /**
     * @param PriceCollection $conflictingPrices
     * @return $this
     */
    public function setConflictingPrices(PriceCollection $conflictingPrices);

}
