<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeReferenceCollectionModel extends ReferenceCollectionModel implements TypeReferenceCollection {

    /**
     * @param TypeReference $value
     * @return TypeReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof TypeReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypeReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypeReference) {
            $data = $this->mapData(TypeReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
