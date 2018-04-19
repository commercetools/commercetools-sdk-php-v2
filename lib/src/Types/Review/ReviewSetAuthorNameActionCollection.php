<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Review\ReviewUpdateActionCollection;


interface ReviewSetAuthorNameActionCollection extends ReviewUpdateActionCollection
{
    /**
     * @param $index
     * @return ReviewSetAuthorNameAction
     */
    public function at($index);

    /**
     * @return ReviewSetAuthorNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewSetAuthorNameAction
     */
    public function map($data, $index);
}
