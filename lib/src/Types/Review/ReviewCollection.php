<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Common\ResourceCollection;


interface ReviewCollection extends ResourceCollection
{
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
     * @param string $id
     * @return Review
     */
    public function byId($id);

}
