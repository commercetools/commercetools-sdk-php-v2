<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class RangeFacetResult extends FacetResult {
    protected $ranges;
    const DISCRIMINATOR_VALUE = 'range';

    /**
     * @return FacetResultRangeCollection
     */
    public function getRanges(): FacetResultRangeCollection
    {
        if (is_null($this->ranges)) {
            $value = $this->raw('ranges');
            if (!is_null($value)) {
                $this->ranges = Mapper::map($value, FacetResultRangeCollection::class);
            } else {
                return Mapper::map([], FacetResultRangeCollection::class);
            }
        }
        return $this->ranges;
    }
                
}
