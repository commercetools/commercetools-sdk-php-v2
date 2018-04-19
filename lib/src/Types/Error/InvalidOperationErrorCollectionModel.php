<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InvalidOperationErrorCollectionModel extends ErrorObjectCollectionModel implements InvalidOperationErrorCollection
{

    /**
     * @param InvalidOperationError $value
     * @return InvalidOperationErrorCollection
     */
    public function add($value) {
        if (!$value instanceof InvalidOperationError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InvalidOperationError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InvalidOperationError) {
            $data = $this->mapData(InvalidOperationError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
