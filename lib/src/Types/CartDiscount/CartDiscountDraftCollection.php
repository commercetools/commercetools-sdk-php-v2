<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Base\Collection;

interface CartDiscountDraftCollection extends Collection
{
    /**
     * @param $index
     * @return CartDiscountDraft
     */
    public function at($index);

    /**
     * @return CartDiscountDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartDiscountDraft
     */
    public function map($data, $index);
}
