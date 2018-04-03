<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class TaxPortionCollectionModel extends JsonCollection implements TaxPortionCollection {

    /**
     * @param TaxPortion $value
     * @return TaxPortionCollection
     */
    public function add($value) {
        if (!$value instanceof TaxPortion) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxPortion
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxPortion) {
            $data = $this->mapData(TaxPortion::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
