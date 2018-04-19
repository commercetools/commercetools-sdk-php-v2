<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class FacetResultsCollectionModel extends JsonCollection implements FacetResultsCollection
{

    /**
     * @param FacetResults $value
     * @return FacetResultsCollection
     */
    public function add($value) {
        if (!$value instanceof FacetResults) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return FacetResults
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof FacetResults) {
            $data = $this->mapData(FacetResults::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
