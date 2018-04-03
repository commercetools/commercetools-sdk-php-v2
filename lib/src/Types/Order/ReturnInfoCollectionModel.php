<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ReturnInfoCollectionModel extends JsonCollection implements ReturnInfoCollection {

    /**
     * @param ReturnInfo $value
     * @return ReturnInfoCollection
     */
    public function add($value) {
        if (!$value instanceof ReturnInfo) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReturnInfo
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReturnInfo) {
            $data = $this->mapData(ReturnInfo::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
