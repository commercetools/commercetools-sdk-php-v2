<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OutOfStockErrorCollectionModel extends ErrorObjectCollectionModel implements OutOfStockErrorCollection
{

    /**
     * @param OutOfStockError $value
     * @return OutOfStockErrorCollection
     */
    public function add($value) {
        if (!$value instanceof OutOfStockError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OutOfStockError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OutOfStockError) {
            $data = $this->mapData(OutOfStockError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
