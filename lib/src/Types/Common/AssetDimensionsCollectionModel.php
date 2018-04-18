<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class AssetDimensionsCollectionModel extends JsonCollection implements AssetDimensionsCollection {

    /**
     * @param AssetDimensions $value
     * @return AssetDimensionsCollection
     */
    public function add($value) {
        if (!$value instanceof AssetDimensions) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AssetDimensions
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AssetDimensions) {
            $data = $this->mapData(AssetDimensions::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
