<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InvalidCurrentPasswordErrorCollectionModel extends ErrorObjectCollectionModel implements InvalidCurrentPasswordErrorCollection {

    /**
     * @param InvalidCurrentPasswordError $value
     * @return InvalidCurrentPasswordErrorCollection
     */
    public function add($value) {
        if (!$value instanceof InvalidCurrentPasswordError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InvalidCurrentPasswordError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InvalidCurrentPasswordError) {
            $data = $this->mapData(InvalidCurrentPasswordError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
