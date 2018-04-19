<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface CustomLineItemDraftCollection extends Collection
{
    /**
     * @param $index
     * @return CustomLineItemDraft
     */
    public function at($index);

    /**
     * @return CustomLineItemDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomLineItemDraft
     */
    public function map($data, $index);
}
