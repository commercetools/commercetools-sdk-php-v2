<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonMap;
use Commercetools\Exception\InvalidArgumentException;

class LocalizedStringModel extends JsonMap implements LocalizedString {

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
