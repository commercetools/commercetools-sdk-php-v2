<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ErrorObjectCollectionModel extends JsonCollection implements ErrorObjectCollection {

    /**
     * @param ErrorObject $value
     * @return ErrorObjectCollection
     */
    public function add($value) {
        if (!$value instanceof ErrorObject) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ErrorObject
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ErrorObject) {
            $resolvedClass = $this->resolveDiscriminator(ErrorObject::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
