<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeUpdateCollectionModel extends UpdateCollectionModel implements TypeUpdateCollection {

    /**
     * @param TypeUpdate $value
     * @return TypeUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof TypeUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypeUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypeUpdate) {
            $data = $this->mapData(TypeUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
