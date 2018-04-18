<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Base\Collection;

interface ReviewDraftCollection extends Collection {
    /**
     * @param $index
     * @return ReviewDraft
     */
    public function at($index);

    /**
     * @return ReviewDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewDraft
     */
    public function map($data, $index);
}
