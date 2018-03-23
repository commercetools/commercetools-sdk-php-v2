<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface ImageCollection extends Collection {
    /**
     * @param $index
     * @return Image
     */
    public function at($index);

    /**
     * @return Image
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Image
     */
    public function map($data, $index);
}
