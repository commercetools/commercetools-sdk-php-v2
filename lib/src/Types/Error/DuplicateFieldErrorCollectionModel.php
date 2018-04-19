<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DuplicateFieldErrorCollectionModel extends ErrorObjectCollectionModel implements DuplicateFieldErrorCollection
{

    /**
     * @param DuplicateFieldError $value
     * @return DuplicateFieldErrorCollection
     */
    public function add($value) {
        if (!$value instanceof DuplicateFieldError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DuplicateFieldError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DuplicateFieldError) {
            $data = $this->mapData(DuplicateFieldError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
