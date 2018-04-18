<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InvalidTokenErrorCollectionModel extends ErrorObjectCollectionModel implements InvalidTokenErrorCollection {

    /**
     * @param InvalidTokenError $value
     * @return InvalidTokenErrorCollection
     */
    public function add($value) {
        if (!$value instanceof InvalidTokenError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InvalidTokenError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InvalidTokenError) {
            $data = $this->mapData(InvalidTokenError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
