<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\PriceCollection;

interface DuplicatePriceScopeError extends ErrorObject
{
    
    const FIELD_CONFLICTING_PRICES = 'conflictingPrices';

    /**
     *
     * @return PriceCollection|null
     */
    public function getConflictingPrices();
    public function setConflictingPrices(?PriceCollection $conflictingPrices): void;
}