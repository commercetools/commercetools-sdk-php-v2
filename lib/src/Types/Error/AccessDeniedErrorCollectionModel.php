<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AccessDeniedErrorCollectionModel extends ErrorObjectCollectionModel implements AccessDeniedErrorCollection {

    /**
     * @param AccessDeniedError $value
     * @return AccessDeniedErrorCollection
     */
    public function add($value) {
        if (!$value instanceof AccessDeniedError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AccessDeniedError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AccessDeniedError) {
            $data = $this->mapData(AccessDeniedError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
