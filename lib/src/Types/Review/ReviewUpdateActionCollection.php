<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Base\Collection;

interface ReviewUpdateActionCollection extends Collection {
    /**
     * @param $index
     * @return ReviewUpdateAction
     */
    public function at($index);

    /**
     * @return ReviewUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewUpdateAction
     */
    public function map($data, $index);
}
