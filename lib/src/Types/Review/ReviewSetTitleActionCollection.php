<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollection;


interface ReviewSetTitleActionCollection extends ReviewUpdateActionCollection {
    /**
     * @param $index
     * @return ReviewSetTitleAction
     */
    public function at($index);

    /**
     * @return ReviewSetTitleAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewSetTitleAction
     */
    public function map($data, $index);
}
