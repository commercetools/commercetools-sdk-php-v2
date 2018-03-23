<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface AssetSourceCollection extends Collection {
    /**
     * @param $index
     * @return AssetSource
     */
    public function at($index);

    /**
     * @return AssetSource
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AssetSource
     */
    public function map($data, $index);
}
