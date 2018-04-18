<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ConcurrentModificationErrorCollectionModel extends ErrorObjectCollectionModel implements ConcurrentModificationErrorCollection {

    /**
     * @param ConcurrentModificationError $value
     * @return ConcurrentModificationErrorCollection
     */
    public function add($value) {
        if (!$value instanceof ConcurrentModificationError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ConcurrentModificationError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ConcurrentModificationError) {
            $data = $this->mapData(ConcurrentModificationError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
