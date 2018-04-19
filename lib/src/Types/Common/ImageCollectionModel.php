<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ImageCollectionModel extends JsonCollection implements ImageCollection
{

    /**
     * @param Image $value
     * @return ImageCollection
     */
    public function add($value) {
        if (!$value instanceof Image) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Image
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Image) {
            $data = $this->mapData(Image::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
