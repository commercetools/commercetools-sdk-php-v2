<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface LineItemDraftCollection extends Collection
{
    /**
     * @param $index
     * @return LineItemDraft
     */
    public function at($index);

    /**
     * @return LineItemDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return LineItemDraft
     */
    public function map($data, $index);
}
