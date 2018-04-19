<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PriceChangedErrorCollectionModel extends ErrorObjectCollectionModel implements PriceChangedErrorCollection
{

    /**
     * @param PriceChangedError $value
     * @return PriceChangedErrorCollection
     */
    public function add($value) {
        if (!$value instanceof PriceChangedError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PriceChangedError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PriceChangedError) {
            $data = $this->mapData(PriceChangedError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
