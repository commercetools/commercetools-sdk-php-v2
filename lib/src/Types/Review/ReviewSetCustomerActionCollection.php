<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollection;


interface ReviewSetCustomerActionCollection extends ReviewUpdateActionCollection {
    /**
     * @param $index
     * @return ReviewSetCustomerAction
     */
    public function at($index);

    /**
     * @return ReviewSetCustomerAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewSetCustomerAction
     */
    public function map($data, $index);
}
