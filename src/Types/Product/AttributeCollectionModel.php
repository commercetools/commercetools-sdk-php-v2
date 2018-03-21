<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;

class AttributeCollectionModel extends JsonCollection implements AttributeCollection {

    /**
     * @param Attribute $value
     * @return AttributeCollection
     */
    public function add($value) {
        if (!$value instanceof Attribute) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Attribute
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Attribute) {
            $data = $this->mapData(Attribute::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
