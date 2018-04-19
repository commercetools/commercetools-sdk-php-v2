<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Base\Collection;

interface ProductDiscountDraftCollection extends Collection
{
    /**
     * @param $index
     * @return ProductDiscountDraft
     */
    public function at($index);

    /**
     * @return ProductDiscountDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDiscountDraft
     */
    public function map($data, $index);
}
