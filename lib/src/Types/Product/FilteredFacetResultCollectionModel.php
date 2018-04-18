<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\FacetResultCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class FilteredFacetResultCollectionModel extends FacetResultCollectionModel implements FilteredFacetResultCollection {

    /**
     * @param FilteredFacetResult $value
     * @return FilteredFacetResultCollection
     */
    public function add($value) {
        if (!$value instanceof FilteredFacetResult) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return FilteredFacetResult
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof FilteredFacetResult) {
            $data = $this->mapData(FilteredFacetResult::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
