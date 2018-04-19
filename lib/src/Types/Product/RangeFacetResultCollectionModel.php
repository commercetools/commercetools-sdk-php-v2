<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\FacetResultCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class RangeFacetResultCollectionModel extends FacetResultCollectionModel implements RangeFacetResultCollection
{

    /**
     * @param RangeFacetResult $value
     * @return RangeFacetResultCollection
     */
    public function add($value) {
        if (!$value instanceof RangeFacetResult) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return RangeFacetResult
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof RangeFacetResult) {
            $data = $this->mapData(RangeFacetResult::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
