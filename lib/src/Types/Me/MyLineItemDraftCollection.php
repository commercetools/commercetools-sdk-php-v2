<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Me;

use Commercetools\Base\Collection;

interface MyLineItemDraftCollection extends Collection
{
    /**
     * @param $index
     * @return MyLineItemDraft
     */
    public function at($index);

    /**
     * @return MyLineItemDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return MyLineItemDraft
     */
    public function map($data, $index);
}
