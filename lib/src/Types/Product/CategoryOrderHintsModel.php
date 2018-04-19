<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonMap;
use Commercetools\Exception\InvalidArgumentException;

class CategoryOrderHintsModel extends JsonMap implements CategoryOrderHints
{

    /**
     * @param $data
     * @param $index
     * @return string
     */
    public function map($data, $index)
    {
        if (!is_null($data)) {
            $data = (string)$data;
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
