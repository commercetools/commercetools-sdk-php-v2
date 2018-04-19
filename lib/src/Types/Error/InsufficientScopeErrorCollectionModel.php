<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InsufficientScopeErrorCollectionModel extends ErrorObjectCollectionModel implements InsufficientScopeErrorCollection
{

    /**
     * @param InsufficientScopeError $value
     * @return InsufficientScopeErrorCollection
     */
    public function add($value) {
        if (!$value instanceof InsufficientScopeError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InsufficientScopeError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InsufficientScopeError) {
            $data = $this->mapData(InsufficientScopeError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
