<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface AssetDimensionsCollection extends Collection
{
    /**
     * @param $index
     * @return AssetDimensions
     */
    public function at($index);

    /**
     * @return AssetDimensions
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AssetDimensions
     */
    public function map($data, $index);
}
