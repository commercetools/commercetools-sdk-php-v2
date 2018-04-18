<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollection;


interface ReviewSetCustomFieldActionCollection extends ReviewUpdateActionCollection {
    /**
     * @param $index
     * @return ReviewSetCustomFieldAction
     */
    public function at($index);

    /**
     * @return ReviewSetCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewSetCustomFieldAction
     */
    public function map($data, $index);
}
