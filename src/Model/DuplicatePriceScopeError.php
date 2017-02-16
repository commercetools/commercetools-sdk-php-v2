<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class DuplicatePriceScopeError extends ErrorObject {
    protected $conflictingPrices;
    const DISCRIMINATOR_VALUE = 'DuplicatePriceScope';

    /**
     * @return PriceCollection
     */
    public function getConflictingPrices(): PriceCollection
    {
        if (is_null($this->conflictingPrices)) {
            $value = $this->raw('conflictingPrices');
            if (!is_null($value)) {
                $this->conflictingPrices = Mapper::map($value, PriceCollection::class);
            } else {
                return Mapper::map([], PriceCollection::class);
            }
        }
        return $this->conflictingPrices;
    }
                
}
