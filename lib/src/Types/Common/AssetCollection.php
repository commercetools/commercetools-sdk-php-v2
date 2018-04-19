<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface AssetCollection extends Collection
{
    /**
     * @param $index
     * @return Asset
     */
    public function at($index);

    /**
     * @return Asset
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Asset
     */
    public function map($data, $index);
}
