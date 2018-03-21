<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;

class PriceTierCollectionModel extends JsonCollection implements PriceTierCollection {

    /**
     * @param PriceTier $value
     * @return PriceTierCollection
     */
    public function add($value) {
        if (!$value instanceof PriceTier) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PriceTier
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PriceTier) {
            $data = $this->mapData(PriceTier::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
