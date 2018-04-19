<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Base\Collection;

interface TextLineItemDraftCollection extends Collection
{
    /**
     * @param $index
     * @return TextLineItemDraft
     */
    public function at($index);

    /**
     * @return TextLineItemDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TextLineItemDraft
     */
    public function map($data, $index);
}
