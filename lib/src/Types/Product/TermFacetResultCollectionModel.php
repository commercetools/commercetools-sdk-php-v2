<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\FacetResultCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TermFacetResultCollectionModel extends FacetResultCollectionModel implements TermFacetResultCollection {

    /**
     * @param TermFacetResult $value
     * @return TermFacetResultCollection
     */
    public function add($value) {
        if (!$value instanceof TermFacetResult) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TermFacetResult
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TermFacetResult) {
            $data = $this->mapData(TermFacetResult::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
