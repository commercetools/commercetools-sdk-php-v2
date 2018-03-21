<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;

class SyncInfoCollectionModel extends JsonCollection implements SyncInfoCollection {

    /**
     * @param SyncInfo $value
     * @return SyncInfoCollection
     */
    public function add($value) {
        if (!$value instanceof SyncInfo) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SyncInfo
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SyncInfo) {
            $data = $this->mapData(SyncInfo::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
