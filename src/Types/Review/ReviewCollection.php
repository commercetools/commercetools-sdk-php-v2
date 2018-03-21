<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Base\Collection;

interface ReviewCollection extends Collection {
    /**
     * @param $index
     * @return Review
     */
    public function at($index);

    /**
     * @return Review
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Review
     */
    public function map($data, $index);

    /**
     * @param $id
     * @return string
     */
    public function byId($id);
}
