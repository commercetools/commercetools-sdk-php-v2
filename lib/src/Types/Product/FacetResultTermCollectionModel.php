<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class FacetResultTermCollectionModel extends JsonCollection implements FacetResultTermCollection
{

    /**
     * @param FacetResultTerm $value
     * @return FacetResultTermCollection
     */
    public function add($value) {
        if (!$value instanceof FacetResultTerm) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return FacetResultTerm
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof FacetResultTerm) {
            $data = $this->mapData(FacetResultTerm::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
