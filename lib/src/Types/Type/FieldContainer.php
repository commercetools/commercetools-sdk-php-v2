<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\Map;

interface FieldContainer extends Map
{
    /**
     * @param $key
     * @return mixed
     */
    public function get($key);

    /**
     * @param $data
     * @param $index
     * @return mixed
     */
    public function map($data, $index);
}
