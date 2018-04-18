<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class RequiredFieldErrorCollectionModel extends ErrorObjectCollectionModel implements RequiredFieldErrorCollection {

    /**
     * @param RequiredFieldError $value
     * @return RequiredFieldErrorCollection
     */
    public function add($value) {
        if (!$value instanceof RequiredFieldError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return RequiredFieldError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof RequiredFieldError) {
            $data = $this->mapData(RequiredFieldError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
