<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ImageDimensionsCollectionModel extends JsonCollection implements ImageDimensionsCollection {

    /**
     * @param ImageDimensions $value
     * @return ImageDimensionsCollection
     */
    public function add($value) {
        if (!$value instanceof ImageDimensions) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ImageDimensions
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ImageDimensions) {
            $data = $this->mapData(ImageDimensions::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
