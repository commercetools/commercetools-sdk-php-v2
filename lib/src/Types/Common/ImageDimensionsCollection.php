<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface ImageDimensionsCollection extends Collection {
    /**
     * @param $index
     * @return ImageDimensions
     */
    public function at($index);

    /**
     * @return ImageDimensions
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ImageDimensions
     */
    public function map($data, $index);
}
