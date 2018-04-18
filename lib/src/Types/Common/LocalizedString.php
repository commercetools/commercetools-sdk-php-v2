<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Map;

interface LocalizedString extends Map {
    /**
     * @param $key
     * @return string
     */
    public function get($key);

    /**
     * @param $data
     * @param $index
     * @return string
     */
    public function map($data, $index);
}
