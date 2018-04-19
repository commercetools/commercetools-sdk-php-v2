<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ParcelCollectionModel extends JsonCollection implements ParcelCollection
{

    /**
     * @param Parcel $value
     * @return ParcelCollection
     */
    public function add($value) {
        if (!$value instanceof Parcel) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Parcel
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Parcel) {
            $data = $this->mapData(Parcel::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
