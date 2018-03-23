<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;

class AssetCollectionModel extends JsonCollection implements AssetCollection {

    /**
     * @param Asset $value
     * @return AssetCollection
     */
    public function add($value) {
        if (!$value instanceof Asset) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Asset
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Asset) {
            $data = $this->mapData(Asset::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
