<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollection;


interface ReviewSetTextActionCollection extends ReviewUpdateActionCollection {
    /**
     * @param $index
     * @return ReviewSetTextAction
     */
    public function at($index);

    /**
     * @return ReviewSetTextAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewSetTextAction
     */
    public function map($data, $index);
}
