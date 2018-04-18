<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollection;


interface ReviewTransitionStateActionCollection extends ReviewUpdateActionCollection {
    /**
     * @param $index
     * @return ReviewTransitionStateAction
     */
    public function at($index);

    /**
     * @return ReviewTransitionStateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewTransitionStateAction
     */
    public function map($data, $index);
}
