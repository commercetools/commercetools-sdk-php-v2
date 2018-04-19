<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InvalidFieldErrorCollectionModel extends ErrorObjectCollectionModel implements InvalidFieldErrorCollection
{

    /**
     * @param InvalidFieldError $value
     * @return InvalidFieldErrorCollection
     */
    public function add($value) {
        if (!$value instanceof InvalidFieldError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InvalidFieldError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InvalidFieldError) {
            $data = $this->mapData(InvalidFieldError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
