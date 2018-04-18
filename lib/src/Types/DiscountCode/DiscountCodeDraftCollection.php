<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Base\Collection;

interface DiscountCodeDraftCollection extends Collection {
    /**
     * @param $index
     * @return DiscountCodeDraft
     */
    public function at($index);

    /**
     * @return DiscountCodeDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeDraft
     */
    public function map($data, $index);
}
