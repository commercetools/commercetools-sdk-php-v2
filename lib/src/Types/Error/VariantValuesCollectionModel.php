<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class VariantValuesCollectionModel extends JsonCollection implements VariantValuesCollection {

    /**
     * @param VariantValues $value
     * @return VariantValuesCollection
     */
    public function add($value) {
        if (!$value instanceof VariantValues) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return VariantValues
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof VariantValues) {
            $data = $this->mapData(VariantValues::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
