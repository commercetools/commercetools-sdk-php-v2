<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollection;


interface ReviewSetKeyActionCollection extends ReviewUpdateActionCollection
{
    /**
     * @param $index
     * @return ReviewSetKeyAction
     */
    public function at($index);

    /**
     * @return ReviewSetKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewSetKeyAction
     */
    public function map($data, $index);
}
