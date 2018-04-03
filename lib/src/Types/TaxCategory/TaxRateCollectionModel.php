<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class TaxRateCollectionModel extends JsonCollection implements TaxRateCollection {

    /**
     * @param TaxRate $value
     * @return TaxRateCollection
     */
    public function add($value) {
        if (!$value instanceof TaxRate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxRate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxRate) {
            $data = $this->mapData(TaxRate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
