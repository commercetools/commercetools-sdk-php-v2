<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollection;


interface ReviewSetLocaleActionCollection extends ReviewUpdateActionCollection {
    /**
     * @param $index
     * @return ReviewSetLocaleAction
     */
    public function at($index);

    /**
     * @return ReviewSetLocaleAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewSetLocaleAction
     */
    public function map($data, $index);
}
