<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Base\Collection;

interface ShoppingListLineItemDraftCollection extends Collection
{
    /**
     * @param $index
     * @return ShoppingListLineItemDraft
     */
    public function at($index);

    /**
     * @return ShoppingListLineItemDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListLineItemDraft
     */
    public function map($data, $index);
}
