<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class FacetResultCollectionModel extends JsonCollection implements FacetResultCollection
{

    /**
     * @param FacetResult $value
     * @return FacetResultCollection
     */
    public function add($value) {
        if (!$value instanceof FacetResult) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return FacetResult
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof FacetResult) {
            $resolvedClass = $this->resolveDiscriminator(FacetResult::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
