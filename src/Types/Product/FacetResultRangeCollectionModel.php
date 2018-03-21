<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;

class FacetResultRangeCollectionModel extends JsonCollection implements FacetResultRangeCollection {

    /**
     * @param FacetResultRange $value
     * @return FacetResultRangeCollection
     */
    public function add($value) {
        if (!$value instanceof FacetResultRange) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return FacetResultRange
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof FacetResultRange) {
            $data = $this->mapData(FacetResultRange::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
