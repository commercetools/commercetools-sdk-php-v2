<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Common\ReferenceCollection;


interface ReviewReferenceCollection extends ReferenceCollection {
    /**
     * @param $index
     * @return ReviewReference
     */
    public function at($index);

    /**
     * @return ReviewReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewReference
     */
    public function map($data, $index);
}
