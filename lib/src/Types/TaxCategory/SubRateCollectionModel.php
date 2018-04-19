<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class SubRateCollectionModel extends JsonCollection implements SubRateCollection
{

    /**
     * @param SubRate $value
     * @return SubRateCollection
     */
    public function add($value) {
        if (!$value instanceof SubRate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SubRate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SubRate) {
            $data = $this->mapData(SubRate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
