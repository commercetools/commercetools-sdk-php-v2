<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\UpdateCollection;


interface ReviewUpdateCollection extends UpdateCollection {
    /**
     * @param $index
     * @return ReviewUpdate
     */
    public function at($index);

    /**
     * @return ReviewUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewUpdate
     */
    public function map($data, $index);
}
