<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollection;


interface ReviewSetCustomTypeActionCollection extends ReviewUpdateActionCollection {
    /**
     * @param $index
     * @return ReviewSetCustomTypeAction
     */
    public function at($index);

    /**
     * @return ReviewSetCustomTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewSetCustomTypeAction
     */
    public function map($data, $index);
}
