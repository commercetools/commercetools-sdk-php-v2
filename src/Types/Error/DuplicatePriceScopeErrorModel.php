<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectModel;

use Commercetools\Types\Common\PriceCollection;
use Commercetools\Types\Common\Price;

class DuplicatePriceScopeErrorModel extends ErrorObjectModel implements DuplicatePriceScopeError {
    const DISCRIMINATOR_VALUE = 'DuplicatePriceScope';

    /**
     * @var PriceCollection
     */
    protected $conflictingPrices;

    /**
     * @return PriceCollection
     */
    public function getConflictingPrices()
    {
        if (is_null($this->conflictingPrices)) {
            $value = $this->raw(DuplicatePriceScopeError::FIELD_CONFLICTING_PRICES);
            if (is_null($value)) {
                return $this->mapData(PriceCollection::class, null);
            }
            $value = $this->mapData(PriceCollection::class, $value);
            $this->conflictingPrices = $value;
        }
        return $this->conflictingPrices;
    }

    /**
     * @param PriceCollection $conflictingPrices
     * @return $this
     */
    public function setConflictingPrices(PriceCollection $conflictingPrices)
    {
        $this->conflictingPrices = $conflictingPrices;

        return $this;
    }

}
